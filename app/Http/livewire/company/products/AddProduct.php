<?php

namespace App\Http\Livewire\Company\products;

use App\Models\Size;
use App\Models\Image;
use App\Models\Gender;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Material;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class AddProduct extends Component
{
    use WithFileUploads;
    public $name,$price,$offer,$gender_id,$material_id,$size_id,$category_id,$details,$color,$image1,$image2,$images=[];
    public $company_id,$materials,$sizes,$genders,$categories;

    protected $rules = [
        'name' => ['required', 'string', 'max:100'],
        'price' => ['required', 'numeric', 'gt:0'],
        'gender_id' => ['required','gt:0'],
        'company_id' => ['required'],
        'material_id' => ['required','gt:0'],
        'size_id' => ['required','gt:0'],
        'category_id' => ['required','gt:0'],
        'color' => ['required', 'string', 'max:50'],
        'details' => ['required', 'string', 'max:255']

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
        'gt' => 'لابد ان يكون الرقم اكبر من 0',
        'lt' => 'لابد ان يكون الرقم اصغر من سعر الملابس',
        'numeric' => 'لابد ان يكون الحقل ارقام فقط',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];

    public function updatedOffer() {
        $validateddata = $this->validate(
            ['offer' => ['numeric','lt:price','gte:0']]
        );
    }

    public function updatedImage1()
    {
            $validateddata = $this->validate(
                ['image1' => ['required','image','mimes:jpeg,jpg,png','max:2048']]
            );
    }

    public function updatedImage2()
    {
            $validateddata = $this->validate(
                ['image2' => ['required','image','mimes:jpeg,jpg,png','max:2048']]
            );
    }


    public function updatedImages()
    {
            $validateddata = $this->validate(
                ['images.*' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }


    public function add(){
        if(!$this->offer) {
            $this->offer = 0;
        }
        $this->company_id = auth('company')->user()->id;
        $validatedata = $this->validate();
        $validatedata = array_merge($validatedata,['offer' => $this->offer]);

        if(!$this->image1 || !$this->image2) {
            $this->updatedImage1();
            $this->updatedImage2();
        }
        $product = Product::create($validatedata);
        $imagename1 = $this->image1->getClientOriginalName();
        $imagename2 = $this->image2->getClientOriginalName();
        Image::Create(['image_url' => $imagename1,'cover_name' => 'cover_1','product_id' => $product->id]);
        Image::Create(['image_url' => $imagename2,'cover_name' => 'cover_2','product_id' => $product->id]);
        $path = 'images/products/'.$product->id;
        $dir = public_path($path);
        if(file_exists($dir))
            File::deleteDirectories($dir);
        else {
            mkdir($dir);
        }
        mkdir($dir.'/covers');
        mkdir($dir.'/covers/cover-1');
        mkdir($dir.'/covers/cover-2');
        mkdir($dir.'/imgs');
        $this->image1->storeAs($path.'/covers/cover-1',$imagename1);
        $this->image2->storeAs($path.'/covers/cover-2',$imagename2);

        if(count($this->images)>0) {

            foreach ($this->images as $image) {
                $imagename = $image->getClientOriginalName();
                $img = Image::create([
                    'image_url' => $imagename,'product_id' => $product->id
                ]);
                if (file_exists($dir.'/imgs/'.$img->id))
                    file::deleteDirectories($dir.'/imgs/'.$img->id);
                else {
                    mkdir($dir.'/imgs/'.$img->id);
                }
                $image->storeAs($path.'/imgs/'.$img->id, $imagename);
            }

        }

        File::deleteDirectory(public_path('livewire-tmp'));

        session()->flash('message', "تم إضافة المنتج بنجاح");
        return redirect()->route('company.products.allproducts');
    }

    public function render()
    {
        $this->categories = Category::all();
        $this->materials = Material::all();
        $this->sizes = Size::all();
        $this->genders = Gender::all();
        return view('livewire.company.products.add-product');
    }
}
