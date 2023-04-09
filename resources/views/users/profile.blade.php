@extends('users.layout')
@section('section')

    <h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>
    <div class="pt-account-layout p-5">
        <div class="pt-wrapper mt-0">
            <div class="row justify-content-center">

                @if(auth('user')->user()->image != null)
                    <img style="width:60%;height:350px" src="{{ asset("images/users/".auth('user')->user()->id."/".auth('user')->user()->image) }}" alt="صورة البروفايل">
                @else
                    <img style="width:60%;height:350px" src="{{ asset('images/users/about-img-02.jpg') }}" alt="">
                @endif
            </div>
        </div>
        <div class="pt-wrapper">
            <h3 class="pt-title">تفاصيل البيانات</h3>
            <div class="pt-table-responsive">
                <table class="pt-table-shop-02">
                    <tbody>
                        <tr>
                            <td>الإسم</td>
                            <td>{{ auth('user')->user()->name }}</td>
                        </tr>
                        <tr>
                            <td>الإيميل</td>
                            <td>{{ auth('user')->user()->email }}</td>
                        </tr>
                        <tr>
                            <td>الموبايل</td>
                            <td>{{ auth('user')->user()->phone }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{ route('user.settings') }}" class="btn btn-border">تعديل البيانات</a>
        </div>
    </div>

@endsection
