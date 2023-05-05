@extends('layouts.app')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

@push('css')
 <style>



        @media (min-width: 1025px) {
            .modal .modal-body:not(.noindent) {
                padding: 0px
            }
        }
        .products .btn:first-child:hover {
            color: white;
            background-color: black;
            border-color: black;
        }
        .products .pt-image-box {
            overflow: hidden;
            border-radius: 10px 10px 0 0
        }
         .products .pt-image-box .buy{
            width: 40%;
            left: 50%;
            transform: translateX(-50%);
            bottom: -50px;
            position: absolute;
            z-index: 6666;
            transition: all 0.5s;
         }

         .products .pt-image-box .btn{
            padding: 20px;
            border-radius: 10px
         }

         .products .pt-product:hover .buy{
            bottom: 10px;
         }

         .products .pt-product {
            padding: 10px;
            transition: all 0.5s;
            border-radius: 10px
         }
         .products .pt-product:hover {
            transform: translateY(-20px);
            box-shadow: 0px 1px 10px gray
         }

        .products .pt-img img, .pt-img-roll-over img {
            width:100% !important;
            height: 316px !important;
        }

        .products #smallGallery a , #smallGallery img{
            width:100% !important;
            height: 65px !important;
        }

        .products .zoom-product{
            width: 100% !important;
            height: 372px !important;
        }

        .products .pt-app-btn {
            background: white;
            padding:5px;
            border:1px solid black;
            border-radius:10px
        }

        .products .pt-product:hover .pt-app-btn{
            opacity: 90% !important;
        }

        .products li span {
            display: inline-block;
        }

        .products .pt-col:first-child {
            flex:none
        }

        .products .pt-col {
            flex:auto
        }




    #home-slide .carousel-caption{
        position: absolute;
        right: 15%;
        top: 50%;
        left: 15%;
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
        color: #fff;
        text-align: center;
        transform: translateY(-50%);
        background-color: #2b343fb2;
    }





    #home-slide .carousel-caption div {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 5%;
        right: 5%;
    }

    .btn:hover {
        color: white !important;
        background-color: black !important;
        border-color: black !important;
    }





        .slide-container{
        width: 100%;
        padding: 40px 0;
        }
        .slide-content{
        margin: 0 40px;
        overflow: hidden;
        border-radius: 25px;
        }
        .card{
            border-radius: 25px;
            background-color: #FFF;
        }
        .image-content,
        .card-content{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px 14px;
        }
        .image-content{
        position: relative;
        row-gap: 5px;
        padding: 25px 0;
        }

        .card-image{
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        background: #FFF;
        padding: 3px;
        }
        .card-image .card-img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #4070F4;
        }
        .name{
        font-size: 18px;
        font-weight: 500;
        color: #333;
        }
        .description{
        font-size: 14px;
        color: #707070;
        text-align: center;
        }
        .button{
        border: none;
        font-size: 16px;
        color: #FFF;
        padding: 8px 16px;
        background-color: #4070F4;
        border-radius: 6px;
        margin: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
        }
        .button:hover{
        background: #265DF2;
        }

        .swiper-navBtn{
        color: #6E93f7;
        transition: color 0.3s ease;
        }
        .swiper-navBtn:hover{
        color: #4070F4;
        }
        .swiper-navBtn::before,
        .swiper-navBtn::after{
        font-size: 35px;
        }
        .swiper-button-next{
        right: 0;
        }
        .swiper-button-prev{
        left: 0;
        }
        .
        @media screen and (max-width: 768px) {
            .slide-content{
                margin: 0 10px;
            }
            .swiper-navBtn{
                display: none;
            }
        }

        .swiper-wrapper {
            height: auto;
        }

        .card {
            overflow: hidden;
            border-radius: 10px 10px 0 0
        }
         .card .btn{
            width: 40%;
            left: 50%;
            transform: translateX(-50%);
            bottom: -50px;
            position: absolute;
            z-index: 6666;
            transition: all 0.5s;
         }

         .card .btn{
            padding: 20px;
            border-radius: 10px
         }

         .card:hover .btn{
            bottom: 10px;
         }









 </style>
@endpush

@section('content')
<div class="pt-offset-10 container-indent">
    <div id="home-slide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#home-slide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#home-slide" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#home-slide" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/slides/slide1.png') }}" class="d-block w-100" style ="height:90vh" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div>
                    <h2 style="color:white">ستايلات وملابس تناسب اطلالتك داخل المنزل وخارجه</h2>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slides/slide2.png') }}" class="d-block w-100" style ="height:90vh" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div>
                    <h2 style="color:white">تصاميم راقية واستثنائية للنساء</h2>
                    <a href="{{ route('shop',['page_type' => 'gender', 'content' => 'نسائى']) }}" class="btn">تسوقى الآن</a>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slides/slide3.png') }}" class="d-block w-100" style ="height:90vh" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div>
                    <h2 style="color:white">تشكيلات فريدة من نوعها للرجال</h2>
                    <a href="{{ route('shop',['page_type' => 'gender', 'content' => 'رجالى']) }}" class="btn">تسوق الأن</a>

                </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#home-slide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#home-slide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>




