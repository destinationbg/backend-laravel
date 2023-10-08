<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Municipality\StoreRequest;
use App\Http\Requests\Municipality\UpdateRequest;
use App\Models\Municipality;
use Illuminate\View\View;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $municipalities = Municipality::all();

        return view('localities.municipalities.index', compact('municipalities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('localities.municipalities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $municipality = Municipality::create($request->validated());

        return redirect()->route('localities.municipalities.show', $municipality);
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipality $municipality)
    {
        return view('localities.municipalities.show', compact('municipality'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Municipality $municipality)
    {
        return view('localities.municipalities.edit', compact('municipality'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Municipality $municipality)
    {
        $municipality->update($request->validated());

        return redirect()->route('municipalities.show', $municipality);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Municipality $municipality)
    {
        $municipality->delete();

        return redirect()->route('municipalities.index');
    }
}
