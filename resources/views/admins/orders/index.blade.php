@extends('admins.layout')
@section('section')
<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>

<div class="row justify-content-center">

<div class="pt-shopcart-page">
@if($orders->count() == 0)
                                    <tr>
                                        <th colspan="6">لا يوجد مبيعات</th>
                                    </tr>
                                @endif
    @foreach ($orders as $order)
    <div class="pt-item">
        <div class="pt-item-img">
            <a href="#">
               @if($order->cart->user->image)
                    <img src="{{ asset('images/users/'.$order->cart->user->id.'/'.$order->cart->user->image) }}" alt="" style="width:100px;height:100px">
                @else
                    <img src="{{ asset('images/users/default.jpg') }}" alt="" style="width:100px;height:100px">
                @endif
            </a>
        </div>  
        <div class="pt-item-description text-center">
            <div class="pt-col">
                <h6 class="pt-title"><a href="#">{{ $order->cart->user->name }}</a></h6>
            </div>
            <div class="pt-col">
                <h6 class="pt-title"><a href="#">{{ $order->product->name }}</a></h6>
            </div>
            <div class="pt-col">
                <h6 class="pt-title"><a href="#">{{ $order->product->price }} دينار كويتى </a></h6>
            </div>
            <div class="pt-col">
                <h6 class="pt-title"><a href="#">{{ $order->qty }} دينار كويتى </a></h6>
            </div>
            <div class="pt-col">
                <h6 class="pt-title"><a href="#">{{ $order->product->price * $order->qty }} دينار كويتى </a></h6>
            </div>
        </div>

    </div>
    @endforeach

</div>
</div>

@endsection
