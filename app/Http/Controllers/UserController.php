<?php
namespace App\Http\Controllers;
class UserController extends Controller
{
    public function dashboard()
    {
        $auth = session('auth');
        abort_unless($auth && $auth['role'] === 'user', 403);
        $demos = collect(session('demo_requests', []))->where('email', $auth['email'])->values();
        return view('user.dashboard', compact('auth','demos'));
    }
}
