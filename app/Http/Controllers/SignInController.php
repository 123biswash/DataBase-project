<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function loginUser() {
    	return view('auth/login');
    }
}
