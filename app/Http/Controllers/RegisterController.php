<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){

        return view('auth.register');
    }
    public function guardarc(Request $request)
    {
        $name = $request -> name;
        $email = $request -> email;
        $password = $request -> password;
        $aviso = $request -> aviso;
        
    }


    public function store(){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'aviso' => 'required|in:1',
            'g-recaptcha-response'   => ['required']
        ]);

         $user = User::create(request(['name', 'email', 'password' , 'aviso' ]));

        auth()->login($user);
        return redirect()->to('/');

    }
    public function aviso(){
        return view('aviso');
    }
   

}
