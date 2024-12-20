<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($phone)
    {
        $user = User::where('phone', $phone)->first();
        return view('admin.profile.profile', compact('user'));
    }
}
