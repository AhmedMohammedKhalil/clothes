@extends('admins.layout')
@section('section')
<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>

<div class=" justify-content-center">

    <div class="pt-shopcart-page">
        @if($orders->count() == 0)
                                        <tr>
                                            <th colspan="6">لا يوجد طلبات</th>
                                        </tr>
                                    @endif
        @foreach ($orders as $order) 
            <div class="pt-item-description text-center row p-5">
                <div class="pt-col col-2">
                        <p class="pt-title"><a href="#">{{ $loop->iteration }}</a></p>
                </div>
                <div class="pt-item-img">
                    <a href="#">
                        @if($order->cart->user->image)
                                <img src="{{ asset('images/users/'.$order->cart->user->id.'/'.$order->cart->user->image) }}" alt="" style="width:100px;height:100px">
                            @else
                                <img src="{{ asset('images/users/about-img-02.jpg') }}" alt="" style="width:100px;height:100px">
                        @endif
                    </a>
                </div>  
                
                <div class="pt-col col-2">
                    <p class="pt-title"><a href="#">{{ $order->product->name }}</a></p>
                </div>
                <div class="pt-col col-2">
                    <p class="pt-title"><a href="#">سعر المنتج:<br>{{ $order->product->price }} دينار  </a></p>
                </div>
                <div class="pt-col col-2">
                    <p class="pt-title"><a href="#">الكمية:<br>{{ $order->qty }}</a></p>
                </div>
                <div class="pt-col col-2">
                    <p class="pt-title"><a href="#"> الاجمالي:<br>{{ $order->product->price * $order->qty }} دينار  </a></p>
                </div>
            </div>
        @endforeach

    </div>
</div>

@endsection
