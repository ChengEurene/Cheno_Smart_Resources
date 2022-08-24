<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }

    public function about()
    {
        return view('layouts.about');
    }

    public function service()
    {
        return view('layouts.service');
    }
}
