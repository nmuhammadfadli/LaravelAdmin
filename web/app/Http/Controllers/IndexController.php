<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaksin;
use App\Models\Warga;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->Vaksin = new Vaksin();
        $this->Warga = new Warga();
    }

    public function index(){
        $data = [
            'vaksin' =>$this->Vaksin->showData(),
            'warga' => $this->Warga->showData(),
        ];
        return view('home',$data);
    }
}
