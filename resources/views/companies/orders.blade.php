@extends('companies.layout')
@section('section')
<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>

<div class=" justify-content-center">

    <div class="pt-item-description text-center row p-5">
        <div class="pt-col col-1">
            <p class="pt-title"><a href="#">#</a></p>
        </div>
        <div class="pt-col col-2">
            <p class="pt-title"><a href="#">صورة المنتج</a></p>
        </div>
        <div class="pt-col col-2">
            <p class="pt-title"><a href="#">اسم المنتج</a></p>
        </div>
        <div class="pt-col col-2">
            <p class="pt-title"><a href="#">اسم المشترى</a></p>
        </div>
        <div class="pt-col col-2">
            <p class="pt-title"><a href="#">سعر المنتج</a></p>
        </div>
        <div class="pt-col col-1">
            <p class="pt-title"><a href="#">الكمية</a></p>
        </div>
        <div class="pt-col col-2">
            <p class="pt-title"><a href="#">الاجمالى</a></p>
        </div>
    </div>
    <div class="pt-shopcart-page">
        @if($orders->count() == 0)
        <div class="pt-item-description text-center row p-5">
            <div class="pt-col col-12">
                <p class="pt-title"> لا يوجد طلبات</p>
            </div>
        </div>
        @endif
        @foreach ($orders as $order)
            <div class="pt-item-description text-center row p-5">
                <div class="pt-col col-2">
                    <p class="pt-title"><a href="#">{{ $loop->iteration }}</a></p>
                </div>
                <div class="pt-item-img col-2">
                    <a href="#"><img src="
                                @if($order->product->images->count() > 0)
                                    @foreach($order->product->images as $image)
                                        @if($image->cover_name == 'cover_1')
                                        {{ asset('images/products/'.$order->product->id.'/covers/cover-1/'.$image->image_url) }}
                                        @endif
                                    @endforeach
                                @else
                                    {{ asset('images/products/covers/cover_1.jpg') }}
                                @endif
                                " alt=""></a>
                </div>
                <div class="pt-col col-2">
                    <p class="pt-title"><a href="#">{{ $order->product->name }}</a></p>
                </div>
                <div class="pt-col col-2">
                    <p class="pt-title"><a href="#">{{ $order->cart->user->name }}</a></p>
                </div>
                <div class="pt-col col-2">
                    <p class="pt-title"><a href="#"><br>{{ $order->product->price }} دينار  </a></p>
                </div>
                <div class="pt-col col-2">
                    <p class="pt-title"><a href="#"><br>{{ $order->qty }}</a></p>
                </div>
                <div class="pt-col col-2">
                    <p class="pt-title"><a href="#"><br>{{ $order->product->price * $order->qty }} دينار  </a></p>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
