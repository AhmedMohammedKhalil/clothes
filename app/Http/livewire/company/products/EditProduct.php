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

class EditProduct extends Component
{
    use WithFileUploads;
    public $product_id,$name,$price,$offer,$gender_id,$material_id,$size_id,$category_id,$details,$color,$image_opt=1,$images=[];
    public $company_id,$materials,$sizes,$genders,$categories;


    public function mount($product_id) {
        $this->company_id = auth('company')->user()->id;
        $this->product_id = $product_id;
        $product = Product::whereId($product_id)->first();
        $this->name = $product->name;
        $this->price = $product->price;
        $this->offer = $product->offer == 0 ? null : $product->offer;
        $this->gender_id = $product->gender_id;
        $this->material_id = $product->material_id;
        $this->size_id = $product->size_id;
        $this->category_id = $product->category_id;
        $this->color = $product->color;
        $this->details = $product->details;


    }


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


    public function updatedImages()
    {
            $validateddata = $this->validate(
                ['images.*' => ['image','mimes:jpeg,jpg,png','max:2048','required']],
                ['image_opt' => ['gt:0']]
            );
    }


    public function edit(){
        if(!$this->offer) {
            $this->offer = 0;
        }
        $validatedata = $this->validate();
        $validatedata = array_merge($validatedata,['offer' => $this->offer]);
        Product::whereId($this->product_id)->update($validatedata);
        if(!file_exists(public_path('images/products/'.$this->product_id))) {
            mkdir(public_path('images/products/'.$this->product_id));
            mkdir(public_path('images/products/'.$this->product_id.'/imgs/'));
        }
        if(count($this->images)>0) {
            $path = 'images/products/'.$this->product_id.'/imgs/';
            $dir = public_path($path);

            if($this->image_opt == 2) {
                Image::where([
                    ['product_id','=',$this->product_id],
                    ['cover_name','=',null]
                ])->delete();
                File::deleteDirectories($dir);
            }

            foreach ($this->images as $image) {
                $imagename = $image->getClientOriginalName();
                $img = Image::create([
                    'image_url' => $imagename,'product_id' => $this->product_id
                ]);
                if (file_exists($dir.$img->id))
                    file::deleteDirectories($dir.$img->id);
                else {
                    mkdir($dir.$img->id);
                }
                $image->storeAs($path.$img->id, $imagename);
            }
        }

        File::deleteDirectory(public_path('livewire-tmp'));

        session()->flash('message', "تم تعديل المنتج بنجاح");
        return redirect()->route('company.products.allproducts');
    }

    public function render()
    {
        $this->categories = Category::all();
        $this->materials = Material::all();
        $this->sizes = Size::all();
        $this->genders = Gender::all();
        return view('livewire.company.products.edit-product');
    }
}
