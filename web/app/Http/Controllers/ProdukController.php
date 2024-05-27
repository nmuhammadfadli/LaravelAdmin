<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    protected $produk;

    public function __construct(Produk $produk)
    {
        $this->produk = $produk;
    }

    public function index(Request $request)
    {
        if (!session('login')) {
            return redirect('/login');
        }
    
        $data = [];
    
        if ($request->has('cari')) {
            $data['produk'] = $this->produk->search($request->cari)->paginate(10);
        } else {
            $data['produk'] = $this->produk->paginate(10);
        }
    
        return view('produk.produk', $data);
    }
    
    public function create()
    {
        $produk = null;
        return view('produk.add', compact('produk'));
    }
    public function store(Request $request)
    {
        Produk::create($request->all());

        return \redirect()->route('produk.index')
                ->with('success', 'Data Produk baru telah berhasil disimpan');
    }
    public function save()
    {
        if (!session('login')) {
            return redirect('/login');
        }
    
        request()->validate([
            'nama' => 'required',
            'harga' => 'required',
            'bulan' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'keuntungan' => 'required',
        ]);
        
    // $table->string('nama');
    // $table->integer('harga');
    // $table->tinyInteger('bulan');
    // $table->date('tanggal')->nullable(false);
    // $table->integer('jumlah');
    // $table->integer('keuntungan');
    
        Produk::create([
            'nama' => request()->nama,
            'harga' => request()->harga,
            'bulan' => request()->bulan,
            'tanggal' => request()->tanggal,
            'jumlah' => request()->jumlah,
            'keuntungan' => request()->keuntungan,

        ]);
        return redirect('/produk');
    }
    public function edit($id)
    {
        $detail = Produk::findOrFail($id); 
        return view('produk.edit', compact('detail'));
    }

    public function update($id){
        request()->validate([
            'nama' => 'required',
            'harga' => 'required',
            'bulan' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'keuntungan' => 'required',
        ]);

        $data = [
            'nama' => request()->nama,
            'harga' => request()->harga,
            'bulan' => request()->bulan,
            'tanggal' => request()->tanggal,
            'jumlah' => request()->jumlah,
            'keuntungan' => request()->keuntungan,
        ];

        $this->produk->editData($data,$id);

        return redirect('/produk');
    }

public function hapus($id)
{
    $this->produk->deleteData($id);
    return redirect('/produk');
}

}
