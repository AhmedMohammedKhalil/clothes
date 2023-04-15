<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class EditCategory extends Component
{
    use WithFileUploads;
    public $name,$image,$cat;


    public function mount($category_id) {
        $this->cat = Category::find($category_id);
        $this->name = $this->cat->name;
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


    public function updatedImage()
    {
            $validatedata = $this->validate(
                ['image' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }


    public function edit(){
        $validatedata = $this->validate();
        if (!$this->image)
            Category::whereId($this->cat->id)->update($validatedata);
        if ($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            Category::whereId($this->cat->id)->update(array_merge($validatedata, ['image' => $imagename]));
            $dir = public_path('images/categories/' . $this->cat->id);
            if (file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->image->storeAs('images/categories/' . $this->cat->id, $imagename);
            File::deleteDirectory(public_path('/livewire-tmp'));
        }
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.categories.allCategories');

    }

    public function render()
    {
        return view('livewire.admin.categories.edit-category');
    }
}
