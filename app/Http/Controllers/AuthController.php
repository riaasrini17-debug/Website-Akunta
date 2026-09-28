<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin(){ return redirect()->route('home'); }
    public function showRegister(){ return redirect()->route('home'); }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'password' => 'required|min:6|confirmed',
        ]);
        session(['registered_user' => [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]]);
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Akun tersimpan sementara di session.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate(['email'=>'required|email','password'=>'required|string']);

        if ($credentials['email'] === 'admin@akunta.test' && $credentials['password'] === 'admin123') {
            session(['auth' => ['role'=>'admin','name'=>'Administrator Akunta','email'=>$credentials['email']]]);
            return redirect()->route('admin.dashboard');
        }
        if ($credentials['email'] === 'user@akunta.test' && $credentials['password'] === 'user123') {
            session(['auth' => ['role'=>'user','name'=>'Demo User','email'=>$credentials['email']]]);
            return redirect()->route('user.dashboard');
        }
        $user = session('registered_user');
        if ($user && $user['email'] === $credentials['email'] && Hash::check($credentials['password'], $user['password'])) {
            session(['auth' => ['role'=>'user','name'=>$user['name'],'email'=>$user['email']]]);
            return redirect()->route('user.dashboard');
        }
        return back()->withErrors(['email' => 'Email atau password tidak sesuai.'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('auth');
        return redirect()->route('home')->with('success', 'Anda sudah logout.');
    }
}
