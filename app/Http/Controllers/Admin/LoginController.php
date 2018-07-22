<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class LoginController extends Controller
{
    public function Index()
    {
        return view('admin.login.index');
    }

    public function Login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        //dd($request->all());

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {


            return redirect()->intended('system/dashboard');
        } else {
            return redirect('system');
        }
    }


//        public function Login(Request $request)
//        {
//            $credentials = $request->only('email', 'password');
//
//            if (Auth::attempt($credentials)) {
//            // Authentication passed...
//            return redirect()->intended('system/dashboard');
//            }
//        }
}

