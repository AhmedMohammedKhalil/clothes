@extends('admins.layout')
@section('section')
<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>
<div class="row justify-content-center">
    <a href="{{ route('admin.categories.addCategory') }}" class="btn mb-3">
    <div class="pt-icon">
        <svg>
            <use xlink:href="#icon_add"></use>
        </svg>
    </div>
    <span class="pt-text">إضافة نوع ملابس جديد</span>
</a>
</div>
<div class="row justify-content-center">

<div class="pt-shopcart-page">
    @foreach ($categories as $category)
    <div class="pt-item">
        <div class="pt-item-img">
            <a href="#">
                @if($category->image != null)
                    <img style="width:60%;height:200px" src="{{ asset("images/categories/".$category->id."/".$category->image) }}" alt="صورة البروفايل">
                @else
                    <img style="width:60%;height:200px" src="{{ asset('images/companies/about-img-02.jpg') }}" alt="">
                @endif
            </a>
        </div>  
        <div class="pt-item-description text-center">
            <div class="pt-col">
                <h6 class="pt-title"><a href="#">{{ $category->name }}</a></h6>
            </div>
            <div class="pt-col">
                <div class="pt-item-btn">
                    <div class="row justify-content-center">
                        <a data-tooltip="تعديل" href="{{ route('admin.categories.editCategory',['id' => $category->id]) }}" class="pt-btn js-edit-item pl-2">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#icon-edit"></use>
                            </svg>
                        </a>
                        <a data-tooltip="حذف" href="{{ route('admin.categories.deleteCategory',['id' => $category->id]) }}" class="pt-btn js-remove-item">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#icon-remove"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endforeach

</div>
</div>

@endsection
