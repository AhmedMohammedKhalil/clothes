
<form id="login-form" class="form-default form-layout-01" wire:submit.prevent='edit'>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <div class="form-group">
        <label for="name">اسم الشركة</label>
        <input type="text" wire:model.lazy='name' id="name" class="form-control" placeholder="اسم الشركة">
        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="owner">اسم صاحب الشركة</label>
        <input type="text" wire:model.lazy='owner' id="owner" class="form-control" placeholder="اسم صاحب الشركة">
        @error('owner') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="email">الإيميل</label>
        <input type="email" wire:model.lazy='email' id="email" class="form-control" placeholder="الإيميل">
        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror

    </div>

    <div class="form-group">
        <label for="phone">الموبايل</label>
        <input type="text" wire:model.lazy='phone' id="phone" class="form-control" placeholder="الموبايل">
        @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="password">كلمة السر</label>
        <input type="password" wire:model.lazy='password' id="password" class="form-control" placeholder="كلمة السر">
        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="confirm_password">أعد كلمة السر</label>
        <input type="password" wire:model.lazy='confirm_password' id="confirm_password" class="form-control" placeholder="أعد كلمة السر">
        @error('confirm_password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="address">عنوان الشركة</label>
        <textarea name="address" class="form-control"  wire:model.lazy='address' id="address" rows="6" placeholder="عنوان الشركة"></textarea>
        @error('address') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="details">تفاصيل عن الشركة</label>
        <textarea name="details" class="form-control"  wire:model.lazy='details' id="details" rows="6" placeholder="تفاصيل عن الشركة"></textarea>
        @error('details') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>



    <div class="row-btn">
        <button type="submit" class="btn btn-block">حفظ التغييرات</button>
    </div>


</form>


