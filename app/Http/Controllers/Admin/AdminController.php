<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use Illuminate\Http\Response;
class AdminController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }
    public function show(){

//        $user = Auth::user();
//        dump($user);
        Admin::create([
            'title' => 'hello!!!!',
            'img' => 'img/1.png',
        ]);
        $admin = Admin::all();
        foreach ($admin as $value){
            {{echo $value->title;}}
        }

           return  view('admin');
    }
}
