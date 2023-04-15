<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


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


    public function editCategory(Request $r) {
        $page_name = 'تعديل نوع ملابس';
        $category = Category::whereId($r->id)->first();
        return view('admins.categories.edit',compact('page_name','category'));
    }



    public function deleteCategory(Request $r) {
        Category::destroy($r->id);
        File::deleteDirectory(public_path('images/categories/'.$r->id));
        return redirect()->route('admin.categories.allCategories');
    }
}
