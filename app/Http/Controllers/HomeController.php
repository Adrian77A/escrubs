<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
  
    public function index(Request $request)
    {
        $request->routeStatistics(); // This will enable route statistics logging

        $data = Product::Status()->select('id','category_id','name','price','stock','img','description','sku','color')->with('category')->get();
        // dd($data);
        return view('home.home', compact('data'));
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('livewire.product.show-product', compact('product'));
    }

    public function color($name){
        Log::info("start");
        dd($name);
    }
}
