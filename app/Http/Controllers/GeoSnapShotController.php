<?php

namespace App\Http\Controllers;

use App\GeoSnapShot;
use App\UserNote;
use Illuminate\Http\Request;

class GeoSnapShotController extends Controller
{
    public function index()
    {
        return view('GeoSnapShot.GeoSnapShot');
    }

    public function store(Request $request)
    {
        $model = new GeoSnapShot($request->all());
        $model->save();
        return 'Event created successfully!';
    }
}
