<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    // Hiển thị trang đăng nhập
    public function login_index()
    {
        return view('auth.login');
    }

    // Xử lý đăng nhập
    public function login_post(Request $request)
    {
        // Kiểm tra dữ liệu nhập vào
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Kiểm tra thông tin đăng nhập
        $user = $this->user->where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Lưu user vào session
            Session::put('user_admin', $user);

            // Chuyển hướng về trang admin
            return redirect('/admin');
        }

        // Nếu không hợp lệ, trả về thông báo lỗi
        return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng.']);
    }

    // Đăng xuất
    public function logout(Request $request)
    {
        // Xóa session
        Session::forget('user_admin');

        // Invalidate và regenerate CSRF token để bảo mật
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Chuyển hướng về trang login
        return redirect('/login-admin');
    }
}