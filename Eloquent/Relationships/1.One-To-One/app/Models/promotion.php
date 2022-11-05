<?php

namespace App\Models;
use App\Models\apprenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{    
  protected $table = 'promotion';
    
      function HasOneApprenant(){
        return $this->hasOne(apprenant::class);
      }
}
