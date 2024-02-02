<?php

namespace App\Http\Controllers;

use App\Models\Tinymce;
use Illuminate\Http\Request;

class TinymceController extends Controller
{
    public function create()
    {
        return view('tinymce.tinymce');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
             'title' => 'required',
             'body' => 'required'
        ]);
 
        $post = Tinymce::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
 
       return redirect()->back();
    }
}
