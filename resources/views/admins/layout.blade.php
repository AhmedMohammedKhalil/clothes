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
<div class="container-indent" style="min-height: calc(100vh - 266px);">
    <div class="container" style="height:100%">
        <div class="row flex-sm-row pt-check-onecol" style="height:100%">
            <div class="col-sm-12 col-md-3 col-lg-3 leftColumn indent-aside-col mb-5">
                <div class="pt-block-aside">
                    <h3 class="pt-aside-title">قائمتى</h3>
                    <div class="pt-aside-content">
                        <ul class="pt-list-row">
                            <li><a href="{{ route('admin.dashboard') }}">لوحة التحكم</a></li>
                            <li><a href="{{ route('admin.companies.allCompanies') }}">إدارة الشركات</a></li>
                            <li><a href="{{ route('admin.categories.allCategories') }}">إدارة انواع الملابس</a></li>
                            <li><a href="{{ route('admin.materials.allMaterials') }}">إدارة خامات الملابس</a></li>
                            <li><a href="{{ route('admin.sizes.allSizes') }}">إدارة مقاسات الملابس</a></li>
                            <li><a href="{{ route('admin.orders.allOrders') }}">جميع الطلبات</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-9 col-lg-9">
                @yield('section')
            </div>

        </div>
    </div>
</div>

@endsection
