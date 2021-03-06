@extends('dashboards.shop-admin.dashboard-layout')
@section('page-content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <b>
                
                @role('Shop')
                        Shop Dashboard
                @endrole
                @role('Admin')
                Admin Dashboard
        @endrole
                </b>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->

    <div class="container mb-4">
        <div class="alert alert-warning" role="alert">
            Please complete your profile by clicking
            <a href="#" class="alert-link"> here</a>.
        </div>
    </div>




    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->

        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->

            @role('Admin')
            
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="{{route('admin.all.users.list')}}">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #a640b883;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allUsersCount}}</span><br>
                                        <span style="color:#fff">Total Users</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fas fa-users"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="{{route('admin.all.users.list.show.active')}}">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #45955f;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allActiveUsersCount}}</span><br>
                                        <span style="color:#fff">Active Users</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fas fa-users"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="{{route('admin.all.users.list.show.deactive')}}">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #ff0000;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allDeactiveUsersCount}}</span><br>
                                        <span style="color:#fff">Non Active Users</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fas fa-user-times"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #1500ff;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allShopsCount}}</span><br>
                                        <span style="color:#fff">Total Shops</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-shop"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #45955f;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allActiveShopsCount}}</span><br>
                                        <span style="color:#fff">Active Shops</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-shop"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #ff0000;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allDeactiveShopsCount}}</span><br>
                                        <span style="color:#fff">Non Active Shops</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-shop-slash"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #1500ff;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allGroupsCount}}</span><br>
                                        <span style="color:#fff">Total Groups</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-people-group"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #45955f;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allActiveGroupsCount}}</span><br>
                                        <span style="color:#fff">Active Groups</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-people-group"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #ff0000;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allDeactiveGroupsCount}}</span><br>
                                        <span style="color:#fff">Non Active Groups</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-people-group"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #1500ff;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allVouchersCount}}</span><br>
                                        <span style="color:#fff">Total Vouchers</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-ticket"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #45955f;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allActiveVouchersCount}}</span><br>
                                        <span style="color:#fff">Active Vouchers</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-ticket"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #ff0000;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$allDeactiveVouchersCount}}</span><br>
                                        <span style="color:#fff">Non Active Vouchers</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-ticket"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #1500ff;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">134</span><br>
                                        <span style="color:#fff">Shop Categories</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-shop"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #1500ff;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">134</span><br>
                                        <span style="color:#fff">User Posts</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-brands fa-blogger"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #1500ff;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">134</span><br>
                                        <span style="color:#fff">Group Posts</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-brands fa-blogger"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>

                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                        <!--begin::Card widget 4-->
                        <a href="#">
                            <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                <!--begin::Header-->
                                <div class="card-header pt-5" style="background-color: #1500ff;">
                                    <!--begin::Title-->
        
                                    <!--begin::Info-->
                                    <div class="align-items-center pt-6 pb-10">
                                        <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">134</span><br>
                                        <span style="color:#fff">Comments</span>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-comments"></i></span>
                                    <!--end::Subtitle-->
        
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
        
                                <!--end::Card body-->
                            </div>
                        </a>
                    </div>
                    
                    
                </div>
           

            

        
                @endrole
            
                @role('Shop')
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                                <!--begin::Card widget 4-->
                                <a href="{{route('shop.myvouchers.show')}}">
                                    <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                        <!--begin::Header-->
                                        <div class="card-header pt-5" style="background-color: #a640b883;">
                                            <!--begin::Title-->
                
                                            <!--begin::Info-->
                                            <div class="align-items-center pt-6 pb-10">
                                                <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$shopMyVouchersCount}}</span><br>
                                                <span style="color:#fff">My Vouchers</span>
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Subtitle-->
                                            <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-ticket"></i></span>
                                            <!--end::Subtitle-->
                
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Header-->
                
                                        <!--end::Card body-->
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                                <!--begin::Card widget 4-->
                                <a href="{{route('shop.usevoucher.list.show')}}">
                                    <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                        <!--begin::Header-->
                                        <div class="card-header pt-5" style="background-color: #a640b883;">
                                            <!--begin::Title-->
                
                                            <!--begin::Info-->
                                            <div class="align-items-center pt-6 pb-10">
                                                <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$shopMyUseVouchersCount}}</span><br>
                                                <span style="color:#fff">Use Vouchers</span>
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Subtitle-->
                                            <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-ticket"></i></span>
                                            <!--end::Subtitle-->
                
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Header-->
                
                                        <!--end::Card body-->
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-md-5 mb-xl-5">
                                <!--begin::Card widget 4-->
                                
                                    <div class="card card-flush h-md-20 mb-5 mb-xl-5">
                                        <!--begin::Header-->
                                        <div class="card-header pt-5" style="background-color: #a640b883;">
                                            <!--begin::Title-->
                
                                            <!--begin::Info-->
                                            <div class="align-items-center pt-6 pb-10">
                                                <span class="fs-2hx fw-bolder me-2 lh-1" style="color:#fff">{{$shopMyUseVoucherSpend}}</span><br>
                                                <span style="color:#fff">Spend</span>
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Subtitle-->
                                            <span style="padding-bottom:10px;" class="text-gray-400 pt-1 fw-bold fs-6"> <i style="font-size: 70px;color: #fff;" class="fa-solid fa-dollar"></i></span>
                                            <!--end::Subtitle-->
                
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Header-->
                
                                        <!--end::Card body-->
                                    </div>
                                
                            </div>
                        </div>
                @endrole
                
            <!--begin::Col-->

            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--end::Row-->
    </div>

    <!--end::Container-->
</div>
@endsection