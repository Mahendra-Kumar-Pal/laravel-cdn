<?php

namespace App\Http\Controllers;

use App\Models\Summernote;
use Illuminate\Http\Request;

class SummernoteController extends Controller
{
    public function create()
    {
        return view('summernote.summernote');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
             'title' => 'required',
             'body' => 'required'
        ]);
 
        $post = Summernote::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
 
       return redirect()->back();
    }
}
