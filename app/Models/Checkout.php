<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $table = 'checkout';
    protected $primaryKey = 'checkout_id';

    public function users(){	
    	return $this->belongsTo('App\Models\Users')->withDefault();
    }
}
