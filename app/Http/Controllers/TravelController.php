<?php

namespace App\Http\Controllers;

use App\Models\travel;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoretravelRequest;
use App\Http\Requests\UpdatetravelRequest;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('title')) {
            $travels = Travel::where('title', 'like', '%' . $request->title . '%')->get();
        } else {
            $travels = Travel::all();
        }

        if ($request->has('departure')) {
            $departures = Travel::where('departure_time', 'like', '%' . $request->departure_time . '%')->get();
        } else {
            $departures = Travel::all();
        }

        if ($request->has('price')) {
            $prices = Travel::where('price', 'like', '%' . $request->price . '%')->get();
        } else {
            $prices = Travel::all();
        }

        if ($request->has('departure')) {
            $departureRequest = Travel::where('departure_time', $request->departure_time)->first();
        } 
        $departures = Travel::all();

        return view('product.page', [
            'travels' => $travels,
            'departureRequest' => $departureRequest ?? null,
            'departures' => $departures,
            'prices' => $prices
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretravelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $travel = Travel::where('id', $request->id)->first();
        $travels = Travel::all();

        return view('product.detail.page', [
            'travel' => $travel,
            'travels' => $travels
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetravelRequest $request, travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(travel $travel)
    {
        //
    }
}
