<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Penulis;

use App\Exports\PenulisExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use PDF;

class PenulisController extends Controller
{
	public function index(Request $request)
	{
		$query = Penulis::query();

        if($request->cari != null) {
            $query->where('nama','like','%'.$request->cari.'%');
        }

        $allpenulis = $query->get();

        return view('penulis.index', [
            'allpenulis' => $allpenulis
        ]);
	}

	public function tambah()
	{
		return view('penulis.tambah');
	}

	public function store(Request $request)
	{
		$this->validate($request,[
			'nama' => 'required',
			'alamat' => 'required',
			'telepon' => 'required',
			'email' => 'required'
		]);
		$penulis = DB::table('penulis')->insert([
			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'telepon'  => $request->telepon,
			'email'  => $request->email
		]);
		return redirect('/penulis');
	}

	public function edit($id)
	{
		$penulis = Penulis::find($id);
		return view('penulis.edit', ['penulis' => $penulis]);
	}

	public function update($id, Request $request)
	{
		$this->validate($request,[
			'nama' => 'required',
			'alamat' => 'required',
    		'telepon'  => 'required',
    		'email'  => 'required'
    	]);
    	$penerbit = Penulis::find($id);
    	$penerbit->nama = $request->nama;
    	$penerbit->alamat = $request->alamat;
    	$penerbit->telepon = $request->telepon;
    	$penerbit->email = $request->email;
    	$penerbit->save();

    	return redirect('/penulis');
	}

	public function delete($id)
	{
		$pegawai = Penulis::find($id);
    	$pegawai->delete();
    	return redirect('/penulis');
	}

	public function cari(Request $request)
    {
    	$cari = $request->cari;

    	$penulis = DB::table('penulis')
		->where('nama','like',"%".$cari."%")
		->paginate();

		return view('penulis.index',['penulis' => $penulis]);
    }
	
	public function read($id)
    {
        $model = Penulis::query()->findorfail($id);

        return view('penulis.read',[
            'model' => $model
        ]);
    }

    public function exportPdf()
    {
        $allPenulis = Penulis::all();

        $pdf = PDF::loadview('penulis.export-pdf',[
            'allPenulis' => $allPenulis
        ]);

        return $pdf->stream('laporan-penulis-pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new PenulisExport, 'penulis.xlsx');
    }
}