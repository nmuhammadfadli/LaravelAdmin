<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function index(){
        if(!session('login')){
            return redirect('/login');
        }else{
        if(request()->cari == ""){
            $data = [
                'item' =>$this->item->showData(),
            ];
            return view('item.item',$data);
        }else{
            $data = [
                'item' =>$this->item->searchData(request()->cari),
            ];
            return view('item.item',$data);
        }
    }
    }
    public function create()
    {
        $item = null;
        return view('item.add', compact('item'));
    }
    public function store(Request $request)
    {
        Item::create($request->all());

        return \redirect()->route('item.index')
                ->with('success', 'Data Item baru telah berhasil disimpan');
    }
    public function save(Request $request)
    {
        try {
            if (!session('login')) {
                return redirect('/login');
            }
    
            $request->validate([
                'nama' => 'required',
                'harga' => 'required',
                'bulan' => 'required',
                'tanggal' => 'required',
                'jumlah' => 'required',
                'keuntungan' => 'required',
              
            ]);
    
            $this->item->create([
                'nama' => request()->nama,
                'harga' => request()->harga,
                'bulan' => request()->bulan,
                'tanggal' => request()->tanggal,
                'jumlah' => request()->jumlah,
                'keuntungan' => request()->keuntungan,
            ]);
    
            return redirect('/item')->with('success', 'Data Item baru telah berhasil disimpan');
        } catch (\Exception $e) {
            Log::error('Error when saving item data: ' . $e->getMessage());
            return redirect('/item')->with('error', 'Terjadi kesalahan saat menyimpan data Item');
        }
    }
    
    public function edit($id)
    {
        $detail = $this->item->findOrFail($id); 
        return view('item.edit', compact('detail'));
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

        $this->item->editData($data,$id);

        return redirect('/item');
    }

public function hapus($id)
{
    $this->item->deleteData($id);
    return redirect('/item');
}
}

