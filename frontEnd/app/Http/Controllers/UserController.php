<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Country;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function all(): Factory|View|Application
    {
        $users = User::select("id", "nickname", "avatar", "country_id", "created_at")
            ->withCount('collection')->where("id", "!=", auth()->id())
            ->whereIn('country_id', Country::pluck('id')->unique())
            ->get();

        $countries = Country::pluck('country_name', 'id')
            ->only($users->pluck('country_id')->unique());

        return view("users/users", ["users" => $users, "countries" => $countries]);
    }


    public function selectCountry(Request $request)
    {
        $validated = $request->validate(['selectCountry' => 'nullable|exists:countries,id']);
        $usersQuery = User::select("id", "nickname", "avatar", "country_id", "created_at")
            ->withCount('collection')
            ->where("id", "!=", auth()->id());

        if ($validated['selectCountry']) {
            $usersQuery->where("country_id", "=", $validated['selectCountry']);
        }
        $users = $usersQuery->get();
        $countries = User::join('countries', 'users.country_id', '=', 'countries.id')
            ->where("users.id", "!=", auth()->id())
            ->select('countries.country_name', 'countries.id')->distinct()->pluck('country_name', 'id');
        return view("users/users",
            ["users" => $users, "countries" => $countries]);
    }

    public function detailedUser(User $user): View|Factory|RedirectResponse|Application
    {
        if (auth()->id() === $user->id || !$user->exists) return redirect()->route('profile');

        $coins = Coin::join('collection', 'coins.id', '=', 'collection.coin_id')
            ->where('collection.user_id', $user->id)
            ->groupBy('coins.id')
            ->select('coins.*', DB::raw('GROUP_CONCAT(DISTINCT collection.year ORDER BY collection.year ASC SEPARATOR " - ") as userCoinInYears'))
            ->distinct()
            ->paginate(4);
        $countCollection = $user->collection()->count();
        return view("users/detailedUser", compact('user', 'coins', 'countCollection'));
    }


    public function delete(User $user)
    {
        $user->delete();
        return redirect("users");
    }
}
