<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    private function guard(){ $a=session('auth'); abort_unless($a && $a['role']==='admin',403); return $a; }
    public function dashboard(){ $auth=$this->guard(); return view('admin.dashboard', ['auth'=>$auth,'demos'=>session('demo_requests',[]),'messages'=>session('contact_messages',[])]); }
    public function updateDemoStatus(Request $request, $index)
    {
        $this->guard();
        $request->validate(['status'=>'required|in:Menunggu,Diproses,Terjadwal,Selesai,Dibatalkan']);
        $demos=session('demo_requests',[]);
        if(isset($demos[$index])){ $demos[$index]['status']=$request->status; session(['demo_requests'=>$demos]); }
        return back()->with('success','Status demo diperbarui di session.');
    }
}
