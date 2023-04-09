
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
        <label for="image">الصورة</label>
        <input type="file" wire:model='image' id="image" class="form-control" placeholder="">
        @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>




    <div class="row-btn">
        <button type="submit" class="btn btn-block">حفظ التغييرات</button>
    </div>


</form>


