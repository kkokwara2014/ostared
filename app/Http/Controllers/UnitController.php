<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::latest()->simplePaginate(15);
        return view('admin.unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $divisions = Division::orderBy('name', 'asc')->get();
        return view('admin.unit.create', compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|unique:units',
            'division_id' => 'required'
        ]);

        Unit::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'division_id' => $request->division_id,
        ]);

        return redirect()->route('units.index')->with('success', 'New Unit added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        return view('admin.unit.show', compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
