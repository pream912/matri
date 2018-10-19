<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $profiles = Profile::all();
        return view('admin.dashcoard')->with('profiles', $profiles);
    }

}
