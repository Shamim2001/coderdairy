<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // one to one relationship problem
    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }

    // one to many relatiobship Media
    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
