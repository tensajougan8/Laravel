<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    //
    public function ShowProfile()
    {
    	$profile = DB::table('users')->where('id',Auth::user()->id)->get();

    	return view('profile', array('profile' => $profile ));
    }

    public function update(Request $request)
    {
    	
    	$name = $request->input('name');
    	$last_name = $request->input('last_name');
    	
		User::where('id', Auth::user()->id)->update(['name' => $name,'last_name' => $last_name]);
		$profile = DB::table('users')->where('id',Auth::user()->id)->get();
		
		return view('home', array('profile' => $profile ));
    }
}
