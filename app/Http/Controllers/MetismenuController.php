<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetismenuController extends Controller
{
    public function index()
    {
        return view('metismenu.metismenu');
    }
}
