


<form id="login-form" class="form-default form-layout-01" wire:submit.prevent='edit'>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="form-group">
        <label for="password">كلمة المرور</label>
        <input type="password" wire:model.lazy='password' id="password" class="form-control" placeholder="كلمة المرور">
        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="confirm_password">أعد كلمة المرور</label>
        <input type="password" wire:model.lazy='confirm_password' id="confirm_password" class="form-control" placeholder="أعد كلمة المرور">
        @error('confirm_password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="row-btn">
        <button type="submit" class="btn btn-block">حفظ التغييرات</button>
    </div>


</form>

