<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PateinController extends Controller
{
    public function PateinDashboard()
    {
        return view('patein.dashboard');
    }
}
