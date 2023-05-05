<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Material;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm() {
        return view('admins.login');
    }

    public function dashboard() {

        $page_name = 'الإحصائيات';
        $user_count = User::all()->count();
        $company_count = Company::all()->count();
        $category_count = Category::all()->count();
        $product_count = Product::all()->count();
        $material_count = Material::all()->count();
        $order_count = Order::all()->count();

        return view('admins.dashboard',compact('page_name','user_count','company_count','category_count','product_count','material_count','order_count'));
    }

    public function profile() {
        return view('admins.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('admins.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('admins.changePassword',['page_name' => 'تغيير كلمة المرور']);
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
