<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Settings extends Component
{
    use WithFileUploads;
    public $name='', $email='', $image, $phone='',$user_id='';


    public function mount() {
        $this->user_id = Auth::guard('user')->user()->id;
        $this->name = Auth::guard('user')->user()->name;
        $this->email = Auth::guard('user')->user()->email;
        $this->phone = Auth::guard('user')->user()->phone;

    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
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
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
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
                [ 'email'   => ['required','email',"unique:users,email,".$this->user_id],
        ]));
        if(!$this->image)
            User::whereId($this->user_id)->update($validatedata);
        if($this->image) {
            $imagename = $this->image->getClientOriginalName();
            User::whereId($this->user_id)->update(array_merge($validatedata,['image' => $imagename]));
            $path = 'images/users/'.$this->user_id;
            $dir = public_path($path);
            if(file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->image->storeAs($path,$imagename);
            File::deleteDirectory(public_path('livewire-tmp'));
        }
        session()->flash('message', "تم تعديل البيانات بنجاح");
        return redirect()->route('user.profile');
    }

    public function render()
    {
        return view('livewire.user.settings');
    }
}
