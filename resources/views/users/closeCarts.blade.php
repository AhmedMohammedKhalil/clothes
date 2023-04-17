@extends('users.layout')
@section('section')

    <main id="pt-pageContent">
        <div class="container-indent">
            <div class="container">
                <h1 class="pt-title-subpages noborder">  المشتريات</h1>
                <div class="pt-shopcart-page ">
                    <div class="pt-item ">
                        <div class="pt-item-description ">
                            <div class="pt-col">
                                <h6 class="pt-title">#</a></h6>
                            </div>
                        </div>
                        <div class="pt-item-description ">
                            <div class="pt-col">
                                <h6 class="pt-title"><a href="#">عدد المشتريات</a></h6>
                            </div>
                        </div>
                        <div class="pt-item-description ">
                            <div class="pt-col">
                                <h6 class="pt-title"><a href="#">الاجمالي</a></h6>
                            </div>
                        </div>
                        <div class="pt-item-description ">
                            <div class="pt-col">
                                <h6 class="pt-title"><a href="#">اعدادات</a></h6>
                            </div>
                        </div>
                    </div>
                @if($carts->count() == 0)
                    <div class="pt-item">
                        <h3>لا يوجد طلبات</h3>
                    </div>
                @endif

                @if($carts->count() > 0)
                 @foreach ($carts as $cart)
                    <div class="pt-item ">
                        <div class="pt-item-description ">
                            <div class="pt-col">
                                <h6 class="pt-title"><a href="#">{{ $loop->iteration }}</a></h6>
                            </div>
                        </div>

                        <div class="pt-item-description ">
                            <div class="pt-col">
                                <h6 class="pt-title"><a href="#">  عدد المشتريات :{{$cart->orders->count()}}</a></h6>
                            </div>
                        </div>
                        <div class="pt-item-description ">
                            <div class="pt-col">
                                <h6 class="pt-title"><a href="#">الاجمالي: <strong>{{ $cart->total }} دينار </a></h6>
                            </div>
                        </div>

                        <div class="pt-item-btn p-5">
                            <a href="{{ route('user.orders',['id' => $cart->id]) }}" class="pt-btn js-remove-item">
							<svg width="24" height="24" viewBox="0 0 24 24">
								<use xlink:href="#icon-eye"></use>
							</svg>
						    </a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </main>

@endsection
