<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    public function show(){
        $results = DB::select('select * from users');
        return view('users', compact('results'));
//return view('users', array('rslt'=> $results));
// return view('users', compact('results'));
    }
    public function delete($id){
    $delete= DB::table('users')->where('id', '=',$id )->delete();
    return redirect()->route('show');
}
}
