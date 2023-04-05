<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Collection;
use App\Models\Year;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function catalog($coinType = null): Factory|View|Application
    {
        $selectedType = $coinType;
        $query = Coin::query()->with('country', 'year');
        if ($coinType) {
            $query->where('type', $coinType);
        }

        $coins = $query->paginate(15);
        return view('coins.catalog', [
            'coins' => $coins,
            'countrySelect' => Coin::join('countries', 'coins.country_id', '=', 'countries.id')
                ->select('countries.country_name', 'countries.id')->distinct()->pluck('country_name', 'id'),
            'typeSelect' => Coin::distinct('type')->pluck('type'),
            'yearSelect' => Year::pluck('year', 'id'),
            'selectedType' => $selectedType
        ]);
    }


    public function addToMyCollection(Coin $coin, $year)
    {
        $saveColl = Collection::where('coin_id', $coin->id)->where('year', $year)->where('user_id', auth()->id());
        ($saveColl->count() !== 0) ? $saveColl->delete() : Collection::create(['coin_id' => $coin->id, 'year' => $year, 'user_id' => auth()->id()]);
        return redirect()->back();
    }

    public function selectCoin(Request $request)
    {
        $cs = $request->countrySelect;
        $ts = $request->typeSelect ? $request->typeSelect : null;
        $ys = $request->yearSelect;

        $query = Coin::query();

        if ($ts) {
            $query->where('type', $ts);
        }
        if ($cs) {
            $query->where('country_id', $cs);
        }
        if ($ys) {
            $year = Year::find($ys);
            $query->whereJsonContains('year', $year->year);
        }

        $coins = $query->paginate(15);

        return view("/coins/catalog",
            ["coins" => $coins,
                "countrySelect" => Coin::join('countries', 'coins.country_id', '=', 'countries.id')
                    ->select('countries.country_name', 'countries.id')->distinct()->pluck('country_name', 'id'),
                "typeSelect" => Coin::select('type')->distinct()->pluck('type')->toArray(),
                "yearSelect" => Year::pluck('year', 'id'),
                "ts" => $ts]);
    }


    public function detailedCoin(Coin $coin): Factory|View|Application
    {
        return view("coins/detailedCoin", ["coin" => $coin]);
    }
}
