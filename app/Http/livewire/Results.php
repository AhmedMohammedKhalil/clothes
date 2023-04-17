<?php

namespace App\Http\Livewire;

use App\Models\Gender;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Results extends Component
{
    public $products,$flag,$prod,$page_type,$content;


    public function mount($page_type,$content) {
        $this->page_type =$page_type;
        $this->content = $content;
        $this->flag = false;
        if($page_type == 'category') {
            $this->prod = Category::where('name','like','%'.$content.'%')->first()->products;
        }
        if($page_type == 'gender') {
            $this->prod = Gender::where('name','like','%'.$content.'%')->first()->products;
        }

        if($page_type == 'search') {
            $this->prod = Product::where('name','like','%'.$content.'%')
                                ->orWhere('details','like','%'.$content.'%')->get();
        }
    }

    protected $listeners = [
        'showProducts'
    ];




    public function showProducts($products) {
        $this->flag = true;
        $this->prod = [];
        if($products != []) {
            $ids = [];
            foreach($products as $p) {
                if(count($ids) > 0) {
                    if(!in_array($p['id'],$ids)) {
                        $ids[] = $p['id'];
                    }
                } else {
                    $ids[] = $p['id'];
                }
            }
            $this->prod = Product::find($ids);
        } else {
            $this->emit('$refresh');
            $this->prod = [];
        }
        $this->products = $this->prod;
        $this->emit('$refresh');
    }


    public function render()
    {
        return view('livewire.results');
    }
}
