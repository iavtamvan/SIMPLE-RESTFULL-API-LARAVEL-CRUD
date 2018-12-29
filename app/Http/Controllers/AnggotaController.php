<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
{
    public function index(){
        return Anggota::all();
    }

    public function create(request $request){
        $anggota = new Anggota;
        $anggota->nama = $request->nama;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        
        return "Data berhasil di simpan";
    }

    public function update(request $request, $id){
        $nama = $request->nama;
        $alamat = $request->alamat;

        $anggota = Anggota::find($id);
        $anggota->nama = $nama;
        $anggota->alamat = $alamat;
        $anggota->save();

        return "Data berhasil diupdate";
    }


    public function delete($id){
        $anggota = Anggota::find($id);
        $anggota->delete();
        return "Data berhasil di hapus";
    }
}
