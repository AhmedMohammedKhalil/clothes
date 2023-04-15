<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;


class MaterialController extends Controller
{
    public function showAllMaterials() {
        $page_name = 'جميع انواع الخامات';
        $materials = Material::all();
        return view('admins.materials.index',compact('page_name','materials'));
    }



    public function showAddMaterialForm() {
        return view('admins.materials.create',['page_name' => 'إضافة خامة جديدة']);
    }


    public function editMaterial(Request $r) {
        $page_name = 'تعديل الخامة';
        $material = Material::whereId($r->id)->first();
        return view('admins.materials.edit',compact('page_name','material'));
    }



    public function deleteMaterial(Request $r) {
        Material::destroy($r->id);
        return redirect()->route('admin.materials.allMaterials');
    }
}
