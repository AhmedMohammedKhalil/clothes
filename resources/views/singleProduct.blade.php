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

    #smallGallery a , #smallGallery img{
        width:100% !important;
        height: 65px !important;
    }

    .zoom-product{
        width: 100% !important;
        height: 372px !important;
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
            <li><a href="{{ route('shop',['page_type' => 'gender', 'content' => 'رجالى']) }}">الملابس</a></li>
            <li>{{ $page_name }}</li>
        </ul>
    </div>
</div>
@endsection
@section('content')
@include('common.product',['page'=>$page])
@endsection
