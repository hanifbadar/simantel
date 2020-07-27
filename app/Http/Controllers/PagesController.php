<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function home(){
        return view ('index');
    }
    public function login(){
        return view ('login');
    }
    public function simantel(){
        return view ('simantel');
    }
	
	public function tower_kecamatan(Request $r){
		$kode_kecamatan = $r->kode_kecamatan;
		$data = DB::table('tower')
				->where('kode_kecamatan', $kode_kecamatan)->get();
		return view('tower_kecamatan', compact('data'));
	}
	
    // guest
    public function kecamatan_mersam(){
        return view ('kecamatan_mersam');
    }
    public function kecamatan_tembesi(){
        return view ('kecamatan_tembesi');
    }
    public function kecamatan_muarabulian(){
        return view ('kecamatan_muarabulian');
    }
    public function kecamatan_batinxxiv(){
		
        return view ('kecamatan_batinxxiv');
    }
    public function kecamatan_pemayung(){
        return view ('kecamatan_pemayung');
    }
    public function kecamatan_maroseboulu(){
        return view ('kecamatan_maroseboulu');
    }
    public function kecamatan_maroseboilir(){
        return view ('kecamatan_maroseboilir');
    }
    public function kecamatan_bajubang(){
        return view ('kecamatan_bajubang');
    }
    // akhir Guest

    // admin 
    public function kecamatanmersam_admin(){
        return view ('ADMIN/kecamatanmersam_admin');
    }
    public function kecamatanrtembesi_admin(){
        return view ('ADMIN/kecamatantembesi_admin');
    }
    // akhir admin
}
