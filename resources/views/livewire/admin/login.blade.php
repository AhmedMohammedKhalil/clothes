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
        <label for="password">كلمة المرور</label>
        <input type="password" wire:model.lazy='password' id="password" class="form-control" placeholder="كلمة المرور">
        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    <div class="row-btn">
        <button type="submit" class="btn btn-block">سجل الأن</button>
    </div>


</form>
