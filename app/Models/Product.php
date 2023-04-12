<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'color',
        'available',
        'details',
        'size_id',
        'company_id',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function size() {
        return $this->belongsTo(Size::class);
    }
}
