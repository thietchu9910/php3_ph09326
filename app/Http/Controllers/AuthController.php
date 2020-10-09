<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    //xử lí đăng nhập

    public function postSignIn(SignInRequest $request){
        if(session_start() == PHP_SESSION_NONE){
            session_start();
        }
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('index');
        }
        $mes = 'Sai thông tin đăng nhập';
        return view('/sign-in', compact('$mes'));
    }
    public function preSignUp(){
        return view('sign-up');
    }

    //xử lí đăng nhập
    public function postSignUp(SignUpRequest $request){
         $data = $request->all();
         $data['password']= Hash::make($request->password);
         $data['role_id'] = 1;
         $dataSave = Student::create($data);
         return redirect()->route('sign-in')->with('message', 'Đăng kí thành công');
    }

    //đăng xuất
    public function SignOut(){
        Auth::logout();
        return redirect()->reoute('index');
    }

}
