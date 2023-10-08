<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Village\StoreRequest;
use App\Http\Requests\Village\UpdateRequest;
use App\Models\Village;
use Illuminate\View\View;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $villages = Village::all();

        return view('localities.villages.index', compact('villages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('localities.villages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $village = Village::create($request->validated());

        return redirect()->route('localities.villages.show', $village);
    }

    /**
     * Display the specified resource.
     */
    public function show(Village $village)
    {
        return view('localities.villages.show', compact('village'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Village $village)
    {
        return view('localities.villages.edit', compact('village'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Village $village)
    {
        $village->update($request->validated());

        return redirect()->route('villages.show', $village);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Village $village)
    {
        $village->delete();

        return redirect()->route('villages.index');
    }
}