<!-- Top content -->
<div class="top-content">
    <div class="container-fluid">
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    @foreach ($companies as $c)
                    <div class="card swiper-slide">
                        <img src="{{ asset('images/companies/'.$c->id."/".$c->image) }}" style="height:200px" alt="" class="card-img">
                        <a href="{{ route('shop',['page_type' => 'company', 'content' => $c->name]) }}" class="btn">عرض المنتجات</a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
        </div>
    </div>
</div>






<div class="pt-offset-60 container-indent" style="margin-bottom: 300px">
    <div class="container">
        <div class="pt-parallax-list">
            <div class="pt-parallax-01">
                <div class="pt-img">
                    <div class="pt-img-main">
                        <div><img style="height:602px" src="{{ asset('images/slides/women-01.jpg') }}" class="js-init-parallax" data-orientation="up" data-overflow="true" alt=""></div>
                    </div>
                    <div class="pt-img-sub">
                        <div>
                            <img style="height:474px" src="{{ asset('images/slides/women-02.jpg') }}" class="js-init-parallax" data-orientation="down" data-overflow="true" alt="">
                        </div>
                    </div>
                </div>
                <div class="pt-description">
                    <div class="pt-title-02">ملابس نسائية</div>
                    <p>ملابس أنيقة لتتألقى فى جميع المناسبات</p>
                    <a href="{{ route('shop',['page_type' => 'gender', 'content' => 'نسائى']) }}" class="btn">تسوقى الآن</a>
                </div>
            </div>
            <div class="pt-parallax-01">
                <div class="pt-description">
                    <div class="pt-title-02">ملابس رجالية</div>
                    <p>ملابس رجالية مطرزة لإنقاتك طوال اليوم</p>
                    <a href="{{ route('shop',['page_type' => 'gender', 'content' => 'رجالى']) }}" class="btn">تسوق الآن</a>
                </div>
                <div class="pt-img">
                    <div class="pt-img-main" style="z-index:1">
                        <div><img style="height:474px"  src="{{ asset('images/slides/men-01.jpg') }}" class="js-init-parallax" data-orientation="down" data-overflow="true" alt=""></div>
                    </div>
                    <div class="pt-img-sub">
                        <div>
                            <img style="height:602px"  src="{{ asset('images/slides/men-02.jpg') }}" class="js-init-parallax" data-orientation="up" data-overflow="true" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pt-5 container-indent">
    <h1 class="pt-title-subpages noborder">أنواع الملابس</h1>
    <div class="top-content">
        <div class="container-fluid">
            <div class="slide-container-2 swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        @foreach ($categories as $c)
                        <div class="swiper-slide">
                            <a href="{{ route('shop',['page_type' => 'category', 'content' => $c->name]) }}" class="pt-promo-card-02">
                                <div class="image-box">
                                    <img style="height:400px" src="{{ asset("images/categories/".$c->id."/".$c->image) }}" alt="">
                                </div>
                                <div class="pt-description">
                                    <div class="pt-title">
                                    {{$c->name}}
                                    </div>
                                    <div class="btn btn-border">تسوق الآن</div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
            </div>
        </div>
    </div>
</div>


<div class="pt-5 container-indent products">
    <h1 class="pt-title-subpages noborder">الأكثر مبيعاً</h1>
    <div class="content-indent">
        <div class="pt-product-listing row">
            @foreach ($products as $product)
                <div class="col-6 col-md-4 pt-col-item">
                    <div class="pt-product" style="background:white">
                        <div class="pt-image-box">
                            <div class="pt-app-btn d-block">
                                <a href="{{ route('shop.showProduct',['id' => $product->id,'page_type' => 'home','page' => 'shop']) }}" class="pt-btn-quickview d-block" data-tooltip="عرض" data-tposition="left">
                                    <svg><use xlink:href="#icon-quick_view"></use></svg>
                                </a>
                            </div>
                            <a href="{{ route('shop.showProduct',['id' => $product->id,'page_type' => 'home','page' => 'shop']) }}">
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
                                <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#Modal-{{ $product->id }}">
                                    @auth('user')
                                    شراء سريع
                                    @else
                                    عرض سريع
                                    @endauth
                                </button>
                            </div>

                        </div>
                        <div class="pt-description justify-center">
                            <div class="pt-col ">
                                <ul class="pt-add-info">
                                    <li>{{ $product->company->name }}</li>
                                </ul>
                                <h2 class="pt-title"><a href="{{ route('shop.showProduct',['id' => $product->id,'page_type' => 'home','page' => 'shop']) }}">{{ $product->name }}</a></h2>
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
                                                            <img src="{{ asset('images/products/'.$product->id.'/imgs/'.$image->id.'/'.$image->image_url) }}" class="d-block" style="width: 300px;height:400px" alt="#">
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}" class="d-block" style="width: 300px;height:400px" alt="#">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}" class="d-block" style="width: 300px;height:400px" alt="#">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}" class="d-block" style="width: 300px;height:400px" alt="#">
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
                                                        <tr>
                                                            <td colspan="2">
                                                                @auth('user')
                                                                    @livewire('user.add-order', ['p_id' => $product->id], key('cart_'.$product->id))
                                                                @endauth
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
    </div>
</div>
@endsection

@push('js')
   <script>

   </script>
@endpush
