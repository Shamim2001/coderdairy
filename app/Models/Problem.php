<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Category Reletionship
    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    // Change default Route name
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
