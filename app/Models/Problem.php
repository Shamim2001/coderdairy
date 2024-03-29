<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $with = ['media'];

    // Category Reletionship
    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    // many to many relationship
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'problems_tags', 'problem_id', 'tag_id');
    }

    // one to many relationship media
    public function media()
    {
        return $this->hasMany(Media::class,'problem_id','id');
    }

    // one to manay relationship solution
    public function solutions()
    {
        return $this->hasMany(Solution::class, 'problem_id', 'id');
    }


    // Change default Route name
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
