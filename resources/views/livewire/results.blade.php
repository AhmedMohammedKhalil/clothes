@if($prod == [])
@else
    <div class="pt-product-listing row">
        @foreach ($prod as $product)
            <div class="col-6 col-md-4 pt-col-item">
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
                                    <a href="{{ route('shop.showProduct',['id' => $product->id,'page_type' => $page_type,'content' => $content,'page' => 'shop']) }}" class="pt-btn-quickview d-block" data-tooltip="عرض" data-tposition="left">
                                        <svg><use xlink:href="#icon-quick_view"></use></svg>
                                    </a>
                                </div>
                                <a href="{{ route('shop.showProduct',['id' => $product->id,'page_type' => $page_type,'content' => $content,'page' => 'shop']) }}">
                                    <div class="pt-img">
                                        <picture>
                                            <img class="lazyload" src="
                                            @if($product->imageCoverOne()->first() != null)
                                                {{ asset('images/products/'.$product->id.'/covers/cover-1/'.$product->imageCoverOne()->first()->image_url) }}
                                            @else
                                                {{ asset('images/products/categories/'.$product->category_name.'/cover-1.jpg') }}

                                            @endif
                                            " alt="image">
                                        </picture>
                                    </div>
                                </a>
                            </div>
                            <div class="pt-description justify-center">
                                <div class="pt-col ">

                                    <h2 class="pt-title"><a href="{{ route('shop.showProduct',['id' => $product->id,'page_type' => $page_type,'content' => $content,'page' => 'shop']) }}">{{ $product->name }}</a></h2>
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
                                    <div style="margin-top:10px">
                                        @auth('user')
                                            @livewire('user.add-order', ['p_id' => $product->id], key('cart_'.$product->id))
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        @endforeach
    </div>
@endif
