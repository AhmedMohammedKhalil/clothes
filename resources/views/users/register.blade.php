@extends('layouts.app')
@section('breadcrumb')
<div class="pt-breadcrumb">
    <div class="container-fluid">
        <ul>
            <li><a href="{{ route('home') }}">الرئيسية</a></li>
            <li>إنشاء حساب المستخدم</li>
        </ul>
    </div>
</div>
@endsection
@section('content')
<div class="container-indent" style="min-height: calc(100vh - 266px)">
    <div class="container">
        <h1 class="pt-title-subpages noborder">إنشاء حساب المستخدم</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 col-xl-4" ">
                <livewire:user.register />
            </div>
        </div>
    </div>
</div>

@endsection
