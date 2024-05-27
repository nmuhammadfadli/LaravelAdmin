<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function __construct()
    {
        $this->Petugas = new Petugas();
    }

    public function index(){
        if(!session('login')){
            return redirect('/login');
        }else{
        $data = [
            'petugas' => $this->Petugas->showData(),
        ];
        return view('petugas.petugas',$data);
    }
    }

    public function create(){
        if(!session('login')){
            return redirect('/login');
        }else{
        return view('petugas.add');
        }
    }

    public function save(){
        if(!session('login')){
            return redirect('/login');
        }else{
        request()->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'status' => 'required',
        ]);

        $data = [
            'nama_petugas' => Request()->nama,
            'username' => Request()->username,
            'password' => Hash::make(Request()->password),
            'status' => Request()->status,
        ];

        $this->Petugas->addData($data);

        return redirect('/petugas');
    }
    }
}
