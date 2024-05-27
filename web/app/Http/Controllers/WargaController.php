<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;

class WargaController extends Controller
{
    public function __construct()
    {
        $this->Warga = new Warga();
    }

    public function index(){
        if(Request()->cari == ''){
            $data = [
                'warga' => $this->Warga->showData(),
            ];
            return view('warga.warga',$data);
        }else{
            $data = [
                'warga' => $this->Warga->searchData(request()->cari),
            ];
            return view('warga.warga',$data);
        }

    }

    public function create(){
        return view('warga.add');
    }

    public function save(){
        request()->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tempat' => 'required',
            'lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $data = [
            'nik' => request()->nik,
            'nama_warga' => request()->nama,
            'tempat_lahir' => request()->tempat,
            'tanggal_lahir' => request()->lahir,
            'alamat_rumah' => request()->alamat,
            'no_hp' => request()->no_hp,
        ];

        $this->Warga->addData($data);

        return redirect('/datapegawai');

    }

    public function edit($id){
        $data = [
            'detail' => $this->Warga->DetailData($id),
        ];
        return view('warga.edit',$data);
    }

    public function update($id){
        request()->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tempat' => 'required',
            'lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $data = [
            'nik' => request()->nik,
            'nama_warga' => request()->nama,
            'tempat_lahir' => request()->tempat,
            'tanggal_lahir' => request()->lahir,
            'alamat_rumah' => request()->alamat,
            'no_hp' => request()->no_hp,
        ];

        $this->Warga->editData($data,$id);

        return redirect('/datapegawai');
    }

    public function hapus($id){
        $this->Warga->deleteData($id);
        return redirect('/datapegawai');
    }
}
