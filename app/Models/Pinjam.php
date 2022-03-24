<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
   protected $table = "peminjaman";

   protected $fillable = ['nama','alamat','jenis_buku','tanggal_pinjam','tanggal_kembali'];
}