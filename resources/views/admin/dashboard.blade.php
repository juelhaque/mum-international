@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        @include('message')
        <div class="row mb-2">
            <div class="col-sm-12 text-center">
                <h1><strong>Mum International</strong></h1>
                <h5>Admin Panel</h5>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-6 text-center">
                <div class="small-box card">
                    <div class="inner">
                        <h4><b>Total Category</b></h4>
                        <h3>{{$categories}}</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('categories.index')}}" class="small-box-footer text-light" style="background: #419197">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <div class="small-box card">
                    <div class="inner">
                        <h4><b>Total Products</b></h4>
                        <h3>{{$products}}</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{route('products.index')}}" class="small-box-footer text-light" style="background: #419197">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <div class="small-box card">
                    <div class="inner">
                        <h4><b>Messages</b></h4>
                        <h3>{{$messages}}</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{route('messages.index')}}" class="small-box-footer text-light" style="background: #419197">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <div class="small-box card">
                    <div class="inner">
                        <h4><b>Total Photo</b></h4>
                        <h3>{{$photo_galleries}}</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{route('photo-gallery.index')}}" class="small-box-footer text-light" style="background: #419197">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </div>
    <!-- /.card -->
</section>
@endsection

