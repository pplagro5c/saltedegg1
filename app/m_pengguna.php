<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_pengguna extends Model
{
    protected $primaryKey = 'id_pengguna';
    protected $table = 'tb_pengguna';
    public function scopeAnggota($query) {
		return $query->where('status', 'pengguna');
	}
	public $timestamps = false;
}
