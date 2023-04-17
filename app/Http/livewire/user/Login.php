<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email'   => 'required|email|exists:users,email',
        'password' => 'required|min:8'
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'exists' => 'هذا الايميل غير مسجل فى الموقع',
    ];

    public function login(){
        $validatedData = $this->validate();
        if(Auth::guard('user')->attempt($validatedData)){
            $cart = Cart::where([
                ['user_id',auth('user')->user()->id],
                ['status','open']
            ])->first();
            if(!$cart) {
                Cart::create([
                    'status' => 'open',
                    'user_id' => auth('user')->user()->id,
                    'total' => 0
                ]);
            }
            session()->flash('message', "تم دخولك ينجاح");
            return redirect()->route('home');
        }else{
            session()->flash('error', 'هناك خطا فى الايميل او الباسورد');
        }
    }

    public function render()
    {
        return view('livewire.user.login');
    }
}
