<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Penerbit;
use App\Models\Kategori;
use App\Models\Berkas;
use App\Models\Sampul;

use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


use PDF;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        $query = Buku::query();

        if($request->nama != null) {
            $query->where('nama','like','%'.$request->nama.'%');
        }

    	$allbuku = $query->get();

    	return view('buku.index', [
    	    'allbuku' => $allbuku
        ]);
    }

    public function tambah()
    {

        $buku = Buku::all();
        $penerbit = Penerbit::all();
        $penulis = Penulis::all();
        $kategori = Kategori::all();

    	return view('buku.tambah', ['buku' =>$buku, 'penerbit' => $penerbit, 'penulis' => $penulis, 'kategori' =>$kategori]);
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            'nama' => 'required',
            'tahun_terbit' => 'required',
            'id_penulis' => 'required',
            'id_penerbit' => 'required',
            'id_kategori' => 'required',
            'berkas' => 'mimes:docx,pdf,txt',
            'sampul' => 'mimes:jpeg,png,jpg',
		]);

        $berkas = $request->file('berkas');
        $nama_berkas=null;

        if($berkas !==null) {

            $tujuan_upload='uploads';
            $nama_berkas = time()."_".$berkas->getClientOriginalName();
            $berkas->move($tujuan_upload, $nama_berkas);
        }

        $sampul = $request->file('sampul');
        $nama_sampul=null;

        if($sampul !==null ) {

            $tujuan_upload='uploads';
            $nama_sampul= time()."_".$sampul->getClientOriginalName();
            $sampul->move($tujuan_upload, $nama_sampul);
        }

    	$buku = DB::table('buku')->insert([
    		'nama' => $request->nama,
    		'tahun_terbit' => $request->tahun_terbit,
    		'id_penulis' => $request->id_penulis,
    		'id_penerbit' => $request->id_penerbit,
    		'id_kategori'=> $request->id_kategori,
            'sampul' =>$nama_sampul,
            'berkas' =>$nama_berkas,
    	]);

    	return redirect('/buku');
    }

    public function edit($id)
    {
    	$buku = Buku::find($id);
        $penerbit = Penerbit::all();
        $penulis = Penulis::all();
        $kategori = Kategori::all();
    	return view('buku.edit', ['buku' => $buku,'penerbit' => $penerbit, 'penulis' => $penulis, 'kategori' => $kategori]);
    }

    public function update ($id, Request $request)
    {
    	$this->validate($request,[

           'sampul' => 'mimes:jpeg,png,jpg|max:2048',
           'berkas' => 'mimes:docx,pdf,txt|max:2048',
        ]);

        $berkas = $request->file('berkas');

        if($berkas !== null) {

            $tujuan_upload ='updates';
            $nama_berkas= time()."_".$berkas->getClientOriginalName();
            $berkas->move($tujuan_upload,$nama_berkas);
        }

        $sampul = $request->file('sampul');

        if($sampul !==null) {
            $tujuan_upload='uploads';
            $nama_sampul= time()."_".$sampul->getClientOriginalName();
            $sampul->move($tujuan_upload,$nama_sampul );
        }

    	$buku = Buku::find($id);
    	$buku->nama = $request->nama;
   		$buku->tahun_terbit = $request->tahun_terbit;
   		$buku->id_penulis = $request->id_penulis;
   		$buku->id_penerbit = $request->id_penerbit;
   		$buku->id_kategori = $request->id_kategori;
   		$buku->sinopsis = $request->sinopsis;

   		if($sampul !== null) {
            $buku->sampul = $nama_sampul;
        }

   		if($berkas !== null) {
            $buku->berkas = $nama_berkas;
        }

    	$buku->save();

        return redirect('/buku');
    }

    public function delete($id)
    {
    	$buku = buku::find($id);
    	$buku->delete();
    	return redirect('/buku');
    }

    public function cari(Request $request)
    {
    	$cari = $request->cari;

    	$buku = DB::table('buku')
		->where('nama','like',"%".$cari."%")
		->paginate();

		return view('buku.index',['buku' => $buku]);
    }

    public function read($id)
    {
        $model = Buku::query()->findorfail($id);

        return view('buku.read',[
            'model' => $model
        ]);
    }

    public function exportPdf()
    {
        $allBuku = Buku::all();

        $pdf = PDF::loadview('buku.export-pdf',[
            'allBuku' => $allBuku
        ]);

        return $pdf->stream('laporan-buku-pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new BukuExport, 'buku.xlsx');
    }
}
