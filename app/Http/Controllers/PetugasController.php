<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Petugas;

use App\Exports\PetugasExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use PDF;

class PetugasController extends Controller
{
    public function index(Request $request)
    {
        $query = Petugas::query();

        if($request->cari != null) {
            $query->where('nama','like','%'.$request->cari.'%');
        }

        $allpetugas = $query->get();

        return view('petugas.index', [
            'allpetugas' => $allpetugas
        ]);
    }

    public function tambah()
    {
    	return view('petugas.tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required',
    		'telepon' => 'required',
    		'email' => 'required'
    	]);

    	$petugas = DB::table('petugas')->insert([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat,
    		'telepon'  => $request->telepon,
    		'email'  => $request->email
    	]);
    	return redirect('/petugas');
    }

    public function edit($id)
    {
    	$petugas = Petugas::find($id);
    	return view('petugas.edit', ['petugas' => $petugas]);
    }

    public function update($id, Request $request)
    {
     	$this->validate($request,[
     		'nama' => 'required',
     		'alamat' => 'required',
     		'telepon'  => 'required',
     		'email'  => 'required'
     	]);
     	$petugas = Petugas::find($id);
     	$petugas->nama = $request->nama;
     	$petugas->alamat = $request->alamat;
     	$petugas->telepon = $request->telepon;
     	$petugas->email = $request->email;
     	$petugas->save();

     	return redirect('/petugas');
    }

    public function delete($id)
    {
    	$petugas = Petugas::find($id);
    	$petugas->delete();
    	return redirect('/petugas');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $petugas = DB::table('petugas')
        ->where('nama','like',"%".$cari."%")
        ->paginate();

        return view('petugas.index',['petugas' => $petugas]);
    }
    
    public function read($id)
    {
        $model = Petugas::query()->findorfail($id);

        return view('petugas.read',[
            'model' => $model
        ]);
    }

    public function exportPdf()
    {
        $allpetugas = Petugas::all();

        $pdf = PDF::loadview('petugas.export-pdf',[
            'allpetugas' => $allpetugas
        ]);

        return $pdf->download('laporan-petugas-pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new PetugasExport, 'petugas.xlsx');
    }
}
