<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function all()
    {
        return view("/places/places",
            ["countries" => Coin::join('countries', 'coins.country_id', '=', 'countries.id')
                ->select('countries.country_name', 'countries.id')->distinct()->pluck('country_name', 'id'),
                "places" => Place::paginate(20)]);
    }

    public function searchPlace(Request $request)
    {
        $query = $request->input('searchPlace');
        $places = Place::where('city_name', 'LIKE', "%$query%")->orWhere('postcode', 'LIKE', "%$query%")
            ->orWhere('street_name', 'LIKE', "%$query%")->orWhereHas('country', function ($q) use ($query) {
                $q->where('country_name', 'LIKE', "%$query%");
            })
            ->paginate(20);
        if (count($places) === 0) {
            $places = 0;
        }
        return view('places/places', compact('places', 'query'));
    }

    public function addPlace()
    {
        return view("/places/addPlace", ["countries" => Coin::join('countries', 'coins.country_id', '=', 'countries.id')
            ->select('countries.country_name', 'countries.id')->distinct()->pluck('country_name', 'id')]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'city_name' => 'required|string|min:2|max:50',
            'postcode' => 'required',
            'street_name' => 'required|string|min:10|max:50',
        ]);
        $place = new Place;
        $place->city_name = $request->city_name;
        $place->postcode = $request->postcode;
        $place->street_name = $request->street_name;
        $place->country_id = $request->selectCountry;
        $place->latitude = $request->latitude;
        $place->longitude = $request->longitude;
        $place->save();

        $countries = Coin::join('countries', 'coins.country_id', '=', 'countries.id')
            ->select('countries.country_name', 'countries.id')
            ->distinct()
            ->pluck('country_name', 'id');

        $places = Place::all();

        return redirect()->route('places')->with(compact('countries', 'places'));
    }

    public function toggle($id)
    {
        $place = Place::findOrFail($id);
        $place->isAccepted = !$place->isAccepted;
        $place->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        Place::destroy($id);
        return redirect("places");
    }
}
