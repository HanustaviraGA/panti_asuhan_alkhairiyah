<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\MasterBanner;
use App\Models\MasterProfile;
use App\Models\MasterVisi;
use App\Models\MasterMisi;

class DashboardController extends Controller
{
    public function __construct(){
        if(!Auth::check()){
            return redirect()->route('login')->with('error', 'Anda harus login dulu');
        }
    }

    public function dashboard(){
        // Banner
        $banner = MasterBanner::all();
        // Profile
        $profile = MasterProfile::where('id', 1)->first();
        // Visi
        $visi = MasterVisi::where('id', 1)->first();
        // Misi
        $misi = MasterMisi::all();
        return view('admin.beranda.index', compact('banner', 'profile', 'visi', 'misi'));
    }

}
