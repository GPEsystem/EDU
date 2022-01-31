<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $request){
        $title="Login Page";
        return view('pages.login')->with('title',$title);
    }

    public function login(Request $request){
        //return $request->input();
        return redirect("/home");
    }

    public function home(Request $request){
        $title="Dashboard Page";
        //return view('pages.dashboard'),compact('title')); //or
        return view('pages.dashboard')->with('title',$title);
    }
}
