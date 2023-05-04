<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Settings extends Component
{
    use WithFileUploads;
    public $name='',$owner='', $email='', $image, $phone='', $address='',$details='',$company_id='';


    public function mount() {
        $this->company_id = Auth::guard('company')->user()->id;
        $this->name = Auth::guard('company')->user()->name;
        $this->owner = Auth::guard('company')->user()->owner;
        $this->email = Auth::guard('company')->user()->email;
        $this->phone = Auth::guard('company')->user()->phone;
        $this->address = Auth::guard('company')->user()->address;
        $this->details = Auth::guard('company')->user()->details;

    }

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


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'owner' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
        'address' => ['required', 'string', 'max:255'],
        'details' => ['required', 'string', 'max:255']

    ];

    public function updatedImage()
    {
            $validatedata = $this->validate(
                ['image' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }

    public function edit() {
        $validatedata = $this->validate(
            array_merge(
                $this->rules,
                [ 'email'   => ['required','email',"unique:companies,email,".$this->company_id],
        ]));
        if(!$this->image)
            Company::whereId($this->company_id)->update($validatedata);
        if($this->image) {
            $imagename = $this->image->getClientOriginalName();
            Company::whereId($this->company_id)->update(array_merge($validatedata,['image' => $imagename]));
            $path = 'images/companies/'.$this->company_id;
            $dir = public_path($path);
            if(file_exists($dir))
                File::deleteDirectory($dir);
            else
                mkdir($dir);
            $this->image->storeAs($path,$imagename);
            File::deleteDirectory(public_path('livewire-tmp'));
        }
        session()->flash('message', "تم تعديل البيانات بنجاح");
        return redirect()->route('company.profile');
    }

    public function render()
    {
        return view('livewire.company.settings');
    }
}
