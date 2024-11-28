<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['name', 'cidade_id'];

    public function cidade() {
        return $this->belongsTo(Cidade::class);
    }
}
