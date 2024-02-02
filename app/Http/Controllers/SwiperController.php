<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwiperController extends Controller
{
    public function index()
    {
        return view('swiper.index');
    }
}
