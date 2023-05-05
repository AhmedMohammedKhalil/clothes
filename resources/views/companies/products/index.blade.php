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

    @media (min-width: 1025px) {
            .modal .modal-body:not(.noindent) {
                padding: 0px
            }
        }
        .btn:first-child:hover {
            color: white;
            background-color: black;
            border-color: black;
        }
        .pt-image-box {
            overflow: hidden;
            border-radius: 10px 10px 0 0
        }
         .pt-image-box .buy{
            width: 40%;
            left: 50%;
            transform: translateX(-50%);
            bottom: -50px;
            position: absolute;
            z-index: 6666;
            transition: all 0.5s;
         }

         .pt-image-box .btn{
            padding: 20px;
            border-radius: 10px
         }

         .pt-product:hover .buy{
            bottom: 10px;
         }

         .pt-product {
            padding: 10px;
            transition: all 0.5s;
            border-radius: 10px
         }
         .pt-product:hover {
            transform: translateY(-20px);
            box-shadow: 0px 1px 10px gray
         }

        .pt-img img, .pt-img-roll-over img {
            width:100% !important;
            height: 316px !important;
        }

        #smallGallery a , #smallGallery img{
            width:100% !important;
            height: 65px !important;
        }

        .zoom-product{
            width: 100% !important;
            height: 372px !important;
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

        li span {
            display: inline-block;
        }

        .pt-col:first-child {
            flex:none
        }

        .pt-col {
            flex:auto
        }



</style>
@endpush
@section('section')
<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>
<div class="row justify-content-center">
    <a href="{{ route('company.products.addProduct') }}" class="btn mb-3 btn-add" style="width: 200px">
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
                    <div class="pt-product" style="background:white">
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
                                <div id="product{{ $product->id }}" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @if($product->imageNotCovers() != null)
                                            @foreach($product->imageNotCovers() as $image)
                                                <div class="carousel-item @if($loop->index == 0) active @endif">
                                                    <img src="{{ asset('images/products/'.$product->id.'/imgs/'.$image->id.'/'.$image->image_url) }}" class="d-block w-100" alt="#">
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="carousel-item active">
                                                <img src="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                            </div>
                                        @endif
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#product{{ $product->id }}" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#product{{ $product->id }}" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </a>
                            <div class="buy">
                                <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#Modal-{{ $product->id }}">عرض سريع</button>
                            </div>
                        </div>
                        <div class="pt-description justify-center">
                            <div class="pt-col ">
                                <h2 class="pt-title"><a href="{{ route('company.products.showProduct',['id' => $product->id]) }}">{{ $product->name }}</a></h2>
                            </div>
                            <div class="pt-col ">
                                <div class="pt-price d-block">
                                    @if($product->offer != 0)
                                    <span class="old-price" style="padding-left: 10px;text-decoration: line-through 2px #305f9c;">{{ $product->price }} دينار</span>
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

@foreach ($products as $product)
<div class="modal" id="Modal-{{ $product->id }}">
    <div class="modal-dialog">
    <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header" style="padding: 10px">
        <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body" style="padding: 50px 0">
            <div class="container container-fluid-mobile">
                <div class="row">
                    <div class="col-6 hidden-xs">
                        <div id="modalproduct{{ $product->id }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                @if($product->imageNotCovers() != null)
                                    @foreach($product->imageNotCovers() as $image)
                                        <button type="button" data-bs-target="#modalproduct{{ $product->id }}" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->index == 0) active @endif" aria-current="@if($loop->index == 0) true @endif" aria-label="@if($loop->index == 0) slide 1 @endif"></button>
                                    @endforeach
                                @else
                                    <button type="button" data-bs-target="#modalproduct{{ $product->id }}" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#modalproduct{{ $product->id }}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#modalproduct{{ $product->id }}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                @endif


                            </div>
                            <div class="carousel-inner">
                                @if($product->imageNotCovers() != null)
                                    @foreach($product->imageNotCovers() as $image)
                                        <div class="carousel-item @if($loop->index == 0) active @endif">
                                            <img src="{{ asset('images/products/'.$product->id.'/imgs/'.$image->id.'/'.$image->image_url) }}" class="d-block w-100" alt="#">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                    </div>
                                @endif
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#modalproduct{{ $product->id }}" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#modalproduct{{ $product->id }}" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="pt-product-single-info">
                            <div class="">
                                <table class="pt-table-shop-02">
                                    <tbody>
                                        <tr>
                                            <td>إسم المنتج</td>
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>الشركة</td>
                                            <td>{{ $product->company->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>النوع</td>
                                            <td>{{ $product->category->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>الخامة</td>
                                            <td>{{ $product->material->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>المقاس</td>
                                            <td>{{ $product->size->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>اللون</td>
                                            <td>{{ $product->color }}</td>
                                        </tr>
                                        <tr>
                                            <td>تفاصيل</td>
                                            <td>{!! nl2br($product->details) !!}</td>
                                        </tr>
                                        <tr>
                                            <td>السعر</td>
                                            <td>
                                                @if($product->offer != 0)
                                                    <span class="old-price" style="padding-left: 10px;text-decoration: line-through 2px #305f9c;">{{ $product->price }} دينار</span>
                                                    <span class="new-price">{{ $product->offer }} دينار</span>
                                                @else
                                                    <span class="new-price">{{ $product->price }} دينار</span>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

    </div>
    </div>
</div>
@endforeach

@endsection
