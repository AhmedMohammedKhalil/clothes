<?php

namespace App\Http\Livewire\Admin\Companies;

use Livewire\Component;
use App\Models\Company;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class EditCompany extends Component
{
    use WithFileUploads;
    public $name="",$image,$company,$owner="", $email="", $password="", $confirm_password="", $phone="", $address="",$details="";

    public function mount($company_id) {
        $this->company = Company::find($company_id);
        $this->name = $this->company->name;
        $this->owner = $this->company->owner;
        $this->email = $this->company->email;
        $this->phone = $this->company->phone;
        $this->address = $this->company->address;
        $this->details = $this->company->details;
    }
    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'owner' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
        'address' => ['required', 'string', 'max:255'],
        'details' => ['required', 'string', 'max:255'],

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

    public function updatedPassword()
    {
            $validatedata = $this->validate(
                [ 
                    'password' => ['string', 'min:8'],
                    'confirm_password' => ['string', 'min:8','same:password']
                ]
            );
    }

    public function edit(){
        $validatedData = $this->validate(
            array_merge(
                $this->rules,
                [ 'email'   => ['required','email',"unique:companies,email,".$this->company->id],
        ]));
        if($this->password){
            $this->updatedPassword();
            $validatedData = array_merge(
                $validatedData,
                ['password' => Hash::make($this->password)]
            );
        }
        if (!$this->image)
            Company::whereId($this->company->id)->update($validatedData);
        if ($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            Company::whereId($this->company->id)->update(array_merge($validatedData, ['image' => $imagename]));
            $dir = public_path('images/companies/' . $this->company->id);
            if (file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->image->storeAs('images/companies/' . $this->company->id, $imagename);
            File::deleteDirectory(public_path('/livewire-tmp'));
        }
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.companies.allCompanies');

    }

    public function render()
    {
        return view('livewire.admin.companies.edit-company');
    }
}
