<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Collection;
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
        $users = User::select("id", "nickname", "avatar", "country_id", "created_at",
            DB::raw("(SELECT COUNT(*) FROM collection WHERE collection.user_id = users.id) as coin_count"))
            ->where("id", "!=", auth()->id())->get();
        $countries = User::join('countries', 'users.country_id', '=', 'countries.id')
            ->where("users.id", "!=", auth()->id())
            ->select('countries.country_name', 'countries.id')->distinct()->pluck('country_name', 'id');
        return view("users/users",
            ["users" => $users, "countries" => $countries]);
    }

    public function selectCountry(Request $request)
    {
        $validated = $request->validate([
            'selectCountry' => 'nullable|exists:countries,id'
        ]);
        $users = User::select("id", "nickname", "avatar", "country_id", "created_at",
            DB::raw("(SELECT COUNT(*) FROM collection WHERE collection.user_id = users.id) as coin_count"))
            ->where("id", "!=", auth()->id())
            ->when($validated['selectCountry'], function ($query, $selectCountry) {
                return $query->where("country_id", "=", $selectCountry);
            })->get();
        $countries = User::join('countries', 'users.country_id', '=', 'countries.id')
            ->where("users.id", "!=", auth()->id())
            ->select('countries.country_name', 'countries.id')->distinct()->pluck('country_name', 'id');
        return view("users/users",
            ["users" => $users, "countries" => $countries]);
    }

    public function detailedUser($id): View|Factory|RedirectResponse|Application
    {
        $detailedUser = User::find($id);
        if (auth()->id() == $id) {
            return redirect()->action([ProfileController::class, "profile"]);
        }
        if (!$detailedUser) {
            return redirect()->action([UserController::class, "all"]);
        }
        return view("users/detailedUser",
            ["detailedUser" => $detailedUser,
                "coins" => Coin::join('collection', 'coins.id', '=', 'collection.coin_id')
                    ->select('coins.*', DB::raw('GROUP_CONCAT(DISTINCT collection.year ORDER BY collection.year ASC SEPARATOR " - ") as userCoinInYears'))
                    ->where('collection.user_id', $id)
                    ->groupBy('coins.id')
                    ->distinct()
                    ->paginate(8),
                "countCollection" => Collection::where('user_id', $id)->count()]);
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect("users");
    }
}
