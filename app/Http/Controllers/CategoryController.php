<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function showAllCategories() {
        $page_name = 'جميع انواع الملابس';
        $categories = Category::all();
        return view('admins.categories.index',compact('page_name','categories'));
    }



    public function showAddCategoryForm() {
        return view('admins.categories.create',['page_name' => 'إضافة نوع ملابس جديد']);
    }


    public function editCategory() {
        $page_name = 'تعديل نوع ملابس';
        $categories = Category::all();
        return view('admins.categories.edit',compact('page_name','categories'));
    }



    public function deleteCategory() {
    }
}
