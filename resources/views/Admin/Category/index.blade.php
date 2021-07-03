@extends('layouts.admin')
@section('title')
Home
@endsection
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Welcome !</h4>
            <div class="page-title-right">
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Moltran</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card-box">
            <div class="media">
                <div class="avatar-md bg-info rounded-circle mr-2">
                    <i class="ion-logo-usd avatar-title font-26 text-white"></i>
                </div>
                <div class="media-body align-self-center">
                    <div class="text-right">
                        <h4 class="font-20 my-0 font-weight-bold"><span data-plugin="counterup">15852</span></h4>
                        <p class="mb-0 mt-1 text-truncate">Total Sales</p>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                        aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card-box-->
    </div>


</div>
@endsection