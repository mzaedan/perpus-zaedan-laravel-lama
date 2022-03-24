<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
   protected $table = "kategori";

   protected $fillable = ['nama'];

   public function manyBuku()
   {
   	return $this->hasMany('App\Models\Buku','id_kategori','id');
   }

   public function getJumlahBuku()
   {
       $query = Buku::query();
       $query->where('id_kategori','=', $this->id);

       return $query->count();
   }

   public function getAllBuku()
   {
       $query = Buku::query();
       $query->where('id_kategori','=',$this->id);

       return $query->get();
   }
}
