@if($product->id != $p->id)
    <div class="col-6 col-md-4 pt-col-item">
        <div class="pt-product" style="background:white">
            <div class="pt-image-box">
                <div class="pt-image-box">
                    <div class="pt-app-btn d-block">
                        <a href="{{ route('shop.showProduct',['id' => $p->id,'page_type' => $page_type,'content' => $content,'page' => 'shop']) }}" class="pt-btn-quickview d-block" data-tooltip="عرض" data-tposition="left">
                            <svg><use xlink:href="#icon-quick_view"></use></svg>
                        </a>
                    </div>
                    <a href="{{ route('shop.showProduct',['id' => $p->id,'page_type' => $page_type,'content' => $content,'page' => 'shop']) }}">
                        <div id="product{{ $p->id }}-recommendation" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                @if($p->imageNotCovers != null)
                                    @foreach($p->imageNotCovers() as $image)
                                        <div class="carousel-item @if($loop->index == 0) active @endif">
                                            <img src="{{ asset('images/products/'.$p->id.'/imgs/'.$image->id.'/'.$image->image_url) }}" class="d-block w-100" alt="#">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/products/categories/'.$p->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/products/categories/'.$p->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/products/categories/'.$p->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                    </div>
                                @endif
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#product{{ $p->id }}-recommendation" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#product{{ $p->id }}-recommendation" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </a>
                    @auth('user')
                    <div class="buy">
                        <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#Modal-{{ $p->id }}">شراء سريع</button>
                    </div>
                    @endauth
                </div>
            </div>
            <div class="pt-description justify-center">
                <div class="pt-col ">
                    <ul class="pt-add-info">
                        <li>{{ $p->company->name }}</li>
                    </ul>
                    <h2 class="pt-title"><a href="{{ route('shop.showProduct',['id' => $p->id,'page_type' => $page_type,'content' => $content,'page' => 'shop']) }}">{{ $p->name }}</a></h2>
                </div>
                <div class="pt-col ">
                    <div class="pt-price d-block">
                        @if($p->offer != 0)
                        <span class="old-price" style="padding-left: 10px;text-decoration: line-through 2px #305f9c;">{{ $p->price }} دينار</span>
                        <span class="new-price">{{ $p->offer }} دينار</span>
                        @else
                            <span class="new-price">{{ $p->price }} دينار</span>
                        @endif
                    </div>
                    {{-- <div style="margin-top:10px">
                        @auth('user')
                            @livewire('user.add-order', ['p_id' => $p->id], key('cart_'.$p->id))
                        @endauth
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="Modal-{{ $p->id }}">
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
                            <div id="modalproduct{{ $p->id }}" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @if($p->imageNotCovers != null)
                                        @foreach($p->imageNotCovers() as $image)
                                            <button type="button" data-bs-target="#modalproduct{{ $p->id }}" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->index == 0) active @endif" aria-current="@if($loop->index == 0) true @endif" aria-label="@if($loop->index == 0) slide 1 @endif"></button>
                                        @endforeach
                                    @else
                                        <button type="button" data-bs-target="#modalproduct{{ $p->id }}" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modalproduct{{ $p->id }}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modalproduct{{ $p->id }}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    @endif


                                </div>
                                <div class="carousel-inner">
                                    @if($p->imageNotCovers != null)
                                        @foreach($p->imageNotCovers() as $image)
                                            <div class="carousel-item @if($loop->index == 0) active @endif">
                                                <img src="{{ asset('images/products/'.$p->id.'/imgs/'.$image->id.'/'.$image->image_url) }}" class="d-block w-100" alt="#">
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="carousel-item active">
                                            <img src="{{ asset('images/products/categories/'.$p->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/products/categories/'.$p->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/products/categories/'.$p->category_name.'/image.jpg')}}" class="d-block w-100" alt="#">
                                        </div>
                                    @endif
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#modalproduct{{ $p->id }}" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#modalproduct{{ $p->id }}" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pt-product-single-info">
                                <h1 class="pt-title">{{ $p->name }}</h1>
                                <div class="pt-price">
                                    @if($p->offer != 0)
                                        <span class="old-price" style="font-size: 36px;margin:20px 0">{{ $p->price }} دينار</span> <br>
                                        <span class="new-price">{{ $p->offer }} دينار</span>
                                    @else
                                        <span class="new-price">{{ $p->price }} دينار</span>
                                    @endif
                                </div>
                                <div class="pt-add-info">
                                    <ul>
                                        <li>{{ $p->gender->name }}</li>
                                        <li><span style="width: 100px;display:inline-block;color:black">الشركة </span>{{ $p->company->name }}</li>
                                        <li><span style="width: 100px;display:inline-block;color:black">النوع </span>{{ $p->category->name }}</li>
                                        <li><span style="width: 100px;display:inline-block;color:black">الخامة </span>{{ $p->material->name }}</li>
                                        <li><span style="width: 100px;display:inline-block;color:black">المقاس </span>{{ $p->size->name }}</li>
                                        <li><span style="width: 100px;display:inline-block;color:black">اللون </span>{{ $p->color }}</li>
                                    </ul>
                                </div>
                                <div class="pt-col col-8" style="margin-top:10px">
                                    @auth('user')
                                        @livewire('user.add-order', ['p_id' => $p->id], key('cart_'.$p->id))
                                    @endauth
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
@endif
