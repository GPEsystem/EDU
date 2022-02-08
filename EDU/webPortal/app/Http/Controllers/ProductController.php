<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function createPost(Request $request){
        $notify="Product Created";
        $Product=new Product;
        
        $Product->save();

        return redirect("/product")->with('notify',$notify);
    }

    public function create(Request $request){
        $title="Create New Product";
        return view('pages.product.create')->with('title',$title);
    }

    public function editPost(Request $request){
        $Product=Product::where('id',$request->id)->firstOrFail();
        // $Supplier=Db::table('suppliers')
        // ->update(
        //     "Name",$request->Name;
        // );
       
        $Product->save();

        $notify="Product Information Changed";
        return redirect("/product")
        ->with('notify',$notify);
    }

    public function edit(Request $request){

        // $Supplier=Db::table('suppliers')
        // ->where('id',$request->id)->first();

        $Product=Product::where('id',$request->id)->firstOrFail();

        $title="Edit Product " . $Product->id;

        return view('pages.product.edit')
        ->with('Product',$Product)
        ->with('title',$title);
    }

    public function home(Request $request){

        $title="Product Admin Page";
        //$Suppliers=Db::select('select * from products');
        // $Suppliers=Db::table('suppliers')
        // ->where('id','>',0)
        // ->get();

        $Product=Product::all();

        return view('pages.product.home')
        ->with('Product',$Product)
        ->with('title',$title);
    }
}
