<form id="login-form" class="form-default form-layout-01" wire:submit.prevent='login'>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="form-group">
        <label for="email">الإيميل</label>
        <input type="email" wire:model.lazy='email' id="email" class="form-control" placeholder="الإيميل">
        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror

    </div>

    <div class="form-group">
        <label for="password">كلمة السر</label>
        <input type="password" wire:model.lazy='password' id="password" class="form-control" placeholder="كلمة السر">
        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="row-btn">
        <button type="submit" class="btn btn-block">سجل الأن</button>
        <a class="btn-link btn-block btn-lg" href="{{ route('user.register') }}"><span class="pt-text">إنشاء حساب جديد</span></a>
    </div>


</form>
