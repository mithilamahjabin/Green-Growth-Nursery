<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category_data()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
