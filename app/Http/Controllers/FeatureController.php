<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Feature\StoreRequest;
use App\Http\Requests\Feature\UpdateRequest;
use App\Models\Feature;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $features = Feature::all();

        return view('features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $feature = Feature::create($request->validated());

        return redirect()->route('features.show', $feature);
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature): View
    {
        return view('features.show', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature): View
    {
        return view('features.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Feature $feature): RedirectResponse
    {
        $feature->update($request->validated());

        return redirect()->route('features.show', $feature);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature): RedirectResponse
    {
        $feature->delete();

        return redirect()->route('features.index');
    }
}
