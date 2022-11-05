<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprenant extends Model
{
    use HasFactory;
    protected $table ='apprenant';
    public function promotion(){
        return $this->belongsTo(promotion::class);
    }
}