<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Warga extends Model
{
    public function showData(){
        return DB::table('warga')->get();
    }

    public function searchData($cari){
        return DB::table('warga')->where('nama_warga','LIKE','%'.$cari.'%')->get();
    }

    public function DetailData($nik){
        return DB::table('warga')->where('nik',$nik)->first();
    }

    public function addData($data){
        DB::table('warga')->insert($data);
    }

    public function editData($data,$nik){
        DB::table('warga')->where('nik',$nik)->update($data);
    }

    public function deleteData($nik){
        DB::table('warga')->where('nik','=',$nik)->delete();
    }
}
