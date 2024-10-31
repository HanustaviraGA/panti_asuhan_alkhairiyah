<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterAnak;
use App\Models\MasterDonasi;

class LandingController extends Controller
{

    // Beranda
    public function beranda(){
        return view('landing.beranda.index');
    }

    // Anak
    public function anak(){
        $anak = MasterAnak::orderBy('created_at', 'desc')->get();
        return view('landing.anak.index', compact('anak'));
    }

    // Donasi
    public function donasi(){
        $donasi = MasterDonasi::orderBy('created_at', 'desc')->get();
        return view('landing.donasi.index', compact('donasi'));
    }

    public function donasi_step_two($id){
        $donasi = MasterDonasi::where('id', $id)->first();
        return view('landing.donasi.donasi2', compact('donasi'));
    }

    public function donasi_step_three(){
        return view('landing.donasi.donasi3');
    }
}
