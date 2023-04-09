@extends('admins.layout')
@section('section')
<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>
<div class="row justify-content-center">
<a href="{{ route('admin.materials.addMaterial') }}" class="btn mb-3">
    <div class="pt-icon">
        <svg>
            <use xlink:href="#icon_add"></use>
        </svg>
    </div>
    <span class="pt-text">إضافة خامة جديدة</span>
</a>
<div class="pt-shopcart-page">
    @foreach ($materials as $material)
    <div class="pt-item">
        {{-- <div class="pt-item-img">
            <a href="#">
                @if($material->image != null)
                    <img style="width:60%;height:200px" src="{{ asset("images/materials/".$material->id."/".$material->image) }}" alt="صورة البروفايل">
                @else
                    <img style="width:60%;height:200px" src="{{ asset('images/materials/about-img-02.jpg') }}" alt="">
                @endif
            </a>
        </div> --}}
        <div class="pt-item-description text-center">
            <div class="pt-col">
                <h6 class="pt-title"><a href="#">{{ $material->name }}</a></h6>
            </div>
            <div class="pt-col">
                <div class="pt-item-btn">
                    <div class="row justify-content-center">
                        <a data-tooltip="تعديل" href="{{ route('admin.materials.editMaterial',['id' => $material->id]) }}" class="pt-btn js-edit-item pl-2">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#icon-edit"></use>
                            </svg>
                        </a>
                        <a data-tooltip="حذف" href="{{ route('admin.materials.deleteMaterial',['id' => $material->id]) }}" class="pt-btn js-remove-item">
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
