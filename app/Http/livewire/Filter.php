<?php

namespace App\Http\Livewire;

use App\Models\Size;
use App\Models\Gender;
use App\Models\Company;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Material;
use App\Http\Livewire\Results;

class Filter extends Component
{
    public $genders,$companies,$categories,$sizes,$materials,$products,$page_type,$content;
    public $filters =[
        'genders' => [],
        'companies' => [],
        'categories' => [],
        'sizes' => [],
        'materials' => [],
        'prices' => [],
        'search' => ''
    ];


    public function mount($page_type,$content) {
        $this->page_type = $page_type;
        $this->content = $content;
        if($this->page_type == 'category') {
            $this->filters['categories'][] = $this->content;
            $this->products = Category::where('name','like','%'.$this->content.'%')->first()->products;
        }
        if($this->page_type == 'gender') {
            $this->filters['genders'][] = $this->content;
            $this->products = Gender::where('name','like','%'.$this->content.'%')->first()->products;
        }

        if($this->page_type == 'search') {
            $this->filters['search'] = $this->content;
            $this->products = Product::where('name','like','%'.$this->content.'%')
                                ->orWhere('details','like','%'.$this->content.'%')->get();
        }

    }



    public function filtering() {

        if($this->page_type == 'category') {
            $cat = Category::where('name','like','%'.$this->content.'%')->first();
            $this->products = Product::whereIn('category_id',[$cat->id]);

        }
        if($this->page_type == 'gender') {
            $gen = Gender::where('name','like','%'.$this->content.'%')->first();
            $this->products = Product::whereIn('gender_id',[$gen->id]);
        }
        if($this->page_type == 'search') {
            $this->filters['search'] = $this->content;
            $this->products = Product::where([
                ['name','like','%'.$this->content.'%'],
                ['details','like','%'.$this->content.'%']
            ]);
        }

        if(count($this->filters['categories']) > 0 && $this->page_type != "category") {
            $categories = Category::whereIn('name',$this->filters['categories'])->get();
            $catIds = [];
            foreach($categories as $c) {
                $catIds[] = $c->id;
            }
            $this->products = $this->products->whereIn('category_id',$catIds);
        }

        if(count($this->filters['genders']) > 0 && $this->page_type != "gender") {
            $genders = Gender::whereIn('name',$this->filters['genders'])->get();
            $genIds = [];
            foreach($genders as $c) {
                $genIds[] = $c->id;
            }
            $this->products = $this->products->whereIn('gender_id',$genIds);
        }

        if(count($this->filters['companies']) > 0) {
            $companies = Company::whereIn('name',$this->filters['companies'])->get();
            $cIds = [];
            foreach($companies as $c) {
                $cIds[] = $c->id;
            }
            $this->products = $this->products->whereIn('company_id',$cIds);

        }

        if(count($this->filters['materials']) > 0) {
            $materials = Material::whereIn('name',$this->filters['materials'])->get();
            $mIds = [];
            foreach($materials as $c) {
                $mIds[] = $c->id;
            }
            $this->products = $this->products->whereIn('material_id',$mIds);
        }

        if(count($this->filters['sizes']) > 0) {
            $sizes = Size::whereIn('name',$this->filters['sizes'])->get();
            $sIds = [];
            foreach($sizes as $c) {
                $sIds[] = $c->id;
            }
            $this->products = $this->products->whereIn('size_id',$sIds);

        }

        if(count($this->filters['prices']) > 0) {
            $priceWehere = [];
            foreach($this->filters['prices'] as $c) {

                if($c == "اقل من 5 دينار") {
                    $priceWehere[] = ['price','<=',5];
                }else if( $c == 'من 5 دينار الى 10 دينار') {
                    $priceWehere[] = ['price','>',5];
                    $priceWehere[] = ['price','<=',10];
                }else if( $c == 'من 10 دينار الى 15 دينار') {
                    $priceWehere[] = ['price','>',10];
                    $priceWehere[] = ['price','<=',15];
                }else if( $c == 'من 15 دينار الى 20 دينار') {
                    $priceWehere[] = ['price','>',15];
                    $priceWehere[] = ['price','<=',20];
                }else {
                    $priceWehere[] = ['price','>',20];
                }
            }
            //dd($priceWehere);
            $this->products = $this->products->where($priceWehere);

        }

        $this->products = $this->products->get();
        $this->emitTo(Results::class,'showProducts',$this->products);
    }

    public function makeFilter($type,$id,$name) {
        $this->filters[$type][] = $name;
        $this->filtering();
    }


    public function deleteFilter($type,$name) {
        $key = array_search($name,$this->filters[$type]);
        unset($this->filters[$type][$key]);
        $this->filtering();
    }


    public function render()
    {
        $this->genders = Gender::all();
        $this->sizes = Size::all();
        $this->categories = Category::all();
        $this->companies = Company::all();
        $this->materials = Material::all();
        return view('livewire.filter');
    }
}
