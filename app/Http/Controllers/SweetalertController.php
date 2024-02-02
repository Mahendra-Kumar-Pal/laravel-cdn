<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SweetalertController extends Controller
{
    public function sweetalert()
    {
        return view('sweetalert.sweetalert');
    }

    public function index()
    {
      $users = User::get();
      return view('sweetalert.sweetalert-user',compact('users'));
    }

    public function destroy(Request $request,$id)
    {
      User::where('id',$id)->delete();
      return back();
    }
}
