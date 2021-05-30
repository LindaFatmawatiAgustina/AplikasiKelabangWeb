<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TindakLanjut extends Model
{
    //
      protected $fillable = [
        'id_pelaporans', 'nilai_kedalaman', 'tanggal', 'deskripsi',
    ];

    protected $table = 'tindak_lanjuts';

        public function Pelaporans() {
    
    	return $this->belongsTo('App\Pelaporan','id_pelaporans','id');
    }
}
