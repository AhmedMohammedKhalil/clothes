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
        'offer',
        'color',
        'available',
        'details',
        'size_id',
        'company_id',
        'category_id',
        'material_id',
        'gender_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function gender() {
        return $this->belongsTo(Gender::class);
    }
    public function material() {
        return $this->belongsTo(Material::class);
    }
    public function size() {
        return $this->belongsTo(Size::class);
    }

    public function orders() {
        return $this->hasMany(Order::class,'product_id');
    }
    
    public function iamges() {
        return $this->hasMany(Image::class,'product_id');
    }
}
