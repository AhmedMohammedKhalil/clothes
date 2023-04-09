
<form id="login-form" class="form-default form-layout-01" wire:submit.prevent='add'>
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



    <div class="row-btn">
        <button type="submit" class="btn btn-block">أضف الأن</button>
    </div>


</form>


