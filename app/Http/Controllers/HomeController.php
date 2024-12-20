<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Staff;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // greeting module
        $greeting = '';
        $hour = date("H");
        if ($hour < 12) {
            $greeting = "Good Morning";
        } elseif ($hour < 17) {
            $greeting = "Good Afternoon";
        } else {
            $greeting = "Good Evevning";
        }

        //stats
        $eststaffs = User::latest()->get();
        $divisions = Division::orderBy('name', 'asc')->get();
        $units = Unit::orderBy('name', 'asc')->get();
        $staffs = Staff::orderBy('firstname', 'asc')->simplePaginate(20);
        return view('admin.index', compact('greeting', 'eststaffs', 'divisions', 'units', 'staffs'));
    }
}
