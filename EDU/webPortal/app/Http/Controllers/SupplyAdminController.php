<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplyAdminController extends Controller
{
    public function createPost(Request $request){
        $notify="Supplier Created";
        return redirect("/supplier")->with('notify',$notify);;
    }

    public function create(Request $request){
        $title="Create New Supplier";
        return view('pages.suppliers.create')->with('title',$title);
    }

    public function editePost(Request $request){
        $title="Supplier Changed";
        return redirect("/supplier")->with('title',$title);;
    }

    public function edit(Request $request){
        $title="Edit New Supplier";
        return view('pages.suppliers.edit')->with('title',$title);
    }

    public function home(Request $request){

        $title="Supplier Admin Page";
        return view('pages.suppliers.home')->with('title',$title);
    }
}
