@extends('companies.layout')
@section('section')

    <h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>
    <div class="pt-account-layout p-5">
        <div class="pt-wrapper mt-0">
            <div class="row justify-content-center">

                @if(auth('company')->user()->image != null)
                    <img style="width:60%;height:350px" src="{{ asset("images/companies/".auth('company')->user()->id."/".auth('company')->user()->image) }}" alt="صورة البروفايل">
                @else
                    <img style="width:60%;height:350px" src="{{ asset('images/companies/about-img-02.jpg') }}" alt="">
                @endif
            </div>
        </div>
        <div class="pt-wrapper">
            <h3 class="pt-title">تفاصيل البيانات</h3>
            <div class="pt-table-responsive">
                <table class="pt-table-shop-02">
                    <tbody>
                        <tr>
                            <td>إسم الشركة</td>
                            <td>{{ auth('company')->user()->name }}</td>
                        </tr>
                        <tr>
                            <td>إسم صاحب الشركة</td>
                            <td>{{ auth('company')->user()->owner }}</td>
                        </tr>
                        <tr>
                            <td>الإيميل</td>
                            <td>{{ auth('company')->user()->email }}</td>
                        </tr>
                        <tr>
                            <td>الموبايل</td>
                            <td>{{ auth('company')->user()->phone }}</td>
                        </tr>
                        <tr>
                            <td>عنوان الشركة</td>
                            <td>{!!  nl2br(auth('company')->user()->address) !!}</td>
                        </tr>
                        <tr>
                            <td>تفاصيل عن الشركة</td>
                            <td>{!! nl2br(auth('company')->user()->details) !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{ route('company.settings') }}" class="btn btn-border">تعديل البيانات</a>
        </div>
    </div>

@endsection
