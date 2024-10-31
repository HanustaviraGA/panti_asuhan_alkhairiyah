<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\MasterAnak;

class AnakAsuhController extends Controller
{
    public function __construct(){
        if(!Auth::check()){
            return redirect()->route('login')->with('error', 'Anda harus login dulu');
        }
    }

    // Anak Asuh
    public function anak(){
        $anak = MasterAnak::orderBy('created_at', 'desc')->get();
        return view('admin.anak.index', compact('anak'));
    }

    public function add_anak(){
        return view('admin.anak.add');
    }

    public function edit_anak(Request $request){
        $data = $request->all();
        $id = $data['id'];
        $anak = MasterAnak::findOrFail($id);
        if($anak){
            return view('admin.anak.edit', compact('anak'));
        }else{
            return redirect()->route('admin_anak')->with('error', 'Data tidak ditemukan');
        }
    }

    // Aksi
    public function add_anak_aksi(Request $request){
        $data = $request->all();
        \DB::beginTransaction();
        try{
            $query = MasterAnak::create($data);
            \DB::commit();
            return redirect()->route('admin_anak')->with('success', 'Data anak asuh berhasil ditambahkan');
        }catch(\Exception $e){
            \DB::rollBack();
            return redirect()->route('admin_anak')->with('error', $e->getMessage());
        }
    }

    public function edit_anak_aksi(Request $request){
        $data = $request->all();
        unset($data['_token']);
        \DB::beginTransaction();
        try{
            $query = MasterAnak::where('id', $data['id'])->update($data);
            \DB::commit();
            return redirect()->route('admin_anak')->with('success', 'Data anak asuh berhasil diubah');
        }catch(\Exception $e){
            \DB::rollBack();
            return redirect()->route('admin_anak')->with('error', $e->getMessage());
        }
    }

    public function delete_anak_aksi($id){
        \DB::beginTransaction();
        try{
            $query = MasterAnak::where('id', $id)->delete();
            \DB::commit();
            return redirect()->route('admin_anak')->with('success', 'Data anak asuh berhasil dihapus');
        }catch(\Exception $e){
            \DB::rollBack();
            return redirect()->route('admin_anak')->with('error', $e->getMessage());
        }
    }
}
