<?php

namespace anuncios\Http\Controllers\Login;

use Illuminate\Http\Request;
use anuncios\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;
use anuncios\User;

class controladorLogin extends Controller
{
    public function log(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email , 'password'=>$password]))
        {
            return redirect()->route('panel');
        }else
        {
            return redirect()->route('login');
        }
    }
    public function logout(){
    
        Auth::logout();
        return redirect()->route('login');
    }
    
}
