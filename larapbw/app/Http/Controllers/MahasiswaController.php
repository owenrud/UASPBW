<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mhs(){

        $mahasiswa = Mahasiswa::orderby('nim','DESC')->paginate(10);
       return view('mahasiswa',['mahasiswa'=>$mahasiswa]);
    }
    public function cari(Request $request){

        $cari = $request->cari;
       $hasil = Mahasiswa::where('nama','like','%'.$cari.'%')->orwhere('nim','like','%'.$cari.'%')->paginate();
       return view('mahasiswa',['mahasiswa'=>$hasil]);
    }
    public function formmhs(){

       return view('formmahasiswa');
    }
    
    public function simpan(Request $request){
        $bm = implode(',',$request->cb);
        Mahasiswa::create([
            'nama'=>$request->nama,
            'gender'=>$request->Gender,
            'jurusan'=>$request->jurusan,
            'bidang_minat'=>$bm
        ]);
       return redirect('/mahasiswa')->with('alert','Data Berhasil di Tambah');
    
}
public function formeditmhs($id){
    $mhs = Mahasiswa::find($id);
    return view('formeditmhs',['mahasiswa'=>$mhs]);
 }

public function updatemhs($id,Request $request){
    $bm = implode(',',$request->cb);
    $mhs = Mahasiswa::find($id);
    $mhs->nim = $request->nim;
   $mhs->nama = $request->nama;
   $mhs->gender = $request->Gender;
   $mhs->jurusan = $request->jurusan;
   $mhs->bidang_minat = $bm;
   $mhs->save();
   return redirect('/mahasiswa')->with('alert','Data Berhasil di Update');

}
public function hapusmhs($id){
    $mhs = Mahasiswa::find($id);
   $mhs->delete();
   return redirect('/mahasiswa')->with('alert','Data Berhasil di Hapus');

}
}
