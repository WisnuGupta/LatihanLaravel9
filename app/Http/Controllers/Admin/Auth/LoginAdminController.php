<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginAdminController extends Controller
{
    protected $guard = 'adminMiddle';
    protected $redirectTo = 'admin/beranda';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function guard()
    {
        return auth()->guard('adminMiddle');
    }
    public function index(){
        if (auth()->guard('adminMiddle')->user()) {
            return back();
        }
        return view('admin.beranda');
    }
    public function proses(Request $request){
        
            $request->validate(
                [
                    'username' => 'required|email',
                    'password' => 'required|min:5',
                ],
            );
            if(auth()->guard('adminMiddle')->attempt(['username'=>$request->username,'password'=>$request->password],$request->has('xatirla')))
            {
                return redirect('/beranda')->with('success', 'Anda Telah Berhasil Log In');
            } else {
                return back()->withErrors([
                    'username'=>'Maaf Username atau Password Anda Salah'
                ])->onlyInput('username');
            }
        }
    public function logout(Request $request)
        {
            auth()->guard('adminMiddle')->logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
        
            return redirect('/view_login');
        }
    
}
