<?php

namespace App\Models;
use App\Models\promotion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprenant extends Model
{
    protected $table = 'apprenant';

    public function promotion(){
        return $this->belongsTo(promotion::class);
    }
}
 