<form id="login-form" class="form-default form-layout-01" wire:submit.prevent='add'>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="form-group">
        <input type="number" step="1" min="1" placeholder="الكمية" wire:model.lazy='qty' class="form-control"/>
        @error('qty') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="row-btn">
        <button type="submit" class="btn btn-block">أضف الى العربة</button>
    </div>
</form>
