<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\City\StoreRequest;
use App\Http\Requests\City\UpdateRequest;
use App\Models\City;
use Illuminate\View\View;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $cities = City::all();

        return view('localities.cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('localities.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $city = City::create($request->validated());

        return redirect()->route('localities.cities.show', $city);
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        return view('localities.cities.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        return view('localities.cities.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, City $city)
    {
        $city->update($request->validated());

        return redirect()->route('cities.show', $city);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('cities.index');
    }
}
