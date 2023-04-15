@extends('layouts.app')

@section('content')
<div class="pt-offset-10 container-indent">
    <div class="container">
        <div class="mainSlider-layout">
            <div class="mainSliderSlick">
                <div class="slide">
                    <div class="img--holder">
                        <picture>
                            <source media="(min-width: )" srcset="{{  asset('images/slides/slider-01.jpg') }}">
                            <img src="{{ asset('images/slides/slider-01.jpg') }}" alt="">
                        </picture>
                    </div>
                    <div class="slide-content text-center">
                        <div class="pt-container" style="background: #cccccc73;border-radius: 66px;">
                            <div class="tp-caption1-wd-2">فى موقعنا المتميز<br>اكتشفو كل جديدنا فى عالم الموضة</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="pt-offset-60 container-indent" style="margin-bottom: 300px">
        <div class="container">
            <div class="pt-parallax-list">
                <div class="pt-parallax-01">
                    <div class="pt-img">
                        <div class="pt-img-main">
                            <div><img style="height:602px" src="{{ asset('images/slides/women-01.jpg') }}" class="js-init-parallax" data-orientation="up" data-overflow="true" alt=""></div>
                        </div>
                        <div class="pt-img-sub">
                            <div>
                                <img style="height:474px" src="{{ asset('images/slides/women-02.jpg') }}" class="js-init-parallax" data-orientation="down" data-overflow="true" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="pt-description">
                        <div class="pt-title-02">ملابس نسائية</div>
                        <p>فساتين أنيقة لتتألقى فى جميع المناسبات</p>
                        <a href="#" class="btn">تسوقى الآن</a>
                    </div>
                </div>
                <div class="pt-parallax-01">
                    <div class="pt-description">
                        <div class="pt-title-02">ملابس رجالية</div>
                        <p>جلاليب رجالية مطرزة لإنقاتك طوال اليوم</p>
                        <a href="#" class="btn">تسوق الآن</a>
                    </div>
                    <div class="pt-img">
                        <div class="pt-img-main">
                            <div><img style="height:474px"  src="{{ asset('images/slides/men-01.jpg') }}" class="js-init-parallax" data-orientation="down" data-overflow="true" alt=""></div>
                        </div>
                        <div class="pt-img-sub">
                            <div>
                                <img style="height:602px"  src="{{ asset('images/slides/men-02.jpg') }}" class="js-init-parallax" data-orientation="up" data-overflow="true" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="pt-5 container-indent">
    <h1 class="pt-title-subpages noborder">أنواع الملابس</h1>
    <div class="container">
        <div class="pt-layout-promo-card-02">
            <div class="row">
            @foreach ($categories as $c)
                <div class="col-md-6">
                    <a href="#" class="pt-promo-card-02">
                        <div class="image-box">
                            <img style="height:570px" src="{{ asset("images/categories/".$c->id."/".$c->image) }}" alt="">
                        </div>
                        <div class="pt-description">
                            <div class="pt-title">
                            {{$c->name}}
                            </div>
                            <div class="btn btn-border">تسوق الآن</div>
                        </div>
                    </a>
                </div>
            @endforeach
                {{-- <div class="col-md-6">
                    <a href="#" class="pt-promo-card-02">
                        <div class="image-box">
                            <img style="height:570px" src="{{ asset('images/slides/slide-03.jpg')}}" alt="">
                        </div>
                        <div class="pt-description">
                            <div class="pt-title">
                               الجلاليب
                            </div>
                            <div class="btn btn-border">تسوق الآن</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="pt-promo-card-02">
                        <div class="image-box">
                            <img style="height:570px" src="{{ asset('images/slides/slider-02.jpg')}}" alt="">
                        </div>
                        <div class="pt-description">
                            <div class="pt-title">
                                الفساتين
                            </div>
                            <div class="btn btn-border">تسوقى الآن</div>
                        </div>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
