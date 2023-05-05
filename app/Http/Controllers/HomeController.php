<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories=Category::all();
        $companies = Company::all();
        $pids = Product::query()
        ->join('orders', 'orders.product_id', '=', 'products.id')
        ->selectRaw('products.id, SUM(orders.qty) AS quantity_sold')
        ->groupBy(['products.id']) // should group by primary key
        ->orderByDesc('quantity_sold')
        ->take(10) // 20 best-selling products
        ->get();
        $array = [];
        foreach($pids as $pid){
            $array[] = $pid['id'];
        }

        $products = Product::select('*')->whereIn('id',$array)->get();

        return view('home',compact('categories','companies','products'));
    }

    public function aboutUs()
    {
        $page_name = 'من نحن';
        return view('aboutus',compact('page_name'));
    }


    public function shop(Request $r)
    {
        $page_name = 'الملابس';

        $page_type = $r->page_type;
        $content = $r->content;
        if($r->page_type == 'company') {
            $products = Company::where('name','like','%'.$content.'%')->first()->products;
        }
        if($r->page_type == 'category') {
            $products = Category::where('name','like','%'.$content.'%')->first()->products;
        }
        if($r->page_type == 'gender') {
            $products = Gender::where('name','like','%'.$content.'%')->first()->products;
        }

        if($r->page_type == 'search') {
            $products = Product::where('name','like','%'.$content.'%')
                                ->orWhere('details','like','%'.$content.'%')->get();
        }
        return view('shop',compact('page_name','products','page_type','content'));

    }

    public function showProduct(Request $r) {
        $page_type = $r->page_type;
        $content = $r->content;
        $page = $r->page;
        $page_name = 'عرض الملابس';
        $product = Product::whereId($r->id)->first();
        return view('singleProduct',compact('product','page_type','content','page','page_name'));
    }
}
