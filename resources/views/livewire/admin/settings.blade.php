<form id="login-form" class="form-default form-layout-01" wire:submit.prevent='edit'>
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
        <label for="image">صورة البروفايل</label>
        <input type="file" wire:model='image' id="image" class="form-control" placeholder="">
        @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="row-btn">
        <button type="submit" class="btn btn-block">حفظ التغييرات</button>
    </div>


    </form>


