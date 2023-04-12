<?php

namespace App\Http\Livewire\Admin\sizes;

use Livewire\Component;
use App\Models\Size;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditSize extends Component
{
    public $name ,$size;


    public function mount($size_id) {
        $this->size = Size::whereId($size_id)->first();
        $this->name = $this->size->name;
    }


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'owner.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'regex' => 'لا بد ان يكون الحقل ارقام فقط',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];




    public function edit(){
        $validatedData = $this->validate();
        Size::whereId($this->size->id)->update($validatedData);
        return redirect()->route('admin.sizes.allSizes');
    }

    public function render()
    {
        return view('livewire.admin.sizes.edit-Size');
    }
}
