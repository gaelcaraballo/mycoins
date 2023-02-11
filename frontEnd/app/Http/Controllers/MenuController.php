<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{

    public function all(): Factory|View|Application
    {
        if (!auth()->user()) {
            return view("/menu");
        } else {
            $collection = Coin::join('collection', 'collection.coin_id', '=', 'coins.id')
                ->where('collection.user_id', auth()->id())
                ->select(DB::raw('count(*) as count, type'))
                ->groupBy('type')
                ->pluck('count', 'type');
        }
        return view("/menu",
            ["countCirc" => Coin::where('type', 'circulation')->count(),
                "countComm" => Coin::where('type', 'commemorative')->count(),
                "collectionCount" => $collection]);
    }
}
