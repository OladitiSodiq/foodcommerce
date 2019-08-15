<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\Input;



class ecom extends Controller
{
    // 	  
    public function signin(Request $request,$id){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required']);

        $username=$request['username'];
        $password=$request['password'];

        // echo $username."......".$password;
        $checklogin = DB::table('users')->where(['names' => $username,'passwords'=>$password])->get();
        if (count($checklogin)>0)
        {
                Session::put('title','login');
                $user=User::find($id);
                        return redirect('/autha/edit',['users'=>$user]);
                        

        }
        else{
            Session::flash('flash','Username/Password Combination Fail');
            return redirect('/autha/signin');
        }
}
}

