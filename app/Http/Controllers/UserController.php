<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;




class UserController extends Controller
{
     public function showLoginForm() {
        return view('users.login');
    }


    public function showRegisterForm() {
        return view('users.register');
    }


    public function profile() {
        return view('users.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('users.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('users.changePassword',['page_name' => 'تعديل كلمة السر']);
    }

    public function showCart() {
        $page_name = 'عربة التسوق';
        $cart = User::find(auth('user')->user()->id)->openCart();
        return view('users.cart',compact('cart','page_name'));
    }

    public function showCarts() {
        $carts = User::find(auth('user')->user()->id)->closeCarts();
        return view('users.closeCarts',compact('carts'));
    }

    public function showOrders(Request $r) {
        $cart = Cart::find($r->id);
        return view('users.orders',compact('cart'));
    }

    public function delOrder(Request $r) {
        $user = User::find(auth('user')->user()->id);
        $order = Order::find($r->id);
        $total = $order->qty * $order->product->price;
        // $user->update(['balance' => $user->balance + $total]);
        $user->openCart()->update(['total' => $user->openCart()->total - $total]);
        $order->delete();
        return redirect()->route('user.cart');
    }

    public function checkout() {

        $user = User::find(auth('user')->user()->id);
        foreach($user->openCart()->orders as $order) {
            $product = Product::find($order->product_id);
            if(($product->qty - $order->qty) == 0)
                $product->update(['qty' => $product->qty - $order->qty ,'available' => 0]);
            else
            $product->update(['qty' => $product->qty - $order->qty]);

        }
        $user->openCart()->update(['status' => 'close']);

        Cart::create([
            'status' => 'open',
            'user_id' => $user->id,
            'total' => 0
        ]);
        return redirect()->route('user.carts');

    }

    public function logout(Request $request) {
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
