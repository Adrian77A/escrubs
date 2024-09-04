<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
  
    public function index(Request $request)
    {
        $request->routeStatistics(); // This will enable route statistics logging
        // $data = Product::orderBy('created_at', 'desc')->Status()->select('id','category_id','name','price','stock','img','description','sku','color')->with('category')->paginate(8);
        // $name_categories = Category::orderBy('created_at', 'desc')->get('name');
        $query = Product::orderBy('created_at', 'desc')->select('id','category_id','name','price','stock','img','description','sku','color')->Status()->with('category');
        #Aplicar filtro de categoria si existe
        if ($request->has('category')) {
            $category = $request->input('category');
            $query->whereHas('category', function($q) use ($category) {
                $q->where('name', $category);
            });
        }
        #Aplicar filtro de color si existe
        if ($request->has('color')) {
            $color_name = $request->input('color');
            $query->where('color', $color_name);
        }
        $data = $query->paginate(20);
        $name_categories = Category::orderBy('created_at', 'desc')->get('name');
        $colors_list = ['negro', 'azul', 'gris','verde','rojo','blanco']; // Lista de colores disponibles

        return view('home.home', compact('data', 'name_categories', 'colors_list'));
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
