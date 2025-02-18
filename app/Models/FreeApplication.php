<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeApplication extends Model
{
    use HasFactory;

    public function user(){ //whatever function name
        return $this->belongsTo(User::class);//Model name
    }
}

