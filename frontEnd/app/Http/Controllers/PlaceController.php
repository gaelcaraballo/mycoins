<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Country;
use App\Models\Place;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PlaceController extends Controller
{
    public function all(): Factory|View|Application
    {
        return view("/places/places",
            ["countries" => Coin::join('countries', 'coins.country_id', '=', 'countries.id')
                ->select('countries.country_name', 'countries.id')->distinct()->pluck('country_name', 'id'),
                "places" => Place::simplePaginate(20)]);
    }

    public function addPlace(): Factory|View|Application
    {
        return view("/places/addPlace");
    }

    public function store(Request $request): RedirectResponse
    {
        $country = Country::where('country_name', 'like', '%' . $request->country . '%')->pluck('id');
        $request->validate([
            'city_name' => 'required|string|min:2|max:50',
            'postcode' => 'required',
            'street_name' => 'required|string|min:10|max:50',
        ]);
        Place::create([
            'city_name' => $request->city_name,
            'postcode' => $request->postcode,
            'street_name' => $request->street_name,
            'country_id' => $country[0],
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);
        $places = Place::all();
        return redirect()->route('places')->with(compact('places'));
    }

    public function update(Place $place, Request $request): RedirectResponse
    {
        $country = Country::where('country_name', 'like', '%' . $request->country . '%')->pluck('id');
        $request->validate([
            'country' => 'required|exists:countries,country_name',
            'city_name' => 'required|string|min:2|max:50',
            'postcode' => 'required',
            'street_name' => 'required|string|min:10|max:50',
        ]);
        $place->city_name = $request->city_name;
        $place->postcode = $request->postcode;
        $place->street_name = $request->street_name;
        $place->country_id = $country[0];
        $place->latitude = $request->latitude;
        $place->longitude = $request->longitude;
        $place->save();
        $places = Place::all();
        return redirect()->route('places')->with(compact('places'));
    }

    public function delete(Place $place): Redirector|Application|RedirectResponse
    {
        Place::destroy($place->id);
        return redirect('/places');
    }

    public function detailedPlace(Place $place): Factory|View|Application
    {
        $detailedPlace = $place;
        $countries = Country::select("id", "country_name")->get();
        return view("places/detailedPlace", compact('detailedPlace', 'countries'))->with('success', '');
    }

    public function searchPlace(Request $request): Factory|View|Application
    {
        $query = $request->input('searchPlace');
        $places = Place::where('city_name', 'LIKE', "%$query%")->orWhere('postcode', 'LIKE', "%$query%")
            ->orWhere('street_name', 'LIKE', "%$query%")->orWhereHas('country', function ($q) use ($query) {
                $q->where('country_name', 'LIKE', "%$query%");
            })->simplePaginate(20);
        if (count($places) === 0) {
            $places = 0;
        }
        return view('places/places', compact('places', 'query'));
    }

    public function toggle(Place $place): RedirectResponse
    {
        $place->isAccepted = !$place->isAccepted;
        $place->save();
        return redirect()->back();
    }
}
