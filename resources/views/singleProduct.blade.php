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

    @media (min-width: 1025px) {
            .modal .modal-body:not(.noindent) {
                padding: 0px
            }
        }
        .btn:first-child:hover {
            color: white;
            background-color: black;
            border-color: black;
        }
        .pt-image-box {
            overflow: hidden;
            border-radius: 10px 10px 0 0
        }
         .pt-image-box .buy{
            width: 40%;
            left: 50%;
            transform: translateX(-50%);
            bottom: -50px;
            position: absolute;
            z-index: 6666;
            transition: all 0.5s;
         }

         .pt-image-box .btn{
            padding: 20px;
            border-radius: 10px
         }

         .pt-product:hover .buy{
            bottom: 10px;
         }

         .pt-product {
            padding: 10px;
            transition: all 0.5s;
            border-radius: 10px
         }
         .pt-product:hover {
            transform: translateY(-20px);
            box-shadow: 0px 1px 10px gray
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
            @if($page_type != 'home')
            <li><a href="{{ route('shop',['page_type' => $page_type, 'content' => $content]) }}">الملابس</a></li>
            @endif

            <li>{{ $page_name }}</li>
        </ul>
    </div>
</div>
@endsection
@section('content')
@include('common.product',['page'=>$page])
@endsection
