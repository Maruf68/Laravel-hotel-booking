<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Hash;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function forget_password(){
        return view('admin.forget_password');
    }
}
