<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->Petugas = new Petugas();
    }

    public function submit(){
        return view('login');
    }

    public function auth(){
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        $data = $this->Petugas->DetailData(request()->username);


        if($data == ''){
            return redirect('/login');
        }else{
            if (Hash::check(request()->password, $data->password)) {
                session()->put([
                    'id' => $data->id_petugas,
                    'nama' => $data->nama_petugas,
                    'username' => $data->username,
                    'login' => true,
                ]);

                return redirect('/home');
            }
        }
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
