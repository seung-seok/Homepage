<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index(){
        // $data = Blog::find(1)->name;
        return view('blog.index',[
            // 'data'=>$data
        ]);
    }
}
