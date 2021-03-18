<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class templateController extends Controller
{
    public function index(){

        return view('home');
    }

    public function about(){

        return view('about');
    }

    public function why(){

        return view('why');
    }
}
