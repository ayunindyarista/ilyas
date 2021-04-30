<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login/login');
    }

    public function cek(Request $request)
    {
        $Username = $request->username;
        $PASSWORD = $request->pass;
 
        $data = DB::table('users')->where('Username',$Username)->first();
        if($data){
            if($data->PASSWORD == $PASSWORD){
                Session::put('username',$data->USERNAME);
                Session::put('id',$data->ID_USER);                
                Session::put('/login',TRUE);
                return redirect('/');
            }
            else{
                Session::flash('fpassword','Password Tidak Terdaftar');
                return redirect('/login');
            }
        }
        else{
            Session::flash('fusername','Email Tidak Terdaftar');
            return redirect('/login');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }

}
