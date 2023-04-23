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
        return $this->images()->where('cover_name','cover_1');
    }

    public function scopeImageCoverTwo() {
        return $this->images()->where('cover_name','cover_2');
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
        $categoryName = (string) $this->category()->first()->name;
       // dd($categoryName);
        if($categoryName) {
            switch($categoryName) {
                case "قمصان" :
                    return "shirts";

                case "شورتات" :
                    return  "shorts";

                case "بنطالونات" :
                    return  "trousers";

                case "السترات" :
                    return "jackets";

                case "المعاطف":
                    return "coats";

                case "البلوزات":
                    return "sweaters";

                case "الفساتين":
                    return "dresses";

                case "جلاليب":
                    return "glalib";

                case "عبايات":
                    return "abayat";

                case "اسدال":
                    return "esdal";

                case "تيشيرت":
                    return "tshirt";

                case "سويت شيرت":
                    return "sweatshirt";

            }
        }

    }

    Protected $appends = ['category_name'];

}
