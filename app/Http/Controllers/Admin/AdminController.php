<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    //
    public function index(){
        return view('admins.index');
    }
    
    public function info(){
        return view('admins.info');
    }
}
