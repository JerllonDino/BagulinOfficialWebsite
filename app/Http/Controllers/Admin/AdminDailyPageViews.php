<?php

namespace App\Http\Controllers\Admin;

use App\DailyPageView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use DailyViews;

class AdminDailyPageViews extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function get() {
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        $months = array(
            "January" => 0,
            "February" => 0,
            "March" => 0,
            "April" => 0,
            "May" => 0,
            "June" => 0,
            "July"=>0,
            "August"=>0,
            'September'=>0,
            'October'=>0,
            'November'=>0,
            'December' => 0
        );

        $months = array_slice($months, 0, date('n'));

        $pageViewsToday = DailyPageView::select('views')->whereDate('date', date('Y-m-d'))->first();

        $monthlyViews = DailyPageView::select(
            DB::raw('sum(views) as views'),
            DB::raw("to_char( date, 'DD-MON-YYYY') as months")
        )
        ->whereYear('date', date('Y'))
        ->groupBy('months')
        ->get();

        $result = array();
        foreach($monthlyViews as $key => $view) {
            $months[$view->months] = $view->views;
        }

        return response()->json(array(
            "monthly" => $months,
            "today" => $pageViewsToday
        ));
    }
}
