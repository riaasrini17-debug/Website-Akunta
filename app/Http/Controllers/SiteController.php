<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){ return view('public.home'); }
    public function about(){ return view('public.about'); }
    public function features(){ return view('public.features'); }
    public function pricing(){ return view('public.pricing'); }
    public function portfolio(){ return view('public.portfolio'); }
    public function blog(){ return view('public.blog'); }
    public function blogDetail(){ return view('public.blog-detail'); }
    public function faq(){ return view('public.faq'); }
    public function contact(){ return view('public.contact'); }

    public function contactSubmit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:30',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|max:1500',
        ]);
        $messages = session('contact_messages', []);
        $data['created_at'] = now()->format('d M Y H:i');
        $messages[] = $data;
        session(['contact_messages' => $messages]);
        return back()->with('success', 'Pesan berhasil disimpan sementara di session.');
    }

    public function demoSubmit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'company' => 'required|string|max:120',
            'package' => 'required|string|max:60',
            'phone' => 'required|string|max:30',
        ]);
        $demos = session('demo_requests', []);
        $data['status'] = 'Menunggu';
        $data['created_at'] = now()->format('d M Y H:i');
        $demos[] = $data;
        session(['demo_requests' => $demos]);
        return back()->with('success', 'Pengajuan demo berhasil dikirim. Data hanya tersimpan di session, bukan database.');
    }
}
