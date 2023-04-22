<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'gender_id',
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

    public function images() {
        return $this->hasMany(Image::class,'product_id');
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }


    public function scopeImageCoverOne() {
        //dd($this->images()->where('cover_name','cover_1')->first());
        return $this->images()->where('cover_name','cover_1')->first();
    }

    public function scopeImageCoverTwo() {
        return $this->images()->where('cover_name','cover_2')->first();
    }


    public function scopeImageNotCovers() {
        return $this->images()->where('cover_name',null)->get();
    }

    public function carts() {
        return $this->belongsToMany(Cart::class,'orders','product_id')
                ->withPivot(['qty','price'])
                ->withTimestamps();
    }

    public function scopeProductQty() {
        $carts = $this->carts()->where('status','open')->get();
        $total = 0 ;
        foreach($carts as $cart) {
            $total += $cart->pivot->qty;
        }
        return $total;
    }

    public function getCategoryNameAttribute() {
        $categoryName = $this->category()->first()->name;
        $name = match($categoryName) {
            'قمصان' => 'shirts',
            'شورتات' => 'shorts',
            'بناطيل' => 'trousers',
            'سترات' => 'jackets',
            'معاطف' => 'coats',
            'بلوزات' => 'sweaters',
            'فساتين' => 'dresses',
            'جلاليب' => 'glalib',
            'عبايات' => 'abayat',
            'اسدال' => 'esdal',
            'تيشرت' => 'tshirt',
            'سويت شيرت' => 'sweatshirt'
        };
        return $name;
    }

    Protected $appends = ['category_name'];

}
