<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $request){
        return view('pages.login');
    }
    public function home(Request $request){
        return view('pages.dashboard');
    }
}
