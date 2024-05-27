<?php

namespace App\Http\Controllers;
use App\Models\Tagihan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    protected $tagihan;

    public function __construct(Tagihan $tagihan)
    {
        $this->tagihan = $tagihan;
    }

    public function index(){
        if(!session('login')){
            return redirect('/login');
        }else{
        if(request()->cari == ""){
            $data = [
                'tagihan' =>$this->tagihan->showData(),
            ];
            return view('tagihan.tagihan',$data);
        }else{
            $data = [
                'tagihan' =>$this->tagihan->searchData(request()->cari),
            ];
            return view('tagihan.tagihan',$data);
        }
    }
    }
    public function create()
    {
        $tagihan = null;
        return view('tagihan.add', compact('tagihan'));
    }
    public function store(Request $request)
    {
        Tagihan::create($request->all());

        return \redirect()->route('tagihan.index')
                ->with('success', 'Data Pendidikan baru telah berhasil disimpan');
    }
    public function save()
    {
        if (!session('login')) {
            return redirect('/login');
        }
    
        request()->validate([
            'nama' => 'required',
            'notelp' => 'required',
            'bulan' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'bayar' => 'required',
        ]);
    
        Tagihan::create([
            'nama' => request()->nama,
            'notelp' => request()->notelp,
            'bulan' => request()->bulan,
            'tanggal' => request()->tanggal,
            'jumlah' => request()->jumlah,
            'bayar' => request()->bayar,

        ]);
        return redirect('/tagihan');
    }
    public function edit($id)
    {
        $detail = Tagihan::findOrFail($id); 
        return view('tagihan.edit', compact('detail'));
    }

    public function update($id){
        request()->validate([
            'nama' => 'required',
            'notelp'=>'required',
            'bulan' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'bayar' => 'required',
        ]);

        $data = [
            'nama' => request()->nama,
            'notelp' => request()->notelp,
            'bulan' => request()->bulan,
            'tanggal' => request()->tanggal,
            'jumlah' => request()->jumlah,
            'bayar' => request()->bayar,
        ];

        $this->tagihan->editData($data,$id);

        return redirect('/tagihan');
    }

    public function hapus($id)
    {
        $this->tagihan->deleteData($id);
        return redirect('/tagihan');
    }

}
