<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pendidikan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'tingkatan', 'tahun_masuk', 'tahun_keluar',
    ];

    public function showData()
    {
        return Pendidikan::all();
    }

    public function addData($data)
    {
        return Pendidikan::create($data);
    }

    public function editData($data,$id){
        DB::table('pendidikan')->where('id',$id)->update($data);
    }

    public function deleteData($id){
        DB::table('pendidikan')->where('id','=',$id)->delete();
    }
    
}
