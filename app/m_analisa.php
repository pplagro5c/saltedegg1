<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_analisa extends Model
{
       protected $primaryKey = 'id_telurasin';
       protected $table = 'tb_telurasin';
       public function pemakai(){
		return $this->belongsTo(m_pengguna::class,'id_pemakai');
	}
	public $timestamps = false;
}
