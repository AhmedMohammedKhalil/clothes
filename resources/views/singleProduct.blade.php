@extends('layouts.app')

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
