<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    //
    protected $table = 'pelaporans';

    protected $fillable = [
        'nama', 'latitude', 'longitude', 'status', 'user_id', 'file_gambar','tanggal',
    ];

    

        public function User() {
    
    	return $this->belongsTo('App\User','user_id','id');
    }
     
}
