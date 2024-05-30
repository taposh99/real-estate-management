<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForntEndDashboardController extends Controller
{
    public function index(){
       return view('frontend.home.index');
    }
    public function contactPage(){
        return view('frontend.contact.index');
    }
}
