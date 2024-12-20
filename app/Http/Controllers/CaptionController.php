<?php

namespace App\Http\Controllers;

use App\Models\Caption;
use App\Models\Posting;
use App\Models\Staff;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CaptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $captions = Caption::latest()->simplePaginate(15);
        return view('admin.caption.index', compact('captions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.caption.create');
    }

    public function deploymentoption($slug)
    {
        $caption = Caption::where('slug', $slug)->first();

        return view('admin.caption.postingoptions', compact('caption'));
    }

    public function singlestaffdeployment($slug)
    {
        $caption = Caption::where('slug', $slug)->first();
        $staffs = Staff::latest()->simplePaginate(15);
        $units = Unit::orderBy('name', 'asc')->get();
        return view('admin.deploymentoptions.singledeployment', compact('caption', 'units', 'staffs'));
    }
    public function batchstaffdeployment($slug)
    {
        $caption = Caption::where('slug', $slug)->first();
        $staffs = Staff::latest()->simplePaginate(15);
        $units = Unit::orderBy('name', 'asc')->get();
        return view('admin.deploymentoptions.batchdeployment', compact('caption', 'units', 'staffs'));
    }

    public function makeredeploymentbasedonoption(Request $request, $slug)
    {
        $caption = Caption::where('slug', $slug)->first();
        $units = Unit::orderBy('name', 'asc')->get();
        $staffs = Staff::where('isdeployed', 0)->orWhere('deploydate', '>', Carbon::now()->years(3))->orWhere('deploydate', '')->latest()->simplePaginate(15);

        $deploymentoption = $request->input('deploymentoption');

        if ($request->deploymentoption == null) {
            return redirect()->back()->with('deleted', 'Kindly select at least one option!');
        } else {
            if ($deploymentoption == 'Single') {
                return view('admin.deploymentoptions.singledeployment', compact('caption', 'units', 'staffs'));
            } else {
                return view('admin.deploymentoptions.batchdeployment', compact('caption', 'units', 'staffs'));
            }
        }
    }

    public function continuesinglestaffdeployment($id, $slug)
    {
        $staff = Staff::where('id', $id)->first();
        $caption = Caption::where('slug', $slug)->first();
        $units = Unit::orderBy('name', 'asc')->simplePaginate(10);
        return view('admin.deploymentoptions.singledeploymentfinal', compact('staff', 'caption', 'units'));
    }

    public function redeploystaff($slug)
    {
        $caption = Caption::where('slug', $slug)->first();
        $units = Unit::orderBy('name', 'asc')->get();
        $staffs = Staff::where('isdeployed', 0)->orWhere('deploydate', '>', Carbon::now()->years(3))->orWhere('deploydate', '')->latest()->simplePaginate(15);
        return view('admin.caption.redeploystaff', compact('caption', 'units', 'staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|string|unique:captions'
        ]);

        Caption::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('captions.index')->with('success', 'New Redeployment Caption added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Caption $caption)
    {
        $postings = Posting::where('caption_id', $caption->id)->simplePaginate(15);
        // $postings = Posting::select()->where('caption_id', $caption->id)->distinct()->simplePaginate(15);
        return view('admin.caption.show', compact('caption', 'postings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Caption $caption)
    {
        return view('admin.caption.edit', compact('caption'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Caption $caption)
    {
        $request->validate([
            'name' => 'required|min:3|string|unique:captions'
        ]);

        $caption->update([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('captions.index')->with('success', 'Redeployment Caption updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caption $caption)
    {
        $caption->delete();
        return redirect()->back()->with('deleted', $caption->name . ' deleted successfully.');
    }
}
