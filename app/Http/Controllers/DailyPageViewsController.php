<?php

namespace App\Http\Controllers;

use App\DailyPageView;
use DailyViews;
use Illuminate\Http\Request;

class DailyPageViewsController extends Controller
{
    public function add() {
        $dateToday = date('Y-m-d');
        if (DailyPageView::where('date', $dateToday)->exists()) {
            $views = DailyPageView::select('views')->where('date', $dateToday)->first();
            DailyPageView::where('date', $dateToday)->update([
                'views' => $views->views+1
            ]);
        }
        else {
            $pageview = new DailyPageView;
            $pageview->date = $dateToday;
            $pageview->views = 1;
            $pageview->save();
        }
    }
}
