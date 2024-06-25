<?php

namespace App\Http\Controllers;

use App\Models\Blog as ModelsBlog;
use Illuminate\Http\Request;

class ShowBlogController extends Controller
{

    public function index($start)
    {
      $item_blog = ModelsBlog::whereSlug($start)->select('title', 'description', 'img', 'order', 'created_at')->get();
      if(isset($item_blog)){
        return view('information.show', compact('item_blog'));
      }else{
        return abort(404);
      }
    }
}
