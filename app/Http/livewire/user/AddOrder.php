<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Models\Product;
use Livewire\Component;

class AddOrder extends Component
{

    public $product,$qty, $user, $cart,$price;
    public function mount($p_id) {
        $this->product = Product::whereId($p_id)->first();
        $this->qty = 1;
        $this->user = User::whereId(auth('user')->user()->id)->first();
        $this->cart = $this->user->openCart();
        if($this->product->offer != 0) {
            $this->price = $this->product->offer;
        }
    }


    public function add() {
        $data = $this->validate(
            ['qty' => ['required','numeric','gt:0']] ,
            [
                'gt' => 'لابد ان يكون اكبر من 0',
                'required' => 'هذا الحقل مطلوب',
            ]
        );


        $total = $this->qty * $this->price;
        $this->cart->products()->attach($this->product->id,['qty' => $this->qty,'price'=> $this->price]);
        $this->cart->update(['total' => $this->cart->total + $total]);
        session()->flash('success', 'تم طلبك بنجاح');
        $this->qty = 1;

    }
    public function render()
    {
        return view('livewire.user.add-order');
    }
}
