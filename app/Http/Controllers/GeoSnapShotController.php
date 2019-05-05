<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeoSnapShotController extends Controller
{
    public function index()
    {
        return view('GeoSnapShot.GeoSnapShot');
    }
}
