<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    protected $buku;

    public function __construct(Buku $buku)
    {
        $this->buku = $buku;
    }

    public function index(){
        if(!session('login')){
            return redirect('/login');
        }else{
        if(request()->cari == ""){
            $data = [
                'buku' =>$this->buku->showData(),
            ];
            return view('buku.buku',$data);
        }else{
            $data = [
                'buku' =>$this->buku->searchData(request()->cari),
            ];
            return view('buku.buku',$data);
        }
    }
    }
    public function create()
    {
        $buku = null;
        return view('buku.add', compact('buku'));
    }
    public function store(Request $request)
    {
        Buku::create($request->all());

        return \redirect()->route('buku.index')
                ->with('success', 'Data Buku baru telah berhasil disimpan');
    }
    public function save(Request $request)
    {
        try {
            if (!session('login')) {
                return redirect('/login');
            }
    
            $request->validate([
                'judul' => 'required',
                'tahun_terbit' => 'required',
                'bidang' => 'required',
                'tanggal_pinjam' => 'required',
                'nama_peminjam' => 'required',
                'tanggal_kembali' => 'required',
            ]);
    
            $this->buku->create([
                'judul' => $request->judul,
                'tahun_terbit' => $request->tahun_terbit,
                'bidang' => $request->bidang,
                'tanggal_pinjam' => $request->tanggal_pinjam,
                'nama_peminjam' => $request->nama_peminjam,
                'tanggal_kembali' => $request->tanggal_kembali,
            ]);
    
            return redirect('/buku')->with('success', 'Data Buku baru telah berhasil disimpan');
        } catch (\Exception $e) {
            Log::error('Error when saving book data: ' . $e->getMessage());
            return redirect('/buku')->with('error', 'Terjadi kesalahan saat menyimpan data Buku');
        }
    }
    
    public function edit($id)
    {
        $detail = $this->buku->findOrFail($id); 
        return view('buku.edit', compact('detail'));
    }

    public function update($id){
        request()->validate([
            'judul' => 'required',
            'tahun_terbit' => 'required',
            'bidang' => 'required',
            'tanggal_pinjam' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_kembali' => 'required',
        ]);

        $data = [
            'judul' => request()->judul,
            'tahun_terbit' => request()->tahun_terbit,
            'bidang' => request()->bidang,
            'tanggal_pinjam' => request()->tanggal_pinjam,
            'nama_peminjam' => request()->nama_peminjam,
            'tanggal_kembali' => request()->tanggal_kembali,
        ];

        $this->buku->editData($data,$id);

        return redirect('/buku');
    }

    public function hapus($id)
    {
        $buku = $this->buku->find($id);
        if ($buku) {
            $buku->delete();
            return redirect('/buku')->with('success', 'Data buku berhasil dihapus');
        } else {
            return redirect('/buku')->with('error', 'Data buku tidak ditemukan');
        }
    }

}

