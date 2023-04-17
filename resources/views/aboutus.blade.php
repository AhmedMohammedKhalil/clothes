@extends('layouts.app')
@section('breadcrumb')
<div class="pt-breadcrumb">
    <div class="container-fluid">
        <ul>
            <li><a href="{{ route('home') }}">الرئيسية</a></li>
            <li>{{ $page_name }}</li>
        </ul>
    </div>
</div>
@endsection
@section('content')
        <div class="container-indent" style="height: calc(100vh - 150px);margin: 150px 0">
            <div class="container" style="height:100%">
                <div class="pt-about">
                    <div class="pt-img">
                        <div class="pt-img-main">
                            <div><img src="{{ asset('images/custom/about-img-01.jpg') }}" class="js-init-parallax" data-orientation="up" data-overflow="true" data-scale="1.4" alt=""></div>
                        </div>
                        <div class="pt-img-sub">
                            <div>
                                <img src="{{ asset('images/custom/about-img-02.jpg') }}" class="js-init-parallax" data-orientation="down" data-overflow="true" data-scale="1.4" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="pt-description">
                        <div class="pt-title">من نحن</div>
                        <p style="text-align:justify;">نسعى دوماً لتقديم أفضل الأزياء المستدامة لزبائننا، كما أن التزام موظفينا هو عامل أساسي من نجاحنا. ولتحقيق النجاح فإننا نحرص دوماً على خلق مستقبل أفضل للأزياء، ونقوم باستغلال قدراتنا في السوق لتنمية بيئة صناعة أزياء مثالية حول العالم.</p>
                    </div>
                </div>
            </div>
        </div>
@endsection
