<?php

namespace App\Models;
use App\Models\promotion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprenant extends Model
{
    use HasFactory;
    protected $table ='apprenant';

    
    public function promotion(){
        return $this->belongsTo(promotion::class);
    }

    // many to many


    public function promotions(){
        return $this->belongsToMany(promotion::class);
    }
}
