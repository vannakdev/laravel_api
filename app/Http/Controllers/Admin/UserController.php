<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Myuser;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\hash;


class UserController extends Controller
{
    public function Index()
    {

        $users=Myuser::all(); // Select * from table_Users
        $data=array(
            "users"=>$users
        );
        return view('admin.user.index',$data);

    }


    public function Create(){
        return view('admin.user.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function Store(Request $request){





        $validatedData = $request->validate([

            'name' => 'required',
            'password' => 'required',
            'confirmPassword' => 'required|same:password',
            'email' => 'required',
            'role' => 'required',
            'phone' => 'required',

        ]);

        $path=null;

        if($request->file('profile')!=null){
            $path = $request->file('profile')->store('public/profile');
            $path=str_replace('public','storage',$path);
        }


        //dd($path);

        $users=new Myuser();
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=Hash::make($request->password);
        $users->role=$request->role;
        $users->phone=$request->phone;
        $users->profile=$path;
        $users->save();
        return redirect('system/user');
    }
}
