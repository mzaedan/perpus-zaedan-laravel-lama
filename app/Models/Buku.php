<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{

   use SoftDeletes;

   protected $table = "buku";

   protected $dates = ['deleted_at'];

   protected $primarykey='id';

   protected $fillable = [
   'nama',
   'tahun_terbit',
   'id_penulis',
   'id_penerbit',
   'id_kategori',
   'sinopsis',
   'sampul',
   'berkas'
   ];

   public function penulis()
   {
    return $this->hasOne(penulis::class,'id','id_penulis');
   }  
   public function kategori()
   {
   	 return $this->hasOne(kategori::class,'id','id_kategori');
   }
   public function penerbit()
   {
   	return $this->hasOne(penerbit::class,'id','id_penerbit');
   }
}
