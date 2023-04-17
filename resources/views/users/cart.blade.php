@extends('users.layout')
@section('section')

    <main id="pt-pageContent">
        <div class="container-indent">
            <div class="container">
                <h1 class="pt-title-subpages noborder"> عربة التسوق</h1>
                <div class="pt-shopcart-page">

                @if($cart->orders->count() == 0)
                    <div class="pt-item">
                        <h3>لا يوجد مشتريات</h3>
                    </div>
                @endif

                 @foreach ($cart->orders as $order)
                    <div class="pt-item">
                        <div class="pt-item-img">
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

                        <div class="pt-item-description">
                            <div class="pt-col">
                                <h6 class="pt-title"><a href="#"> اسم المنتج :{{$order->product->name}}</a></h6>
                                <ul class="pt-add-info">
                                    <li>اسم الشركة : <strong>{{ $order->product->company->name }}</strong></li>
                                    <li>الكمية: <strong>{{ $order->qty }}</strong></li>
                                    <li>سعر المنتج : <strong>{{ $order->price}} دينار  </strong></li>
                                </ul>
                            </div>
                            <div class="pt-col">
                                <div class="pt-price" style="color:black !important;">الإجمالى</div>
                                <div class="pt-price">{{ $order->price * $order->qty }} دينار</div>
                            </div>

                        </div>

                        <div class="pt-item-btn p-5">
                            <a href="{{ route('user.order.del',['id' => $order->id]) }}" class="pt-btn js-remove-item">
							<svg width="24" height="24" viewBox="0 0 24 24">
								<use xlink:href="#icon-remove"></use>
							</svg>
						    </a>
                        </div>
                    </div>
                    @endforeach

                    <div class="row text-center">
                            <div class="col-12">
                                    <div class="m-5">
                                        <h4>إجمالى الفاتورة</h4>
                                        <h4>{{ round($cart->total, 2) }} دينار  </h4>
                                        @if($cart->orders->count() > 0)
                                            <a class="btn btn-success" href="{{ route('user.checkout') }}">تقفيل الفاتورة</a>
                                        @endif
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
