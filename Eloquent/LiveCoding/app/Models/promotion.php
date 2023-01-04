<?php

namespace App\Models;
use App\Models\apprenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    use HasFactory;

    protected $table ='promotion';

// One to one

public function oneApprenant(){
    return $this->hasOne(apprenant::class);
}

// one to many

public function  hasManyApprenant(){
    return $this->hasMany(apprenant::class);
}


// many to many

public function apprenant(){
    return $this->belongsToMany(apprenant::class);
}




}
