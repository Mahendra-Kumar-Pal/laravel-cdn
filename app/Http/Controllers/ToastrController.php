<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToastrController extends Controller
{
    public function toastr()
    {
        return view('toastr.toastr');
    }
    
    public function toastrNotification()
    {
        session()->put('success', 'Item created successfully.');
        return view('toastr.toastr-notification');
    }
}
