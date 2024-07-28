<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthenticationController extends Controller

{

    public function login(){
        return view('client/dangky_dangnhap');
    }

    public function postLogin(Request $req){
        $dataUserLogin = [
            'email' => $req->email,
            'password' => $req->password, //plain text
        ];
        $remember = $req->has('remember');
        if(Auth::attempt($dataUserLogin,$remember)){
            if(Auth::user()->role == '1'){
                return redirect()->route('admin.products.ListProducts')->with(['message' => 'dang nhap thanh cong']);
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')->with(['message' => 'email hoac password khong dung']);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register (Request $req) {
        $check = User::where('email', $req->email)->exists();
        if($check){
            return redirect()->back()->with(['message'=>'tài khoản email đã tồn tại']);
        }else{
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password)

            ];
            $userNew = User::create($data); 
            return redirect()->route('login')->with(['message'=>'Đăng kí thành công']);
        }
    }
}

