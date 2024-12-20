<?php

namespace App\Http\Controllers;

use App\Models\Caption;
use App\Models\Posting;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function printdeployedstaff($slug)
    {
        $caption = Caption::where('slug', $slug)->first();
        $postings = Posting::where('caption_id', $caption->id)->get();
        return view('admin.print.redeployedstaff', compact('caption', 'postings'));
    }
}
