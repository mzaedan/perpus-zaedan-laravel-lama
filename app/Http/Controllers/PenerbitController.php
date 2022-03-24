<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Penerbit;

use App\Exports\PenerbitExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use PDF;

class PenerbitController extends Controller
{
    public function index(Request $request)
    {
    	$query = Penerbit::query();

        if($request->cari != null) {
            $query->where('nama','like','%'.$request->cari.'%');
        }

        $allpenerbit = $query->get();

        return view('penerbit.index', [
            'allpenerbit' => $allpenerbit
        ]);
    }

    public function tambah()
    {
    	return view('penerbit.tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required',
    		'telepon' => 'required',
    		'email' => 'required'
    	]);

    	$penerbit = DB::table('penerbit')->insert([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat,
    		'telepon'  => $request->telepon,
    		'email'  => $request->email
    	]);
    	return redirect('/penerbit');
    }

    public function edit($id)
    {
    	$penerbit = Penerbit::find($id);
    	return view('penerbit.edit', ['penerbit' => $penerbit]);
    }

    public function update($id, Request $request)
    {
    	$this->validate($request,[
    	'nama' => 'required',
    	'alamat' => 'required',
    	'telepon'  => 'required',
    	'email'  => 'required'
    	]);
    	$penerbit = Penerbit::find($id);
    	$penerbit->nama = $request->nama;
    	$penerbit->alamat = $request->alamat;
    	$penerbit->telepon = $request->telepon;
    	$penerbit->email = $request->email;
    	$penerbit->save();

    	return redirect('/penerbit');
    }

    public function delete($id)
    {
    	$penerbit = Penerbit::find($id);
    	$penerbit->delete();
    	return redirect('/penerbit');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $penerbit = DB::table('penerbit')
        ->where('nama','like',"%".$cari."%")
        ->paginate();

        return view('penerbit.index',['penerbit' => $penerbit]);
    }

    public function read($id)
    {
        $model = Penerbit::query()->findorfail($id);

        return view('penerbit.read',[
            'model' => $model
        ]);
    }

    public function exportPdf()
    {
        $allPenerbit = Penerbit::all();

        $pdf = PDF::loadview('penerbit.export-pdf',[
            'allPenerbit' => $allPenerbit
        ]);

        return $pdf->stream('laporan-penerbit-pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new PenerbitExport, 'penerbit.xlsx');
    }

    public function combo() {
      $katdb = Buku::lists('id_kategori', 'id');
      return View::make('kategori')->with('buku', $katdb);
    }
}
