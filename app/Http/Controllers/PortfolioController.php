<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function showportfolio()
    {
        $portfolio = DB::table('portfolio')->get();

        return view('portfolio',['portfolio'=>$portfolio]);
    }
}
