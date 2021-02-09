<?php

namespace App\Http\Controllers;

use App\Agriculture;
use Illuminate\Http\Request;

class AgricultureController extends Controller
{
    public function index()
    {
        $agricultures = Agriculture::with('agriproduct_images')->get();
        return view('pages.municipality.general.agriculture')->with(['agricultures' => $agricultures]);
    }
}
