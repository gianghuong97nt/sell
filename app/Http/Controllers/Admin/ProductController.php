<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index(){
        return view('admins.products.index');
    }
    
    public function add(){
        return view('admins.products.add');
    }

    public function save(){
        return view('admins.products.add');
    }

    public function edit(){
        return view('admins.products.edit');
    }

    public function change(){
        return view('admins.products');
    }

    public function delete(){
        return view('admins.products.delete');
    }

    public function destroy(){
        return view('admins.products');
    }
    
}
