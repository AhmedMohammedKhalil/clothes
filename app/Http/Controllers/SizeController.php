<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Http\Requests\StoreSizeRequest;
use App\Http\Requests\UpdateSizeRequest;

class SizeController extends Controller
{
    public function showAllSizes() {
        $page_name = 'جميع المقاسات';
        $sizes = Size::all();
        return view('admins.sizes.index',compact('page_name','sizes'));
    }



    public function showAddSizeForm() {
        return view('admins.sizes.create',['page_name' => 'إضافة مقاس جديد']);
    }


    public function editSize() {
        $page_name = 'تعديل مقاس';
        $sizes = Size::all();
        return view('admins.sizes.edit',compact('page_name','sizes'));
    }



    public function deleteSize() {
    }
}
