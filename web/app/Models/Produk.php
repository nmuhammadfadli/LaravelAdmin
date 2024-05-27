<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'harga', 'bulan', 'tanggal', 'jumlah', 'keuntungan',
    ];

    // Metode untuk menampilkan semua data produk
    public function showData()
    {
        return Produk::all();
    }

    public function addData($data)
    {
        return Produk::create($data);
    }

    // Metode untuk mengedit data produk
    public function editData($data, $id)
    {
        Produk::where('id', $id)->update($data);
    }

    // Metode untuk menghapus data produk
    public function deleteData($id)
    {
        Produk::where('id', $id)->delete();
    }

    public function search($keyword)
    {
        return Produk::where('nama', 'LIKE', "%$keyword%");
              
    }
}
