<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function Add($name)
    {
        $menu=new Menu;
        $menu->name=$name;
        $menu->save();
        return "Insert Successfully";
    }

    public function Insert($name)
    {
        DB::table('menus')->insert(
            ["name"=>$name]
        );
    }


    public function Index()
    {
        return view('admin.dashboard.index');
    }



}
