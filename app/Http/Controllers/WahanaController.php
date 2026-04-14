<?php

namespace App\Http\Controllers;

class WahanaController extends Controller
{
    public function index()
    {
        $wahanas = \App\Models\Wahana::all();
        return view('page.facility', compact('wahanas'));
    }

    public function detail($id)
    {
        $wahana = \App\Models\Wahana::findOrFail($id);
        return view('page.facility_detail', compact('wahana'));
    }
}
