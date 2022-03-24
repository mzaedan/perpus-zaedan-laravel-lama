<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Kategori;

use App\Exports\KategoriExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use PDF;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $query = Kategori::query();

        if($request->cari != null) {
            $query->where('nama','like','%'.$request->cari.'%');
        }

        $allkategori = $query->get();

        return view('kategori.index', [
            'allkategori' => $allkategori
        ]);
    }

    public function tambah()
    {
    	return view('kategori.tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    	]);

    	$penerbit = DB::table('kategori')->insert([
    		'nama' => $request->nama,
    	]);
    	return redirect('/kategori');
    }

    public function edit($id)
    {
    	$kategori = Kategori::find($id);
    	return view('kategori.edit', ['kategori' => $kategori]);
    }

    public function update($id, Request $request)
    {
    	$this->validate($request,[
            'nama' => 'required',
        ]);

    	$kategori = Kategori::find($id);
    	$kategori->nama = $request->nama;
    	$kategori->save();

    	return redirect('/kategori');
    }

    public function delete($id)
    {
     	$kategori = kategori::find($id);
    	$kategori->delete();
    	return redirect('/kategori');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $kategori = DB::table('kategori')
        ->where('nama','like',"%".$cari."%")
        ->paginate();

        return view('kategori.index',['kategori' => $kategori]);
    }

    public function read($id)
    {
        $model = Kategori::query()->findorfail($id);

        return view('kategori.read',[
            'model' => $model
        ]);
    }

    public function exportPdf()
    {
        $allkategori = Kategori::all();

        $pdf = PDF::loadview('kategori.export-pdf',[
            'allkategori' => $allkategori
        ]);

        return $pdf->download('laporan-kategori-pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new KategoriExport, 'kategori.xlsx');
    }
}
