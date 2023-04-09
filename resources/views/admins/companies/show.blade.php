@extends('admins.layout')
@section('section')

    <h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>
    <div class="pt-account-layout p-5">
        <div class="pt-wrapper mt-0">
            <div class="row justify-content-center">

                @if($company->image != null)
                    <img style="width:60%;height:350px" src="{{ asset("images/companies/".$company->id."/".$company->image) }}" alt="صورة البروفايل">
                @else
                    <img style="width:60%;height:350px" src="{{ asset('images/companies/about-img-02.jpg') }}" alt="">
                @endif
            </div>
        </div>
        <div class="pt-wrapper">
            <h3 class="pt-title">تفاصيل البيانات</h3>
            <div class="pt-table">
                <table class="pt-table-shop-02">
                    <tbody>
                        <tr>
                            <td>إسم الشركة</td>
                            <td>{{ $company->name }}</td>
                        </tr>
                        <tr>
                            <td>إسم صاحب الشركة</td>
                            <td>{{ $company->owner }}</td>
                        </tr>
                        <tr>
                            <td>الإيميل</td>
                            <td>{{ $company->email }}</td>
                        </tr>
                        <tr>
                            <td>الموبايل</td>
                            <td>{{ $company->phone }}</td>
                        </tr>
                        <tr>
                            <td>عنوان الشركة</td>
                            <td>{!! nl2br($company->address) !!}</td>
                        </tr>
                        <tr>
                            <td>تفاصيل عن الشركة</td>
                            <td>{!! nl2br($company->details)  !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row justify-content-around pt-3">

            <a href="" class="btn btn-border">عرض الاوردرات</a>
            <a href="" class="btn btn-border">عرض المنتجات</a>
            </div>
        </div>
    </div>

@endsection
