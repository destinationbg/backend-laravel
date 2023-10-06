<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Region\StoreRequest;
use App\Http\Requests\Region\UpdateRequest;
use App\Models\Region;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $regions = Region::all();

        return view('regions.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('regions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $region = Region::create($request->validated());

        return redirect()->route('regions.show', $region);
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region): View
    {
        return view('regions.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Region $region): View
    {
        return view('regions.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Region $region): RedirectResponse
    {
        $region->update($request->validated());

        return redirect()->route('regions.show', $region);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Region $region): RedirectResponse
    {
        $region->delete();

        return redirect()->route('regions.index');
    }
}
