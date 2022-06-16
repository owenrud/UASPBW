<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

 
class MahasiswaAPIController extends Controller
{
    public function getAll()
  {
     $posts = DB::table('profil_mahasiswa')->get();
        
     return response()->json([
         'mahasiswa' => $posts
     ], 200);
  }
  public function getID($id)
    {
        $posts = DB::table('profil_mahasiswa')->where('nim',$id)->get();
        
     return response()->json([
         'mahasiswa' => $posts
     ], 200);
    }

    public function Insertmahasiswa(Request $request)
    {
        DB::table('profil_mahasiswa')->insert([
            'nama'=>$request->input('nama'),
            'gender'=>$request->input('gender'),
            'jurusan'=>$request->input('jurusan'),
            'bidang_minat'=>$request->input('bidang_minat')
        ]);
        
     return response()->json([
         "Result" => [
             "ResultCode"=>0,
             "ResultMessage"=>"Success Data Masuk ke Database"
         ]
     ], 200);
    }
    
    public function Deletemahasiswa(Request $request)
    {
        DB::table('profil_mahasiswa')->where('nim',$request->input('nim'))->delete();
        
     return response()->json([
         "Result" => [
             "ResultCode"=>0,
             "ResultMessage"=>"Success Data Hapus dari Database"
         ]
     ], 200);
    }

    public function Updatemahasiswa(Request $request)
    {
        DB::table('profil_mahasiswa')->where('nim',$request->input('nim'))->update([
            'nama'=>$request->input('nama'),
            'gender'=>$request->input('gender'),
            'jurusan'=>$request->input('jurusan'),
            'bidang_minat'=>$request->input('bidang_minat')
        ]);
        
     return response()->json([
         "Result" => [
             "ResultCode"=>0,
             "ResultMessage"=>"Success Data Masuk ke Database"
         ]
     ], 200);
    }

}

?>