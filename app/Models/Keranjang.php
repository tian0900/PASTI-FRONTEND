<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjangs';
    protected $primaryKey = 'id_keranjang';

    public function users(){	
    	return $this->belongsTo('App\Models\Users')->withDefault();
    }
}
