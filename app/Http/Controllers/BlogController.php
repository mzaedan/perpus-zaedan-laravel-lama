<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Penerbit;
use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Peminjaman;
use DateTime;
use Response;
class BlogController extends Controller
{
	public function index()
	{
		$penerbit = Peminjaman::all();

		$grafik = [];

		foreach($penerbit as $data) {

			$dataBulan = [];


			for($i=1;$i<=12; $i++) {

				$tahun = date('Y');

                $datetime = DateTime::createFromFormat('Y-n-d',$tahun.'-'.$i.'-01');
                $awal_bulan = $datetime->format('Y-m-01');
                $akhir_bulan = $datetime->format('Y-m-t');

                $query = Peminjaman::query();
                $query->where('tanggal_pinjam','>=',$awal_bulan);
                $query->where('tanggal_pinjam','<=',$akhir_bulan);
                // $query->join('mitra','dokumen.id_mitra','=','mitra.id');
                // $query->where('mitra.id_mitra_jenis','=',$mitra->id);
                $jumlah = $query->count();

                array_push($dataBulan,$jumlah);
            }

			$data = [
				'name' => $data->nama,
				'data' => $dataBulan
			];

			array_push($grafik, $data);
		}

		// dd(json_encode($grafik));


		// $grafik = Penerbit::select(\DB::raw("COUNT(*) as count"))
		// 				-> whereyear('created_at', date('Y'))
		// 				->groupBy(\DB::raw("month(created_at)"))
		// 				->pluck('count');

		return view('blog.home',compact('grafik'));
	} 

	public function tentang()

	{

		return view('blog.tentang');
	}

	public function kontak()

	{
		return view('blog.kontak');
	}

	public function buku()

	{
		return view('buku.index');
	}

	public function penerbit()
	{
		return view('penerbit.index');
	}

	public function json()
	{

		return response()->json([
			'nama' => 'Thomas', 
			'alamat' => 'Bandung',
			'anak'=> [
				['nama'=>'Seimika','Umur' => '5'],
				['nama'=>'Arza','Umur' => '2']
			] 
		]);
	}
}
