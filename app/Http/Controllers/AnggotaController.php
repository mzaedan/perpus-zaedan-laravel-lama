<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Anggota;

use App\Exports\AnggotaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use PDF;

class AnggotaController extends Controller
{
	public function index(Request $request)
	{
        $query = Anggota::query();

        if($request->cari != null) {
            $query->where('nama','like','%'.$request->cari.'%');
        }

        $allanggota = $query->get();

        return view('anggota.index', [
            'allanggota' => $allanggota
        ]);
	}

	public function tambah()
	{
		return view('anggota.tambah');
	}

	public function store(Request $request)
	{
		$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required',
    		'telepon' => 'required',
    		'email' => 'required',
    		'status_aktif' => 'required'
    	]);
    	$anggota = DB::table('anggota')->insert([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat,
    		'telepon'  => $request->telepon,
    		'email'  => $request->email,
    		'status_aktif' => $request->status_aktif
    	]);
    	return redirect('/anggota');
	}

	public function edit($id)
	{
		$anggota = Anggota::find($id);
    	return view('anggota.edit', ['anggota' => $anggota]);
	}

	public function update($id, Request $request)
	{
		$this->validate($request,[
    	'nama' => 'required',
    	'alamat' => 'required',
    	'telepon'  => 'required',
    	'email'  => 'required',
    	'status_aktif' => 'required'
    ]);
		$anggota = Anggota::find($id);
    	$anggota->nama = $request->nama;
    	$anggota->alamat = $request->alamat;
    	$anggota->telepon = $request->telepon;
    	$anggota->email = $request->email;
    	$anggota->status_aktif = $request->status_aktif;
    	$anggota->save();

    	return redirect('/anggota');
	}

	public function delete($id)
	{
		$pegawai = Anggota::find($id);
    	$pegawai->delete();
    	return redirect('/anggota');
	}

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $anggota = DB::table('anggota')
        ->where('nama','like',"%".$cari."%")
        ->paginate();
    }
    
    public function read($id)
    {
        $model = Anggota::query()->findorfail($id);

        return view('anggota.read',[
            'model' => $model
        ]);
    }

    public function exportPdf()
    {
        $allAnggota = Anggota::all();

        $pdf = PDF::loadview('anggota.export-pdf',[
            'allAnggota' => $allAnggota
        ]);

        return $pdf->stream('laporan-anggota-pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new AnggotaExport, 'anggota.xlsx');
    }
}