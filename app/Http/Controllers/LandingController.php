<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterAnak;
use App\Models\MasterDonasi;

class LandingController extends Controller
{
    
    // Beranda
    public function beranda(){
        return view('beranda.index');
    }

    // Anak
    public function anak(){
        $anak = MasterAnak::orderBy('created_at', 'desc')->get();
        return view('anak.index', compact('anak'));
    }

    // Donasi
    public function donasi(){
        $donasi = MasterDonasi::orderBy('created_at', 'desc')->get();
        return view('donasi.index', compact('donasi'));
    }

    public function donasi_step_two($id){
        $donasi = MasterDonasi::where('id', $id)->first();
        return view('donasi.donasi2', compact('donasi'));
    }

    public function donasi_step_three(){
        return view('donasi.donasi3');
    }
}
