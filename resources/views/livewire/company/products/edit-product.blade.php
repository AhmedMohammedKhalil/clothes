
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
        <label for="category_id">نوع الملابس</label>
        <select  wire:model.lazy='category_id' id="category_id" placeholder="نوع الملابس" class="form-control">
            @foreach ($categories as $c)
                <option value="{{ $c->id }}" @if($c->id == $category_id) selected @endif>{{ $c->name }}</option>
            @endforeach
        </select>
        @error('category_id') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="material_id">خامة الملابس</label>
        <select  wire:model.lazy='material_id' id="material_id" placeholder="خامة الملابس" class="form-control">
            @foreach ($materials as $m)
                <option value="{{ $m->id }}"  @if($m->id == $material_id) selected @endif>{{ $m->name }}</option>
            @endforeach
        </select>
        @error('material_id') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="size_id">مقاس الملابس</label>
        <select  wire:model.lazy='size_id' id="size_id" placeholder="مقاس الملابس" class="form-control">
            @foreach ($sizes as $s)
                <option value="{{ $s->id }}" @if($s->id == $size_id) selected @endif>{{ $s->name }}</option>
            @endforeach
        </select>
        @error('size_id') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="gender_id">الجنس</label>
        <select  wire:model.lazy='gender_id' id="gender_id" placeholder="الجنس" class="form-control">
            @foreach ($genders as $g)
                <option value="{{ $g->id }}" @if($g->id == $gender_id) selected @endif>{{ $g->name }}</option>
            @endforeach
        </select>
        @error('gender_id') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>


    <div class="form-group">
        <label>سعر الملابس</label>
        <input type="number" step="0.01" min="0.01" placeholder="سعر الملابس" wire:model.lazy='price' class="form-control"/>
        @error('price') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label>سعر الملابس بعد العرض</label>
        <input type="number" step="0.0" min="0.0" placeholder="سعر الملابس بعد العرض" wire:model.lazy='offer' class="form-control"/>
        @error('offer') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label>لون الملابس</label>
        <input type="text" placeholder="لون الملابس" wire:model.lazy='color' class="form-control"/>
        @error('color') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="image1">الصورة الاولى</label>
        <input type="file" wire:model='image1' id="image1" class="form-control" placeholder="">
        @error('image1') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="image2">الصورة الثانية</label>
        <input type="file" wire:model='image2' id="image2" class="form-control" placeholder="">
        @error('image1') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="images">صور اخرى</label>
        <input type="file" wire:model='images' id="images" class="form-control" placeholder="" multiple>
        @error('images.*') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="image_opt">اختر طريقة لتغيير الصور الاخرى</label>
        <select  wire:model.lazy='image_opt' id="image_opt" placeholder="اختر طريقة لتغيير الصور الاخرى" class="form-control">
            <option value="0" selected>اختر طريقة لتغيير الصور الاخرى</option>
            <option value="1" @if($image_opt == 1) selected @endif>إضافة صور اخرى</option>
            <option value="2" @if($image_opt == 2) selected @endif>حذف الصور القديمة</option>
        </select>
        @error('image_opt') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="details">تفاصيل عن الملابس</label>
        <textarea name="details" class="form-control"  wire:model.lazy='details' id="details" rows="6" placeholder="تفاصيل عن الملابس"></textarea>
        @error('details') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>


    <div class="row-btn">
        <button type="submit" class="btn btn-block">حفظ التغييرات</button>
    </div>


</form>


