<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicDependent extends Controller
{
    public function index()
    {
         $user_list = DB::table('user')
             ->groupBy('id')
             ->get();

         return view('/projects/create')->with('user_list', $user_list);
    }
}
