<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function links()
    {
        return view('links');
    }

    public function faq()
    {
        return view('faq');
    }
}
