<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Supplier;

class SupplyAdminController extends Controller
{
    public function createPost(Request $request){
        $notify="Supplier Created";
        $Supplier=new Supplier;
        $Supplier->Name=$request->input("Name");
        $Supplier->Address=$request->input("Address");
        $Supplier->save();

        return redirect("/supplier")->with('notify',$notify);
    }

    public function create(Request $request){
        $title="Create New Supplier";
        return view('pages.suppliers.create')->with('title',$title);
    }

    public function editPost(Request $request){
        $Supplier=Supplier::where('id',$request->id)->firstOrFail();
        // $Supplier=Db::table('suppliers')
        // ->update(
        //     "Name",$request->Name;
        // );
        $Supplier->Name=$request->input("Name");
        $Supplier->Address=$request->input("Address");
        $Supplier->save();

        $notify="Supplier Information Changed";
        return redirect("/supplier")
        ->with('notify',$notify);
    }

    public function edit(Request $request){

        // $Supplier=Db::table('suppliers')
        // ->where('id',$request->id)->first();

        $Supplier=Supplier::where('id',$request->id)->firstOrFail();

        $title="Edit Supplier " . $Supplier->id;

        return view('pages.suppliers.edit')
        ->with('Supplier',$Supplier)
        ->with('title',$title);
    }

    public function home(Request $request){

        $title="Supplier Admin Page";
        //$Suppliers=Db::select('select * from products');
        // $Suppliers=Db::table('suppliers')
        // ->where('id','>',0)
        // ->get();

        $Suppliers=Supplier::all();

        return view('pages.suppliers.home')
        ->with('Suppliers',$Suppliers)
        ->with('title',$title);
    }
}
