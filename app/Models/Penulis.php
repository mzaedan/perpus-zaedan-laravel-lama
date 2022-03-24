<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
   protected $table = "penulis";

   protected $fillable = [
   	'nama',
   	'alamat',
   	'telepon',
   	'email'
	];

   public function buku()
   {
   	return $this->hasMany('App\Models\Buku','id_penulis','id');
   }

    public function getJumlahBuku()
   {
       $query = Buku::query();
       $query->where('id_kategori','=', $this->id);

       return $query->count();
   }
}