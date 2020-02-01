<?php

namespace App\Http\Controllers\Habitat;

use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;
use App\Donation;

class VoyagerController extends BaseVoyagerController
{
    public function index(){
        $date = \Carbon\Carbon::now();
        $grandTotal = Donation::where(['status' => 'success'])->sum('amount');
        $labelThisMonth = $date->format('F');
        $labelLastMonth = $date->subMonth()->format('F');
        $totalThisMonth = Donation::where(['status' => 'success'])->whereMonth('created_at', $date->format('m'))->sum('amount');
        $totalLastMonth = Donation::where(['status' => 'success'])->whereMonth('created_at', $date->subMonth()->format('m'))->sum('amount');
        return view('vendor.voyager.index', compact('grandTotal','labelLastMonth', 'labelThisMonth', 'totalLastMonth', 'totalThisMonth'));
    }
}
