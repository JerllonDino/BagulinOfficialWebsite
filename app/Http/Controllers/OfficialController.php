<?php

namespace App\Http\Controllers;

use App\Official;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    public function getOfficial($position)
    {
        $trimmedPosition = substr($position, -1) == "s" ? rtrim($position, "s") : $position;
        $official = Official::where('position', $trimmedPosition)->get();
        return view('pages/municipality/government/officials/'.$position, ['official' => $official]);
    }

    public function getWelcome()
    {
        $official = Official::where('position', 'mayor')->first();
        return view('pages/municipality/message', ['official' => $official]);
    }
}
