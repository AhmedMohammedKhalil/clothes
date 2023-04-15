<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAllProducts() {
        $page_name = 'جميع الملابس';
        $products = Product::where('company_id',auth('company')->user()->id)->get();
        //dd($products);
        return view('companies.products.index',compact('page_name','products'));
    }



    public function showAddProductForm() {
        return view('companies.products.create',['page_name' => 'إضافة ملابس جديده']);
    }


    public function editProduct(Request $r) {
        $page_name = 'تعديل الملابس';
        $product_id = $r->id;
        return view('companies.products.edit',compact('page_name','product_id'));
    }



    public function deleteProduct(Request $r) {
        Image::where('product_id',$r->id)->delete();
        Product::whereId($r->id)->delete();
        return redirect()->route('company.products.allproducts');
    }
}
