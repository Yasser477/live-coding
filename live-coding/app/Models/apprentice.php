<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprentice extends Model
{
    use HasFactory;

    public function briefs(){
    
    return $this->hasMany(briefs::class);
    }
}


    