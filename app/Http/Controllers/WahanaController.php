<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WahanaController extends Controller
{
    public function index()
    {
        return view('page.facility');
    }

    public function detail($id)
    {
        return view('page.facility_detail', compact('id'));
    }
}
