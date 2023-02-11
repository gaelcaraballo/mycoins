<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Collection;
use App\Models\Country;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class StatController extends Controller
{
    public function statistics(): Factory|View|Application
    {
        $userId = auth()->id();
        $totalCoinsUser = Collection::where('user_id', $userId)->pluck('coin_id')->toArray();
        $countryId = Coin::distinct()->pluck('country_id');
        $coins = Coin::selectRaw('count(coins.id) as coin_id, country_name')
            ->leftJoin('countries', 'coins.country_id', '=', 'countries.id')
            ->groupBy('countries.country_name')->get();
        $countsPerCountry = [];
        foreach ($coins as $coin) {
            $countsPerCountry[$coin->country_name] = $coin->coin_id;
        }
        $countries = Country::select('country_name', 'country_image')->whereIn('id', $countryId)->get();
        $totalCoinsUserPerCountry = Coin::join('collection', 'coins.id', '=', 'collection.coin_id')
            ->join('countries', 'coins.country_id', '=', 'countries.id')
            ->where('collection.user_id', $userId)
            ->select('countries.country_name', 'countries.id', DB::raw('count(coins.id) as coin_count'))
            ->groupBy('countries.country_name', 'countries.id')
            ->get();
        foreach ($countries as $country) {
            $country->coinCount = $countsPerCountry[$country->country_name];
            foreach($totalCoinsUserPerCountry as $coinUserPerCountry){
                if ($coinUserPerCountry->country_name == $country->country_name){
                    $country->coinCountUser = $coinUserPerCountry->coin_count;
                }
            }
        }
        return view("/statistics",
            ["totalCoins" => Coin::count(),
                "totalCoinsUser" => count($totalCoinsUser),
                "totalCoinsUserPerCountry" => $totalCoinsUserPerCountry,
                "countries" => $countries]);
    }
}
