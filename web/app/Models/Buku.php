<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul', 'tahun_terbit','bidang', 'tanggal_pinjam', 'nama_peminjam','tanggal_kembali',

    
    ];

    public function showData()
    {
        return Buku::all();
    }

    public function addData($data)
    {
        return Buku::create($data);
    }

    public function editData($data,$id){
        DB::table('buku')->where('id',$id)->update($data);
    }

    public function deleteData($id)
    {
        return $this->where('id', $id)->delete();
    }
    
}
