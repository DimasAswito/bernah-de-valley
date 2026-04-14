<?php

namespace App\Http\Controllers;

use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::where('is_active', true)->get();
        return view('page.galery', compact('galeris'));
    }
}
