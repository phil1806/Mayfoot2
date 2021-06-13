<?php

namespace App\Http\Controllers;

use App\Models\Realisations;
use Illuminate\Http\Request;

class realisationsController extends Controller
{
    public function index(){
        $realisations = Realisations::orderBy('created_at', 'desc')->take(6)->get();

        return view('pages.realisations.index',compact('realisations'));

    }
}
