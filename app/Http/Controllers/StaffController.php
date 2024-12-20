<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Rank;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::latest()->simplePaginate(15);
        return view('admin.staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ranks = Rank::orderBy('name', 'asc')->get();
        $genders = Gender::orderBy('name', 'asc')->get();
        return view('admin.staff.create', compact('ranks', 'genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'phone' => 'required|min:11|unique:staff',
            'rank_id' => 'required',
            'gender_id' => 'required',
        ]);

        Staff::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'othername' => $request->othername,
            'phone' => $request->phone,
            'user_id' => auth()->user()->id,
            'rank_id' => $request->rank_id,
            'gender_id' => $request->gender_id,
        ]);

        return redirect()->route('staff.index')->with('success', 'New Staff added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($phone)
    {
        $staff = Staff::where('phone', $phone)->first();
        return view('admin.staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($phone)
    {
        $staff = Staff::where('phone', $phone)->first();
        $ranks = Rank::orderBy('name', 'asc')->get();
        $genders = Gender::orderBy('name', 'asc')->get();
        return view('admin.staff.edit', compact('staff', 'ranks', 'genders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $phone)
    {
        $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'phone' => 'required|min:11|unique:staff',
            'rank_id' => 'required',
            'gender_id' => 'required',
        ]);

        $staff = Staff::where('phone', $phone)->first();
        $staff->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'othername' => $request->othername,
            'phone' => $request->phone,
            'user_id' => auth()->user()->id,
            'rank_id' => $request->rank_id,
            'gender_id' => $request->gender_id,
        ]);

        return redirect()->route('staff.index')->with('success', 'Staff updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($phone)
    {
        $staff = Staff::where('phone', $phone)->first();
        $staff->delete();
        return redirect()->back()->with('deleted', $staff->firstname . ' deleted successfully!');
    }
}
