<?php

namespace App\Http\Livewire;

use App\Models\User;

use App\Models\Gender;
use App\Models\Company;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class Results extends Component
{
    public $products,$flag,$prod,$page_type,$content,$prods = [];


    public function mount($page_type,$content) {
        $this->page_type =$page_type;
        $this->content = $content;
        $this->flag = false;
        if($page_type == 'category') {
            $this->prod = Category::where('name','like','%'.$content.'%')->first()->products;
        }
        if($this->page_type == 'company') {
            $this->prod = Company::where('name','like','%'.$this->content.'%')->first()->products;
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
        if(Auth::guard('user')->check()) {
            $carts = User::find(auth('user')->user()->id)->closeCarts();
            $ids = [];
            foreach($carts as $cart) {
                foreach ($cart->orders as $order) {
                    if($ids != [] || !in_array($order->product->company_id, $ids))
                        $ids[] = $order->product->company_id;
                }
            }

            if($ids != []) {
                $this->prods = Product::select('*')->whereIn('company_id',$ids)->inRandomOrder()->limit(8)->get();
            }
        }

        return view('livewire.results');
    }
}
