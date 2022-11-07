<?php

namespace App\Models;
use App\Models\apprenant;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    use HasFactory;
    protected $table = 'promotion';

    // one to one
    public function hasOneApprenant(){
         return $this->hasOne(apprenant::class);
    }

    // one to many


}
