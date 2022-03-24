<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User1;

use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

use PDF;

class UserController extends Controller
{
    public function index(Request $request)

    {
    	$query = User1::query();

        if($request->cari != null) {
            $query->where('username','like','%'.$request->cari.'%');
        }

        $alluser = $query->get();

        return view('user.index', [
            'alluser' => $alluser
        ]);
    }

    public function tambah()

    {
    	return view('user.tambah');
    }

    public function store(Request $request)

    {
    	$this->validate($request,[
    		'username' => 'required',
    		'password' => 'required',
    		'id_anggota' => 'required',
    		'id_petugas' => 'required',
    		'id_user_role' => 'required',
    		'status' => 'required'
    	]);

    	$user = DB::table('user')->insert([
    		'username' => $request->username,
    		'password' => $request->password,
    		'id_anggota'  => $request->id_anggota,
    		'id_petugas' => $request->id_petugas,
    		'id_user_role' => $request->id_user_role,
    		'status'  => $request->status
    	]);
    	return redirect('/user');
    }

    public function edit($id)

    {
    	$user1 = user1::find($id);
    	return view('user.edit', ['user1' => $user1]);
    }

    public function update($id, Request $request)

    {
    	$this->validate($request,[
    		'username' => 'required',
    		'password' => 'required',
    		'id_anggota' => 'required',
    		'id_petugas' => 'required',
    		'id_user_role' => 'required',
    		'status' => 'required'	
     	]);
     	$user1 = user1::find($id);
     	$user1->username = $request->username;
     	$user1->password = $request->password;
     	$user1->id_anggota = $request->id_anggota;
     	$user1->id_petugas = $request->id_petugas;
     	$user1->id_user_role = $request->id_user_role;
     	$user1->status = $request->status;
     	$user1->save();

     	return redirect('/user');
    }

    public function delete($id)

    {
     	$user1 = user1::find($id);
    	$user1->delete();
    	return redirect('/user');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $user = DB::table('user')
        ->where('username','like',"%".$cari."%")
        ->paginate();

        return view('user.index',['user' => $user]);
    }
    
    public function read($id)
    {
        $model = User1::query()->findorfail($id);

        return view('user.read',[
            'model' => $model
        ]);
    }

    public function exportPdf()
    {
        $alluser = User1::all();

        $pdf = PDF::loadview('user.export-pdf',[
            'alluser' => $alluser
        ]);

        return $pdf->download('laporan-user-pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new UserExport, 'user.xlsx');
    }
}
