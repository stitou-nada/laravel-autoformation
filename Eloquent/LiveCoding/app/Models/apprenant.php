<?php

namespace App\Models;
use App\Models\promotion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprenant extends Model
{
    use HasFactory;
    protected $table = 'apprenant';

    // belongsTo

    public function promotion(){
        return $this->belongsTo(promotion::class);
    }

}
