<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User, App\Bukutamu, App\Pengunjung;
use Session;
use DB;
use Hash;

class AuthController extends Controller
{
    public function index(){
        $hari = date("Y-m-d");
        $bulan = date("Y-m");
        $tahun = date("Y");

        $count_hari = Pengunjung::where('date', $hari)->first();
        $count_bulan = Pengunjung::where('date', 'like', $bulan.'%')->first()->sum('qty');
        $count_tahun = Pengunjung::where('date', 'like', $tahun.'%')->first()->sum('qty');

        if(empty($count_hari['qty']) OR $count_hari['qty']==""){$count_hari['qty']=0;}
        if(empty($count_bulan) OR $count_bulan==""){$count_bulan=0;}
        if(empty($count_tahun) OR $count_tahun==""){$count_tahun=0;}

        //Penambahan Pengunjung
        if($count_hari['qty']==0){
            $count_hari['qty']=1;
            $newdata = new Pengunjung;
            $newdata->date = $hari;
            $newdata->qty = $count_hari['qty'];
            $newdata->save();
        }else{
            $count_hari['qty']=$count_hari['qty']+1;
            $updatedata = Pengunjung::where('date', $hari)
                ->update(['qty' => $count_hari['qty']]);
        }

        $count_bulan++;
        $count_tahun++;

        return view("auth.beranda")->with('count_hari', $count_hari['qty'])->with('count_bulan', $count_bulan)->with('count_tahun', $count_tahun);
    }

    public function bukutamu(){
        return view("auth.bukutamu");
    }

    public function login(){
        return view("auth.login");
    }

    public function daftar(){
        return view("auth.daftar");
    }

    public function resetpassword(){
        return view("auth.reset");
    }

    public function simpan_user(Request $request){

        if($request->password != $request->repassword){
            Session::flash("error", "Password yang anda masukkan tidak sama, mohon dicek kembali.");
            return redirect('/daftar');
        }else{
            $user = new User;
            $user->name = $request->nama;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            Session::flash("success", "Data anda telah tersimpan.");
            return redirect('/beranda');
        }

    }

    public function proses_login(Request $request){

        request()->validate([
            'email' => 'required',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ],
        ['captcha.captcha'=>'Invalid captcha code.']);

        $email = $request->email;
        $password = $request->password;

        $cek = User::where('email', $email)->where('password', $password)->count();
        if($cek==0){
            Session::flash("error", "Data yang anda masukkan tidak terdaftar, silahkan dicek kembali.");
            return redirect('/login');
        }else{
            Session::flash("success", "Anda telah berhasil melakukan login.");
            return redirect('/Admin/dashboard');
        }

    }

    public function simpan_tamu(Request $request)
    {

        Bukutamu::create($request->all());

        Session::flash("success", "bukutamu success created");
        return redirect()->route("bukutamu");
    }

    public function report_tamu()
    {
        $data = Bukutamu::all();
        return view("auth.reporttamu")->with('data', $data);
    }
}
