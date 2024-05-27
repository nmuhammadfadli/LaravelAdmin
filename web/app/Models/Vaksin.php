<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vaksin extends Model
{
    public function showData(){
        return DB::table('vaksinasi')
        ->join('warga','warga.nik','vaksinasi.nik_warga')
        ->join('petugas','petugas.id_petugas','vaksinasi.id_petugas')
        ->get();
    }

    public function searchData($cari){
        return DB::table('vaksinasi')
        ->where('nama_warga','LIKE','%'.$cari.'%')
        ->join('warga','warga.nik','vaksinasi.nik_warga')
        ->join('petugas','petugas.id_petugas','vaksinasi.id_petugas')
        ->get();
    }

    public function addData($data){
        DB::table('vaksinasi')->insert($data);
    }
}
