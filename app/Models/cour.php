<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cour extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(Regions::class, 'users_cours', 'user_id', 'cour_id');
    }
}
