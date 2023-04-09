
<form id="login-form" class="form-default form-layout-01" wire:submit.prevent='register'>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <div class="form-group">
        <label for="name">الإسم</label>
        <input type="text" wire:model.lazy='name' id="name" class="form-control" placeholder="الإسم">
        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
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

    <div class="row-btn">
        <button type="submit" class="btn btn-block">إنشئ الأن</button>
        <a class="btn-link btn-block btn-lg" href="{{ route('user.login') }}"><span class="pt-text">لديك حساب ؟</span></span></a>
    </div>


</form>


