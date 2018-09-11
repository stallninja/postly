<?php

namespace App\Http\Controllers;

class PrintersController extends Controller
{
    public function index()
    {
        return view('printers.index');
    }
}
