@extends('layouts.app')
@push('css')
<style>

    .pt-filter-list, .pt-list-row{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .pt-list-row li:first-child a {
        padding-top: 6px;
    }

    .pt-filter-list li, .pt-list-row li{
        margin-top: 10px;
        padding: 0 5px;
        color: black;
        border-radius: 20px
    }

    .pt-filter-list li a, .pt-list-row li a{
        color: black !important
    }

    .pt-filter-list li:hover, .pt-list-row li:hover{
        background-color: lightgray;
    }

    .pt-filter-list li:hover a, .pt-list-row li:hover a{
        color: black;
    }

    .pt-filter-list li .icon {
        right: 10px !important;
    }

    .pt-filter-list li:hover .icon {
        color: red !important
    }
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

