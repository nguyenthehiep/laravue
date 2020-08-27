<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(Request $request) {

        return \App\Sale::select('company', 'amount')
            ->where('year', $request->year)
            ->get();

    }

    public function years() {

        return \App\Sale::select('year')
            ->groupBy('year')
            ->pluck('year');

    }
}
