<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tagihan extends Model
{
    use HasFactory;

    protected $table = 'tagihan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'notelp','bulan', 'tanggal', 'jumlah','bayar',
    ];

    public function showData()
    {
        return Tagihan::all();
    }

    public function addData($data)
    {
        return Tagihan::create($data);
    }

    public function editData($data,$id){
        DB::table('tagihan')->where('id',$id)->update($data);
    }

    public function deleteData($id){
        DB::table('tagihan')->where('id','=',$id)->delete();
    }
    
}
