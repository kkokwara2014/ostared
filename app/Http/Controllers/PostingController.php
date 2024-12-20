<?php

namespace App\Http\Controllers;

use App\Models\Caption;
use App\Models\Posting;
use App\Models\Staff;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postings = Posting::latest()->simplePaginate(15);
        return view('admin.posting.index', compact('postings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $staffs = array();
        $units = Unit::orderBy('name', 'asc')->get();
        // $postings = Posting::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->get();
        // $postings = Posting::where('created_at', '<', date('Y-m-d H:i:s'))->get();
        // $postings = Posting::get();

        // foreach ($postings as $key => $posting) {
        //     // $staffs = Staff::whereBetween('deploydate', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->orWhere('id', '!=', $posting->staff_id)->orderBy('lastname', 'asc')->simplePaginate(30);
        //     $staffs = Staff::where('deploydate', '<', date('Y-m-d H:i:s'))->orWhere('id', '!=', $posting->staff_id)->orderBy('lastname', 'asc')->simplePaginate(30);
        //     // $staffs = Staff::where('id', $posting->staff_id)->orWhere('id', '!=', $posting->staff_id)->orderBy('lastname', 'asc')->simplePaginate(30);
        // }

        // $staffs = Staff::where('isdeployed', 0)->orWhere('deploydate', '<=', Carbon::now()->month(1))->orWhere('deploydate', '>=', Carbon::now()->years(3))->orWhere('deploydate', '')->orderBy('lastname', 'asc')->simplePaginate(15);
        // $staffs = Staff::where('isdeployed', 0)->orWhere('deploydate', '>', Carbon::now()->years(3))->orWhere('deploydate', '')->orderBy('lastname', 'asc')->simplePaginate(15);
        $staffs = Staff::where('isdeployed', 0)->orWhere('deploydate', '>', Carbon::now()->years(3))->orWhere('deploydate', '')->orderBy('lastname', 'asc')->simplePaginate(15);

        return view('admin.posting.create', compact('units', 'staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'unit_id' => 'required',
            // 'staff_id' => 'required',
        ]);

        $staffIds = $request->input('staff_id');
        if ($staffIds == null) {
            return redirect()->back()->with('deleted', 'Kindly select at least one Staff to be redeployed!');
        } else {

            // $unitid = $request->unit_id;
            DB::transaction(function () use ($request, $staffIds) {

                foreach ($staffIds as $key => $staffid) {
                    // post staff to new departments
                    Posting::create([
                        'caption_id' => $request->caption_id,
                        'unit_id' => $request->unit_id,
                        'staff_id' => $staffid,
                        'resumptiondate' => Carbon::parse(date('Y-m-d'))->addDays(3),
                        'minredeploydate' => Carbon::parse(date('Y-m-d'))->addMonths(3),
                        'redeploydate' => Carbon::parse(date('Y-m-d'))->addYears(3),
                    ]);

                    // update the staff that have deployed
                    $staff = Staff::where('id', $staffid)->first();
                    $staff->isdeployed = 1;
                    $staff->deploydate = date('Y-m-d H:i:s');
                    $staff->save();
                }
            });

            // return [$staffIds, $unitid];
            // return redirect()->route('postings.index')->with('success', 'New redeployment made successfully!');
            return redirect()->route('captions.index')->with('success', 'New redeployment made successfully!');
        }
    }

    public function redeploysinglestaff($phone, $slug)
    {
        $staff = Staff::where('phone', $phone)->first();
        $caption = Caption::where('slug', $slug)->first();
        $units = Unit::orderBy('name', 'asc')->simplePaginate(10);
        return view('admin.staff.redeploysinglestaff', compact('staff', 'units', 'caption'));
    }

    public function postsinglestaff(Request $request)
    {
        $posting = Posting::where('caption_id', $request->caption_id)->first();
        $staff = Staff::where('id', $request->staff_id)->first();
        // $staff_former_posting = Posting::where('staff_id', $staff->id)->orderBy('id', 'desc')->first();

        return $staff;
        // DB::transaction(function () use ($staff, $posting, $request) {
        //     //update the posting details
        //     $posting->update([
        //         'caption_id' => $request->caption_id,
        //         'unit_id' => $request->unit_id,
        //         'staff_id' => $request->staff_id,
        //         'resumptiondate' => Carbon::parse(date('Y-m-d'))->addDays(3),
        //         'minredeploydate' => Carbon::parse(date('Y-m-d'))->addMonths(3),
        //         'redeploydate' => Carbon::parse(date('Y-m-d'))->addYears(3),
        //     ]);

        //     // update the staff that have deployed
        //     $staff->isdeployed = 1;
        //     $staff->deploydate = date('Y-m-d H:i:s');
        //     $staff->save();
        // });

        // return redirect()->route('captions.index')->with('success', $staff->firstname . ' redeployed successfully!');
    }

    public function deployastaff(Request $request, $slug)
    {
        $request->validate([
            'unit_id' => 'required',
            // 'staff_id' => 'required',
        ]);

        $caption = Caption::where('slug', $slug)->first();

        $staffId = $request->input('staff_id');
        if ($staffId == null) {
            return redirect()->back()->with('deleted', 'Kindly select one Staff to be redeployed!');
        } else {

            // $unitid = $request->unit_id;
            DB::transaction(function () use ($request, $staffId, $caption) {

                // foreach ($staffIds as $key => $staffid) {
                // post staff to new departments
                Posting::create([
                    'caption_id' => $caption->id,
                    'unit_id' => $request->unit_id,
                    'staff_id' => $staffId,
                    'resumptiondate' => Carbon::parse(date('Y-m-d'))->addDays(3),
                    'minredeploydate' => Carbon::parse(date('Y-m-d'))->addMonths(3),
                    'redeploydate' => Carbon::parse(date('Y-m-d'))->addYears(3),
                ]);

                // update the staff that have deployed
                $staff = Staff::where('id', $staffId)->first();
                $staff->isdeployed = 1;
                $staff->deploydate = date('Y-m-d H:i:s');
                $staff->save();
                // }
            });

            // return [$staffIds, $unitid];
            // return redirect()->route('postings.index')->with('success', 'New redeployment made successfully!');
            return redirect()->route('captions.index')->with('success', 'New redeployment made successfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $posting = Posting::where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $posting = Posting::where('id', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $posting = Posting::where('id', $id)->first();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $posting = Posting::where('id', $id)->first();
        $staff = Staff::where('id', $posting->staff_id)->first();
        // DB::transaction(function () use ($posting, $staff) {

        //     // update the staff that was deployed
        //     $staff->isdeployed = 0;
        //     $staff->deploydate = '';
        //     $staff->save();

        //     //delete the posting
        //     $posting->delete();
        // });
        $posting->delete();

        return redirect()->back()->with('deleted', $staff->firstname . ' Posting cancelled successfully!');
    }
}
