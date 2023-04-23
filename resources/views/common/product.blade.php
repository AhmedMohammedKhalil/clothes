<div class="container-indent pt-offset-md-productsingle">
    <!-- mobile product slider  -->
    <div id="js-init-mobile-productsingle" class="visible-xs arrow-location-center slick-animated-show-js">
        @if($product->imageCoverOne()->first() != null)
            <div><img src="{{ asset('images/products/'.$product->id.'/covers/cover-1/'.$product->imageCoverOne()->first()->image_url) }}" alt=""></div>
        @else
            <div><img src="{{ asset('images/products/categories/'.$product->category_name.'/cover-1.jpg')}}"></div>
            {{-- <div><img src="{{ asset('images/products/covers/cover_1.jpg') }}" alt=""></div> --}}
        @endif

        @if($product->imageCoverTwo()->first() != null)
            <div><img src="{{ asset('images/products/'.$product->id.'/covers/cover-2/'.$product->imageCoverTwo()->first()->image_url) }}" alt=""></div>
        @else
            <div><img src="{{ asset('images/products/categories/'.$product->category_name.'/cover-2.jpg')}}"></div>
            {{-- <div><img src="{{ asset('images/products/covers/cover_2.jpg') }}" alt=""></div> --}}
        @endif

        @if($product->imageNotCovers != null)
            @foreach($product->imageNotCovers() as $image)
                <div><img src="{{ asset('images/products/'.$product->id.'/imgs/'.$image->id.'/'.$image->image_url) }}" alt=""></div>
            @endforeach
        @else
            <div><img src="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}"></div>
            {{-- <div><img src="{{ asset('images/products/imgs/image1.jpg') }}" alt=""></div>
            <div><img src="{{ asset('images/products/imgs/image2.jpg') }}" alt=""></div>
            <div><img src="{{ asset('images/products/imgs/image3.jpg') }}" alt=""></div> --}}

        @endif
    </div>
    <!-- /mobile product slider  -->
    <div class="container container-fluid-mobile">
        <div class="row">
            <div class="col-6 hidden-xs">
                <div class="pt-product-vertical-layout">
                    <div class="pt-product-single-img no-zoom">
                        <div>
                            @if($product->imageCoverOne()->first() != null)
                                <img class="zoom-product" src='{{ asset('images/products/'.$product->id.'/covers/cover-1/'.$product->imageCoverOne()->first()->image_url) }}' data-zoom-image="{{ asset('images/products/'.$product->id.'/covers/cover-1/'.$product->imageCoverOne()->first()->image_url) }}" alt="">
                            @else
                                <img class="zoom-product" src="{{ asset('images/products/categories/'.$product->category_name.'/cover-1.jpg')}}" data-zoom-image="{{ asset('images/products/categories/'.$product->category_name.'/cover-1.jpg')}}">
                                {{-- <img class="zoom-product" src='{{ asset('images/products/covers/cover_1.jpg') }}' data-zoom-image="{{ asset('images/products/covers/cover_1.jpg') }}" alt=""> --}}
                            @endif
                            <button class="pt-btn-zoom js-btnzoom-slider">
                            <svg>
                                <use xlink:href="#icon-quick_view"></use>
                           </svg>
                        </button>
                        </div>
                    </div>
                    <div class="pt-product-single-carousel-vertical">
                        <ul id="smallGallery" class="pt-slick-button-vertical slick-animated-show">
                            @if($product->imageCoverOne()->first() != null)
                                <li><a class="zoomGalleryActive" href="#" data-image="{{ asset('images/products/'.$product->id.'/covers/cover-1/'.$product->imageCoverOne()->first()->image_url) }}" data-zoom-image="{{ asset('images/products/'.$product->id.'/covers/cover-1/'.$product->imageCoverOne()->first()->image_url) }}"><img src="{{ asset('images/products/'.$product->id.'/covers/cover-1/'.$product->imageCoverOne()->first()->image_url) }}" alt=""></a></li>
                            @else
                                <li><a class="zoomGalleryActive" href="#" data-image="{{ asset('images/products/categories/'.$product->category_name.'/cover-1.jpg')}}" data-zoom-image="{{ asset('images/products/categories/'.$product->category_name.'/cover-1.jpg')}}"><img src="{{ asset('images/products/categories/'.$product->category_name.'/cover-1.jpg')}}" alt=""></a></li>

                                {{-- <li><a class="zoomGalleryActive" href="#" data-image="{{ asset('images/products/covers/cover_1.jpg') }}" data-zoom-image="{{ asset('images/products/covers/cover_1.jpg') }}"><img src="{{ asset('images/products/covers/cover_1.jpg') }}" alt=""></a></li> --}}
                            @endif
                            @if($product->imageCoverTwo()->first() != null)
                                <li><a href="#" data-image="{{ asset('images/products/'.$product->id.'/covers/cover-2/'.$product->imageCoverTwo()->first()->image_url) }}" data-zoom-image="{{ asset('images/products/'.$product->id.'/covers/cover-2/'.$product->imageCoverTwo()->first()->image_url) }}"><img src="{{ asset('images/products/'.$product->id.'/covers/cover-2/'.$product->imageCoverTwo()->first()->image_url) }}" alt=""></a></li>
                            @else
                                <li><a class="zoomGalleryActive" href="#" data-image="{{ asset('images/products/categories/'.$product->category_name.'/cover-2.jpg')}}" data-zoom-image="{{ asset('images/products/categories/'.$product->category_name.'/cover-2.jpg')}}"><img src="{{ asset('images/products/categories/'.$product->category_name.'/cover-2.jpg')}}" alt=""></a></li>
                                {{-- <li><a href="#" data-image="{{ asset('images/products/covers/cover_2.jpg') }}" data-zoom-image="{{ asset('images/products/covers/cover_2.jpg') }}"><img src="{{ asset('images/products/covers/cover_2.jpg') }}" alt=""></a></li> --}}
                            @endif

                            @if($product->imageNotCovers != null)
                                @foreach($product->imageNotCovers() as $image)
                                    <li><a href="#" data-image="{{ asset('images/products/'.$product->id.'/imgs/'.$image->id.'/'.$image->image_url) }}" data-zoom-image="{{ asset('images/products/'.$product->id.'/imgs/'.$image->id.'/'.$image->image_url) }}"><img src="{{ asset('images/products/'.$product->id.'/imgs/'.$image->id.'/'.$image->image_url) }}" alt=""></a></li>
                                @endforeach
                            @else
                                <li><a class="zoomGalleryActive" href="#" data-image="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}" data-zoom-image="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}"><img src="{{ asset('images/products/categories/'.$product->category_name.'/image.jpg')}}" alt=""></a></li>
                                {{-- <li><a href="#" data-image="{{ asset('images/products/imgs/image1.jpg') }}" data-zoom-image="{{ asset('images/products/imgs/image1.jpg') }}"><img src="{{ asset('images/products/imgs/image1.jpg') }}" alt=""></a></li>
                                <li><a href="#" data-image="{{ asset('images/products/imgs/image2.jpg') }}" data-zoom-image="{{ asset('images/products/imgs/image2.jpg') }}"><img src="{{ asset('images/products/imgs/image2.jpg') }}" alt=""></a></li>
                                <li><a href="#" data-image="{{ asset('images/products/imgs/image3.jpg') }}" data-zoom-image="{{ asset('images/products/imgs/image3.jpg') }}"><img src="{{ asset('images/products/imgs/image3.jpg') }}" alt=""></a></li> --}}

                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="pt-product-single-info">
                    <h1 class="pt-title">{{ $product->name }}</h1>
                    <div class="pt-price">
                        @if($product->offer != 0)
                            <span class="old-price" style="font-size: 36px;margin:20px 0">{{ $product->price }} دينار</span> <br>
                            <span class="new-price">{{ $product->offer }} دينار</span>
                        @else
                            <span class="new-price">{{ $product->price }} دينار</span>
                        @endif
                    </div>
                    <div class="pt-add-info">
                        <ul>
                            <li>{{ $product->gender->name }}</li>
                            <li><span style="width: 100px;display:inline-block;color:black">الشركة </span>{{ $product->company->name }}</li>
                            <li><span style="width: 100px;display:inline-block;color:black">النوع </span>{{ $product->category->name }}</li>
                            <li><span style="width: 100px;display:inline-block;color:black">الخامة </span>{{ $product->material->name }}</li>
                            <li><span style="width: 100px;display:inline-block;color:black">المقاس </span>{{ $product->size->name }}</li>
                            <li><span style="width: 100px;display:inline-block;color:black">اللون </span>{{ $product->color }}</li>
                        </ul>
                    </div>
                    <div class="pt-col col-8" style="margin-top:10px">
                        @auth('user')
                            @livewire('user.add-order', ['p_id' => $product->id], key('cart_'.$product->id))
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@if($page == 'shop')
<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <div class="pt-block-title">
            <h4 class="pt-title">الملابس المقترحة لك</h4>
        </div>
        <div class="pt-product-listing row">
            @if($product->category->products->count() > 1)
                @foreach ($product->category->products as $p)
                    @include('common.products')
                @endforeach
            @elseif($product->company->products->count() > 1)
                @foreach ($product->company->products as $p)
                    @include('common.products')
                @endforeach
            @else
                <h5>لا يوجد ملابس متاحةالان</h5>
            @endif
        </div>
    </div>
</div>
@endif
