<?php

namespace App\Models;
use App\Models\apprenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    use HasFactory;
    protected $table = 'promotion';

    public function apprenant()
{
    return $this->belongsToMany(apprenant::class);
}
}
