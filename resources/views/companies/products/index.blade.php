@extends('companies.layout')
@push('css')
<style>
    .pt-product .pt-description .pt-title a {
        font-size: 18px;
        font-weight: bold !important;
    }

    .pt-img img, .pt-img-roll-over img {
        width:246px !important;
        height: 316px !important;
    }

    .pt-app-btn {
        background: white;
        padding:5px;
        border:1px solid black;
        border-radius:10px
    }

    .pt-product:hover .pt-app-btn{
        opacity: 90% !important;
    }

</style>
@endpush
@section('section')
<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>
<div class="row justify-content-center">
    <a href="{{ route('company.products.addProduct') }}" class="btn mb-3">
    <div class="pt-icon">
        <svg>
            <use xlink:href="#icon_add"></use>
        </svg>
    </div>
    <span class="pt-text">إضافة منتج جديد</span>
</a>
</div>

<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <div class="row arrow-location-center-02 pt-layout-product-item" style="margin: 40px 0px">
            @foreach ($products as $product)
                <div class="col-6 col-md-6 col-lg-4 col-xl-custom-4">
                    <div class="pt-product" style="background:white" data-rollover="

                    @if($product->imageCoverTwo()->first() != null)
                        {{ asset('images/products/'.$product->id.'/covers/cover-2/'.$product->imageCoverTwo()->first()->image_url) }}
                    @else
                        {{ asset('images/products/categories/'.$product->category_name.'/cover-2.jpg') }}

                        {{-- {{ asset('images/products/covers/cover_2.jpg') }} --}}
                    @endif
                    ">
                        <div class="pt-image-box">
                            <div class="pt-app-btn d-block">
                                <a href="{{ route('company.products.showProduct',['id' => $product->id]) }}" class="pt-btn-quickview d-block" data-tooltip="عرض" data-tposition="left">
                                    <svg><use xlink:href="#icon-quick_view"></use></svg>
                                </a>
                                <a href="{{ route('company.products.editProduct',['id' => $product->id]) }}" class="pt-btn-edit d-block" data-tooltip="تعديل" data-tposition="left">
                                    <svg><use xlink:href="#icon-edit"></use></svg>
                                    <svg><use xlink:href="#icon-edit-add"></use></svg>
                                </a>
                                @if($product->orders->count() == 0)
                                    <a href="{{ route('company.products.deleteProduct',['id' => $product->id]) }}" class="pt-btn-remove d-block" data-tooltip="حذف" data-tposition="left">
                                        <svg><use xlink:href="#icon-remove"></use></svg>
                                        <svg><use xlink:href="#icon-remove-add"></use></svg>
                                    </a>
                                @endif
                            </div>
                            <a href="{{ route('company.products.showProduct',['id' => $product->id]) }}">
                                <div class="pt-img">
                                    <picture>
                                        <img class="lazyload" src="
                                        @if($product->imageCoverOne()->first() != null)
                                            {{ asset('images/products/'.$product->id.'/covers/cover-1/'.$product->imageCoverOne()->first()->image_url) }}
                                        @else
                                            {{ asset('images/products/categories/'.$product->category_name.'/cover-1.jpg') }}

                                            {{-- {{ asset('images/products/covers/cover_1.jpg') }} --}}
                                        @endif
                                        " alt="image">
                                    </picture>
                                </div>
                            </a>
                        </div>
                        <div class="pt-description justify-center">
                            <div class="pt-col ">

                                <h2 class="pt-title"><a href="{{ route('company.products.showProduct',['id' => $product->id]) }}">{{ $product->name }}</a></h2>
                                <ul class="pt-add-info">
                                    <li>{{ $product->gender->name }}</li>
                                    <li><span style="width: 100px">الشركة </span>{{ $product->company->name }}</li>
                                    <li><span style="width: 100px">النوع </span>{{ $product->category->name }}</li>
                                    <li><span style="width: 100px">الخامة </span>{{ $product->material->name }}</li>
                                    <li><span style="width: 100px">المقاس </span>{{ $product->size->name }}</li>
                                    <li><span style="width: 100px">اللون </span>{{ $product->color }}</li>
                                </ul>
                            </div>
                            <div class="pt-col ">
                                <div class="pt-price d-block">
                                    @if($product->offer != 0)
                                    <span class="old-price">{{ $product->price }} دينار</span> <br>
                                    <span class="new-price">{{ $product->offer }} دينار</span>
                                    @else
                                        <span class="new-price">{{ $product->price }} دينار</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
