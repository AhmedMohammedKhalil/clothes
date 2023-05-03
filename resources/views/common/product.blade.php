
<div class="container-indent pt-offset-md-productsingle">
    <div class="container container-fluid-mobile">
        <div class="row">
            <div class="col-6 hidden-xs">
                <div id="product{{ $product->id }}" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @if($product->imageNotCovers() != null)
                            @foreach($product->imageNotCovers() as $image)
                                <button type="button" data-bs-target="#product{{ $product->id }}" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->index == 0) active @endif" aria-current="@if($loop->index == 0) true @endif" aria-label="@if($loop->index == 0) slide 1 @endif"></button>
                            @endforeach
                        @else
                            <button type="button" data-bs-target="#product{{ $product->id }}" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#product{{ $product->id }}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#product{{ $product->id }}" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#product{{ $product->id }}" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#product{{ $product->id }}" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
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


