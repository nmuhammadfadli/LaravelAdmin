<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Petugas extends Model
{
    public function showData(){
        return DB::table('petugas')->get();
    }

    public function DetailData($username){
        return DB::table('petugas')
        ->where('username',$username)
        ->first();
    }

    public function addData($data){
        DB::table('petugas')->insert($data);
    }
}
