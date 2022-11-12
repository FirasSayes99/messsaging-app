<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use DB;


class AdminController extends Controller
{
    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:admins,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in admins table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('admin')->attempt($creds) ){
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.login')->with('fail','Incorrect credentials');
        }
   }



   function UserList(){
    $data = DB::select('select * from users');

    $count = DB::table('posts')->count();

    if($count > 0) {
         //more than one raw
    }else {
         //zero raw
    }
    
    $count2 = DB::table('users')->count();

    if($count2 > 0) {
         //more than one raw
    }else {
         //zero raw
    }
    return view('dashboard.admin.home',['data'=>$data,'count'=>$count,'count2'=>$count2]);     
   

           
    }
   function logout(){
       Auth::guard('admin')->logout();
       return redirect('/');
   }

   function count(){
  
   }
}
