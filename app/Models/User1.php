<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
   protected $table = "user";

   protected $fillable = [
   	'username',
   	'password',
   	'id_anggota',
   	'id_petugas',
   	'id_user_role',
   	'status'];

 	public function anggota()
   	{
   		return $this->hasOne(anggota::class,'id','id_anggota');
   	}
   	public function petugas()
   	{
   		return $this->hasOne(petugas::class,'id','id_petugas');
   	}

}
