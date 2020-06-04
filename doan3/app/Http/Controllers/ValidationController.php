<?php
namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\users;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function getVali()
    {
        return view('validation.validation');
    }
    public function postVali(Request $request)
    {


        $mail= $request->input('mail');
        $pass= $request->input('pass');
        if (Auth::attempt(['email' => $mail, 'password' => $pass])){
           return view('dashboard');
        }
        else {
            return redirect()->back()->with('thongbao','Tài khoản hoặc mật khẩu không chính xác');
        }
    }
    public function logOut() {
        Auth::logout();
        return redirect('validation');
    }
    public function getRegis() {
        return view('register.register');
    }
    public function postRegis(Request $request) {

        $users = new users;
        $users->email =$request->input('mail');
        $users->password =bcrypt($request->input('pass'));
        $users->level =$request->input('level');
        $users->save();
        return redirect('register')->with('thongbao1','Đăng ký thành công');

    }

}
