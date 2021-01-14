<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session, DB;
use App\Bukutamu, App\Pengunjung;

class AdminController extends Controller
{
    public function dashboard(){
        $hari = date("Y-m-d");
        $bulan = date("Y-m");
        $tahun = date("Y");

        $count_hari = Pengunjung::where('date', $hari)->first();
        $count_bulan = Pengunjung::where('date', 'like', $bulan.'%')->first()->sum('qty');
        $count_tahun = Pengunjung::where('date', 'like', $tahun.'%')->first()->sum('qty');

        if(empty($count_hari['qty']) OR $count_hari['qty']==""){$count_hari['qty']=0;}
        if(empty($count_bulan) OR $count_bulan==""){$count_bulan=0;}
        if(empty($count_tahun) OR $count_tahun==""){$count_tahun=0;}

        return view("admin.dashboard")->with('count_hari', $count_hari['qty'])->with('count_bulan', $count_bulan)->with('count_tahun', $count_tahun);
    }

    public function rekapbukutamu(){
        $data = Bukutamu::all();
        return view("admin.bukutamu")->with('data', $data);
    }

    public function tim(){
        return view("admin.tim");
    }

    public function kontak(){
        return view("admin.kontak");
    }

    
}
