<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DprdController extends Controller
{
    public function getHalamanPimpinan(){
    	return view('anggota_dprd.pimpinan');
    }

    public function getHalamanKomisi(){
    	return view('anggota_dprd.komisi');
    }

    public function getHalamanKomisiBadanMusyawarah(){
    	return view('anggota_dprd.badanmusyawarah');
    }

    public function getHalamanBadanAnggaran(){
    	return view('anggota_dprd.badananggaran');
    }

    public function getHalamanBadanPembentukanPerda(){
    	return view('anggota_dprd.badanperda');
    }

    public function getBadanKehormatan(){
    	return view('anggota_dprd.badankehormatan');
    }

    public function getHalamanFraksi(){
    	return view('anggota_dprd.fraksi');
    }
}
