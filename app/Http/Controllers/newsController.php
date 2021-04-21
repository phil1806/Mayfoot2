<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class newsController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at','desc')->take(3)->get();
        $i= 0;
        return view('pages.blog.index', compact('news','i'));
    }

    public function show(int $id){
        $new = News::find($id);
        return view('pages.blog.show', compact('new'));
    }
}
