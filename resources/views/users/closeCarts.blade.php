@extends('users.layout')
@push('css')
    <style>
        .pt-item-description {
            width:900px
        }
    </style>
@endpush
@section('section')

<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>

<div class="row justify-content-center">

    <div class="pt-shopcart-page">
        <div class="pt-item-description text-center row p-2">
            <div class="pt-col col-2">
                <p class="pt-title"><a href="#">#</a></p>
            </div>
            <div class="pt-col col-3">
                <p class="pt-title"><a href="#">عدد المشتريات</a></p>
            </div>
            <div class="pt-col col-4">
                <p class="pt-title"><a href="#">اجمالى المشتريات</a></p>
            </div>
            <div class="pt-col col-3">
                <p class="pt-title"><a href="#">الاعدادات</a></p>
            </div>
        </div>
        @if($carts->count() == 0)
        <div class="pt-item-description text-center row p-2">
            <div class="pt-col col-12">
                <p class="pt-title"> لا يوجد طلبات</p>
            </div>
        </div>
        @endif
        @foreach ($carts as $cart)
            <div class="pt-item-description text-center row p-2">
                <div class="pt-col col-2">
                        <p class="pt-title">{{ $loop->iteration }}</p>
                </div>
                <div class="pt-col col-3">
                    <p class="pt-title">{{$cart->orders->count()}}
                    </p>
                </div>

                <div class="pt-col col-4">
                    <p class="pt-title">{{$cart->total}}</p>
                </div>
                <div class="pt-col col-3">
                    <p class="pt-title">
                        <a href="{{ route('user.orders',['id' => $cart->id]) }}" class="pt-btn js-remove-item">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#icon-eye"></use>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
        @endforeach

    </div>
</div>





@endsection
