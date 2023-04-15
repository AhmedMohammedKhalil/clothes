<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class AddCategory extends Component
{
    use WithFileUploads;
    public $name,$image;


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


    public function updatedImage()
    {
            $validatedata = $this->validate(
                ['image' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }


    public function add(){
        $data = $this->validate();
        $imagename = "";
        if($this->image) {
            $imagename = $this->image->getClientOriginalName();
            $data = array_merge($data,['image' => $imagename]);
        }
        $category = Category::create($data);
        if($this->image) {
            $dir = public_path('images/categories/'.$category->id);
            if(file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->image->storeAs('images/categories/'.$category->id,$imagename);
            File::deleteDirectory(public_path('/livewire-tmp'));
        }
        session()->flash('message', "تم إضافة النوع بنجاح");
        return redirect()->route('admin.categories.allCategories');
    }

    public function render()
    {
        return view('livewire.admin.categories.add-category');
    }
}
