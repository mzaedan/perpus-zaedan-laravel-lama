<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = "peminjaman";

   	protected $fillable = ['nama','id_buku','id_anggota','tanggal_pinjam','tanggal_kembali'];

   	public function getJumlahBuku()
   {
       $query = Buku::query();
       $query->where('id_kategori','=', $this->id);

       return $query->count();
   }
}

