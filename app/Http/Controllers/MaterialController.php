<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;

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


    public function editMaterial() {
        $page_name = 'تعديل الخامة';
        $materials = Material::all();
        return view('admins.materials.edit',compact('page_name','materials'));
    }



    public function deleteMaterial() {
    }
}
