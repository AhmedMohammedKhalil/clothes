@extends('layouts.app')
@push('css')
<style>
    .pt-product .pt-description .pt-title a {
        font-size: 18px;
        font-weight: bold !important;
    }

    .pt-img img, .pt-img-roll-over img {
        width:100% !important;
        height: 316px !important;
    }

    .pt-app-btn {
        background: white;
        padding:5px;
        border:1px solid black;
        border-radius:10px
    }

    .pt-product:hover .pt-app-btn{
        opacity: 90% !important;
    }

    li span {
        display: inline-block;
    }

    .pt-col:first-child {
        flex:none
    }

    .pt-col {
        flex:auto
    }

</style>
@endpush
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


        <div id="pt-pageContent">
            <div class="container-indent">
                <div class="container container-fluid-custom-mobile-padding">
                    @if($products->count() > 0)
                         <h1 class="pt-title-subpages noborder">
                        @if($page_type == 'search')
                            بحث عن {{ $content }}
                        @endif
                        @if($page_type == 'category')
                            جميع {{ $content }}
                        @endif
                        @if($page_type == 'gender')
                            @if($content == 'رجالى')
                            جميع الملابس الرجالية
                            @else
                            جميع الملابس النسائية
                            @endif
                        @endif
                    </h1>
                    <div class="row">
                        <div class="col-md-4 col-lg-3 col-xl-3 leftColumn aside">
                            @livewire('filter',['page_type' => $page_type,'content' => $content])
                        </div>
                        <div class="col-md-12 col-lg-9 col-xl-9">
                            <div class="content-indent">
                                <div class="pt-filters-options">
                                    <div class="pt-btn-toggle">
                                        <a href="#">
                                        <span class="pt-icon">
                                            <svg>
                                                <use xlink:href="#icon-filter"></use>
                                            </svg>
                                        </span>
                                        <span class="pt-text">
                                            التصفبة
                                        </span>
                                        </a>
                                    </div>
                                    <div class="pt-quantity">
                                        <a href="#" class="pt-col-one" data-value="pt-col-one">
                                        <span class="icon-listing-one">
                                            <span></span>
                                            <span></span>
                                        </span>
                                        </a>
                                        <a href="#" class="pt-col-two" data-value="pt-col-two">
                                        <span class="icon-listing-two">
                                            <span></span>
                                            <span></span>
                                        </span>
                                        </a>
                                        <a href="#" class="pt-col-three" data-value="pt-col-three">
                                        <span class="icon-listing-three">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </span>
                                        </a>
                                        <a href="#" class="pt-col-four" data-value="pt-col-four">
                                        <span class="icon-listing-four">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </span>
                                        </a>
                                        <a href="#" class="pt-col-six" data-value="pt-col-six">
                                        <span class="icon-listing-six">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </span>
                                        </a>
                                    </div>
                                    <a href="#" class="pt-grid-switch">
                                    <span></span><span></span>
                                    </a>
                                </div>
                            @livewire('results',['page_type' => $page_type,'content' => $content])
                            </div>
                        </div>
                    </div>
                    @else
                        <h1 class="pt-title-subpages noborder">
                            لا يوجد ملابس
                        </h1>
                    @endif

                </div>
            </div>
        </div>
@endsection

