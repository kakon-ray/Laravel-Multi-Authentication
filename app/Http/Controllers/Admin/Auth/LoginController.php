<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function create(){
        return view('admin.auth.login');
    }
    public function dashboard(){
        return view('admin.dashboard.dashboard');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin/dashboard');
        }else{
            return back()->with('error','Invalid Username and Passsword');
        }

    }
    public function logout(Request $request){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
