<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_telurbebek extends Model
{
       protected $primaryKey = 'id_telurbebek';
       protected $table = 'tb_telurbebek';
       public function pakai(){
	return $this->belongsTo(m_pengguna::class,'id_pakai');
	}
	
}
