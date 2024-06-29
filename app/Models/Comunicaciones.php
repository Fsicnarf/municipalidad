<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicaciones extends Model
{
    use HasFactory;
    public $timestamps=false;
    
    public function responsable()
    {
        return $this->belongsTo(Responsables::class, 'responsable_id');
    }
}
