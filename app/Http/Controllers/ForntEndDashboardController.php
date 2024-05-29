<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForntEndDashboardController extends Controller
{
    public function index(){
        return view('forntEndLayout.forntEndDashboard');
    }
}
