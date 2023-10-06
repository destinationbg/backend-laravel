<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Province\StoreRequest;
use App\Http\Requests\Province\UpdateRequest;
use App\Models\Province;
use Illuminate\View\View;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $provinces = Province::all();

        return view('provinces.index', compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('provinces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $province = Province::create($request->validated());

        return redirect()->route('provinces.show', $province);
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        return view('provinces.show', compact('province'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
        return view('provinces.edit', compact('province'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Province $province)
    {
        $province->update($request->validated());

        return redirect()->route('provinces.show', $province);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        $province->delete();

        return redirect()->route('provinces.index');
    }
}
