<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Peminjaman;

use App\Exports\PeminjamanExport;
use Maatwebsite\Excel\Facades\Excel;

use PDF;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        $query = Peminjaman::query();

        if($request->cari != null) {
            $query->where('nama','like','%'.$request->cari.'%');
        }

        $allpeminjaman = $query->get();

        return view('peminjaman.index', [
            'allpeminjaman' => $allpeminjaman
        ]);
    }

    public function tambah()
    {
    	return view('peminjaman.tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'id_buku' => 'required',
    		'id_anggota' => 'required',
    		'tanggal_pinjam' => 'required',
    		'tanggal_kembali' => 'required'
    	]);

    	$peminjaman = DB::table('peminjaman')->insert([
    		'nama' => $request->nama,
    		'id_buku' => $request->id_buku,
    		'id_anggota' => $request->id_anggota,
    		'tanggal_pinjam'=> $request->tanggal_pinjam,
    		'tanggal_kembali'=> $request->tanggal_kembali
    	]);
    	return redirect('/peminjaman');
    }

    public function edit($id)
    {
    	$peminjaman = Peminjaman::find($id);
    	return view('peminjaman.edit', ['peminjaman' => $peminjaman]);
    }

    public function update($id, Request $request)
    {
    	$this->validate($request,[
     		'nama' =>'required',
     		'id_buku' =>'required',
     		'id_anggota'  =>'required',
     		'tanggal_pinjam'  =>'required',
     		'tanggal_kembali' =>'required'
     	]);
     	$peminjaman = Peminjaman::find($id);
     	$peminjaman->nama = $request->nama;
     	$peminjaman->id_buku = $request->id_buku;
     	$peminjaman->id_anggota = $request->id_anggota;
     	$peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
     	$peminjaman->tanggal_kembali = $request->tanggal_kembali;
     	$peminjaman->save();

     	return redirect('/peminjaman');
    }

    public function delete($id)
    {
    	$peminjaman = Peminjaman::find($id);
    	$peminjaman->delete();
    	return redirect('/peminjaman');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $peminjaman = DB::table('peminjaman')
        ->where('nama','like',"%".$cari."%")
        ->paginate();

        return view('peminjaman.index',['peminjaman' => $penerbit]);
    }
    
    public function read($id)
    {
        $model = Peminjaman::query()->findorfail($id);

        return view('peminjaman.read',[
            'model' => $model
        ]);
    }

    public function exportPdf()
    {
        $allpeminjaman = Peminjaman::all();

        $pdf = PDF::loadview('peminjaman.export-pdf',[
            'allpeminjaman' => $allpeminjaman
        ]);

        return $pdf->download('laporan-peminjaman-pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new PeminjamanExport, 'peminjaman.xlsx');
    }
}
