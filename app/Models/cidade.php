<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['name', 'estado'];

    public function estados() {
        return $this->hasMany(Estado::class);
    }
}
