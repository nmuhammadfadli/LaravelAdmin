<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'harga','bulan', 'tanggal', 'jumlah','keuntungan',
    ];
 
    // $table->timestamps();

    public function showData()
    {
        return Item::all();
    }

    public function addData($data)
    {
        return Item::create($data);
    }

    public function editData($data,$id){
        DB::table('items')->where('id',$id)->update($data);
    }

    public function deleteData($id){
        DB::table('items')->where('id','=',$id)->delete();
    }
}
