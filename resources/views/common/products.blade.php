@if($product->id != $p->id)
    <div class="col-6 col-md-4 pt-col-item">
        <div class="pt-product" style="background:white" data-rollover="
                @if($p->images->count() > 0)
                    @foreach($p->images as $image)
                        @if($image->cover_name == 'cover_2')
                        {{ asset('images/products/'.$p->id.'/covers/cover-2/'.$image->image_url) }}
                        @endif
                    @endforeach
                @else
                    {{ asset('images/products/categories/'.$product->category_name.'/cover-2.jpg') }}

                    {{-- {{ asset('images/products/covers/cover_2.jpg') }} --}}
                @endif
                ">
                    <div class="pt-image-box">
                        <div class="pt-app-btn d-block">
                            <a href="{{ route('shop.showProduct',['id' => $p->id,'page_type' => $page_type,'content' => $content,'page' => 'shop']) }}" class="pt-btn-quickview d-block" data-tooltip="عرض" data-tposition="left">
                                <svg><use xlink:href="#icon-quick_view"></use></svg>
                            </a>
                        </div>
                        <a href="{{ route('shop.showProduct',['id' => $p->id,'page_type' => $page_type,'content' => $content,'page' => 'shop']) }}">
                            <div class="pt-img">
                                <picture>
                                    <img class="lazyload" src="
                                    @if($p->images->count() > 0)
                                        @foreach($p->images as $image)
                                            @if($image->cover_name == 'cover_1')
                                            {{ asset('images/products/'.$p->id.'/covers/cover-1/'.$image->image_url) }}
                                            @endif
                                        @endforeach
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

                            <h2 class="pt-title"><a href="{{ route('shop.showProduct',['id' => $p->id,'page_type' => $page_type,'content' => $content,'page' => 'shop']) }}">{{ $p->name }}</a></h2>
                            <ul class="pt-add-info">
                                <li>{{ $p->gender->name }}</li>
                                <li><span style="width: 100px;display:inline-block;color:black">الشركة </span>{{ $p->company->name }}</li>
                                <li><span style="width: 100px;display:inline-block;color:black">النوع </span>{{ $p->category->name }}</li>
                                <li><span style="width: 100px;display:inline-block;color:black">الخامة </span>{{ $p->material->name }}</li>
                                <li><span style="width: 100px;display:inline-block;color:black">المقاس </span>{{ $p->size->name }}</li>
                                <li><span style="width: 100px;display:inline-block;color:black">اللون </span>{{ $p->color }}</li>
                            </ul>
                        </div>
                        <div class="pt-col ">
                            <div class="pt-price d-block">
                                @if($p->offer != 0)
                                <span class="old-price">{{ $p->price }} دينار</span> <br>
                                <span class="new-price">{{ $p->offer }} دينار</span>
                                @else
                                    <span class="new-price">{{ $p->price }} دينار</span>
                                @endif
                            </div>
                        </div>
                        <div class="pt-col col-8" style="margin-top:10px">
                            @auth('user')
                                @livewire('user.add-order', ['p_id' => $p->id], key('cart_'.$p->id))
                            @endauth
                        </div>
                    </div>
                </div>
    </div>
@endif
