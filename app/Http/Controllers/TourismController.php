<?php

namespace App\Http\Controllers;

use App\Tourism;
use Illuminate\Http\Request;

class TourismController extends Controller
{
    public function index()
    {
        $tourisms = Tourism::with('tourism_images')->get();
        return view('pages.municipality.general.tourism')->with(['tourisms' => $tourisms]);
    }
}
