<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimientos extends Model
{
    use HasFactory;
    public $timestamps=false;

    /*public function establecimientos()
    {
        return $this->belongsTo(Establecimientos::class, 'establecimiento_id');
    }*/
}