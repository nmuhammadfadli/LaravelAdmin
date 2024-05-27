<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use App\Models\Vaksin;

class VaksinController extends Controller
{
    public function __construct()
    {
        $this->Warga = new Warga();
        $this->Vaksin = new Vaksin();
    }

    public function index(){
        if(!session('login')){
            return redirect('/login');
        }else{
        if(request()->cari == ""){
            $data = [
                'vaksin' =>$this->Vaksin->showData(),
            ];
            return view('vaksin.vaksin',$data);
        }else{
            $data = [
                'vaksin' =>$this->Vaksin->searchData(request()->cari),
            ];
            return view('vaksin.vaksin',$data);
        }
    }
    }

    public function create(){
        if(!session('login')){
            return redirect('/login');
        }else{
        return view('vaksin.add');
        }
    }

    public function save(){
        if(!session('login')){
            return redirect('/login');
        }else{
        request()->validate([
            'nik' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'periode' => 'required',
        ]);

        $data = $this->Warga->DetailData(request()->nik);

        if($data == ''){
            return redirect('/addvaksin');
        }else{
            $data = [
                'periode' => request()->periode,
                'tanggal_vaksin' => request()->tanggal,
                'deskripsi' => request()->deskripsi,
                'nik_warga' => request()->nik,
                'id_petugas' => session('id'),
            ];

            $this->Vaksin->addData($data);

            return redirect('/vaksin');
        }
    }
    }
}
