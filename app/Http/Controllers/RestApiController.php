<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RestApiController extends Controller
{
    public function login(){
        return view('registrasi.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        session()->flash("success", "Selamat Beristirahat");
        return redirect('/login');
    }
    public function registrasi(){
        return view('registrasi.registrasi');
    }
    public function prosesregister(Request $request)
    {
        $email = User::select('email')->where('email', $request->email)->limit(1)->orderByDesc('id')->first();
        if (empty($email)==true) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required',
                ]);
            DB::table('users')->insert([
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'remember_token' => Str::random(40),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                ]);
                session()->flash("success", "Data Berhasil Ditambahkan");

                return redirect('/login');
        }else{
            session()->flash("error", "Email Ganda! Data Tidak Dapat Ditambahkan");
            return redirect('/registrasi');
        }
    }
    public function proseslogin(Request $request)
    {
        $credentials= $request->validate([
            'email' => 'required',
            'password' => 'required'
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                session()->flash("success", "Selamat Bekerja");
                return redirect()->intended('dashboard');
            }
        session()->flash("error", "Login Gagal");

        return back();
    }
    public function index(){
        $user = User::select('*')->where('email','Not like', "%" . Auth()->user()->email. "%")->orderBy('id', 'desc')->paginate(5);;
       return view('dashboard.dashboard',compact('user'));
    }
    public function update(Request $request, $id)
    {
        $email = User::select('email')->where('email', $request->email)->limit(1)->orderByDesc('id')->first();
        if (empty($email)==true) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required',
                ]);
            DB::table('users')->where('id',$id)->update([
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'remember_token' => Str::random(40),
                'updated_at' => Carbon::now()->toDateTimeString(),
                ]);
                session()->flash("success", "Data Berhasil Diupdate");

                return redirect('/dashboard');
        }else{
            session()->flash("error", "Email Ganda! Data Tidak Dapat Diupdate");
            return redirect('/dashboard');
        }

    }
    public function destroy(Request $request, $id )
    {
        $show = User::where('id', $id)->get();
        foreach ($show as $key) {
            $delete = $key->name;

        }
        User::where('id', $id)->delete();
        session()->flash("success", "Data Atas Nama $delete Berhasil Dihapus");

        return redirect('dashboard');
    }
}