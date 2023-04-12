@extends('admins.layout')
@section('section')
<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>
<div class="row justify-content-center">
<a href="{{ route('admin.sizes.addSize') }}" class="btn mb-3">
    <div class="pt-icon">
        <svg>
            <use xlink:href="#icon_add"></use>
        </svg>
    </div>
    <span class="pt-text">إضافة مقاس جديد</span>
</a>
</div>
<div class="row justify-content-center">

<div class="pt-shopcart-page">
    @foreach ($sizes as $size)
    <div class="pt-item">
        {{-- <div class="pt-item-img">
            <a href="#">
                @if($size->image != null)
                    <img style="width:60%;height:200px" src="{{ asset("images/sizes/".$size->id."/".$size->image) }}" alt="صورة البروفايل">
                @else
                    <img style="width:60%;height:200px" src="{{ asset('images/sizes/about-img-02.jpg') }}" alt="">
                @endif
            </a>
        </div> --}}
        <div class="pt-item-description text-center">
            <div class="pt-col">
                <h6 class="pt-title"><a href="#">{{ $size->name }}</a></h6>
            </div>
            <div class="pt-col">
                <div class="pt-item-btn">
                    <div class="row justify-content-center">
                        <a data-tooltip="تعديل" href="{{ route('admin.sizes.editSize',['id' => $size->id]) }}" class="pt-btn js-edit-item pl-2">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#icon-edit"></use>
                            </svg>
                        </a>
                        @if (count($size->products) == 0)
                        <a data-tooltip="حذف" href="{{ route('admin.sizes.deleteSize',['id' => $size->id]) }}" class="pt-btn js-remove-item">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#icon-remove"></use>
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endforeach

</div>
</div>

@endsection
