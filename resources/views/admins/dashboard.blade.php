@extends('admins.layout')
@section('section')
<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>

<div class="row justify-content-center">

      <div class="pt-offset-60 container-indent">
            <div class="container">
                <div class="pt-layout-promo-card-02">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" class="pt-promo-card-02">
                                <div class="image-box">
                                    <img style="height: 290px
;" src="{{ asset('images/admins/dashboardimages/company.jpg') }}" alt="">
                                </div>
                                <div class="pt-description">
                                    <div class="pt-title">
                                        الشركات
                                    </div>
                                    <div style=" font-size: 30px !important;
                                        padding: 10px !important;
                                        color: black !important;
                                        font-weight: 400 !important;" class="counter sssss">{{$company_count}}</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="pt-promo-card-02">
                                <div class="image-box">
                                    <img style="height: 290px
;" src="{{ asset('images/admins/dashboardimages/users.jpg') }}" alt="">
                                </div>
                                <div class="pt-description">
                                    <div class="pt-title">
                                    المستخدمين
                                    </div>
                                    <div style=" font-size: 30px !important;
                                        padding: 10px !important;
                                        color: black !important;
                                        font-weight: 400 !important;" class="counter">{{$user_count}}</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="pt-promo-card-02">
                                <div class="image-box">
                                    <img style="height: 290px
;" src="{{ asset('images/admins/dashboardimages/orders.jpg') }}" alt="">
                                </div>
                                <div class="pt-description">
                                    <div class="pt-title">
                                        المشتريات
                                    </div>
                                    <div style=" font-size: 30px !important;
                                        padding: 10px !important;
                                        color: black !important;
                                        font-weight: 400 !important;" class="counter">{{$order_count}}</div>
                                </div>
                            </a>
                        </div>
                           <div class="col-md-4">
                            <a href="#" class="pt-promo-card-02">
                                <div class="image-box">
                                    <img style="height: 290px
;" src="{{ asset('images/admins/dashboardimages/clothes (2).jpg') }}" alt="">
                                </div>
                                <div class="pt-description">
                                    <div class="pt-title">
                                        الملابس
                                    </div>
                                    <div style=" font-size: 30px !important;
                                        padding: 10px !important;
                                        color: black !important;
                                        font-weight: 400 !important;" class="counter">{{$product_count}}</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="pt-promo-card-02">
                                <div class="image-box">
                                    <img style="height: 290px
;" src="{{ asset('images/admins/dashboardimages/types.jpg') }}" alt="">
                                </div>
                                <div class="pt-description">
                                    <div class="pt-title">
                                        انواع الملابس
                                    </div>
                                    <div style=" font-size: 30px !important;
                                        padding: 10px !important;
                                        color: black !important;
                                        font-weight: 400 !important;" class="counter">{{$category_count}}</div>
                                </div>
                            </a>
                        </div>
                      
                     

                        <div class="col-md-4">
                            <a href="#" class="pt-promo-card-02">
                                <div class="image-box">
                                    <img style="height: 290px
;" src="{{ asset('images/admins/dashboardimages/materials.jpg') }}" alt="">
                                </div>
                                <div class="pt-description">
                                    <div class="pt-title">
                                            خامات الملابس
                                    </div>
                                    <div style=" font-size: 30px !important;
                                        padding: 10px !important;
                                        color: black !important;
                                        font-weight: 400 !important;" class="counter">{{$material_count}}</div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
@push("js")
<script>
$('.counter').counterUp({
    delay: 10,
    time: 1000
});

</script>
@endpush