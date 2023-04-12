<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Http\Requests\StoreSizeRequest;
use App\Http\Requests\UpdateSizeRequest;
use Illuminate\Http\Request;

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


    public function editSize(Request $r) {
        $page_name = 'تعديل مقاس';
        $size = Size::whereId($r->id)->first();
        return view('admins.sizes.edit',compact('page_name','size'));
    }



    public function deleteSize(Request $r) {
        Size::destroy($r->id);
        return redirect()->route('admin.sizes.allSizes');
    }
}
