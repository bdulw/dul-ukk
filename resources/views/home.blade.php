@extends('layouts.master')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" style="font-family:'Dancing Script', cursive;">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        @if (Auth::user()->level == 'admin')
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $trxheader }}</h3>
                        <p><b>Total Transaksi</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $product }}</h3>
                        <p><b>Total Menu</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $activity }}</h3>
                        <p><b>Total Aktivitas</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ route('activity.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div> 
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner" style="color: white">
                         <h3>{{ $user }}</h3> 
                         <p><b>Total User</b></p>                    
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('User.index') }}" class="small-box-footer"><span style="color: white">More info</span> 
                        <i class="fas fa-arrow-circle-right" style="color: white"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: chocolate;">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12 mb-4">
                                <div class="hero hero-bg-image hero-bg-parallax" style="font-family:'Dancing Script', cursive">
                                    <div class="hero-inner" style="color: white; text-align: center"><br>
                                        <h2>Selamat datang, di Dashboard {{ Auth::user()->name }} !</h2>
                                        <p class="lead"><b>Hak akses {{ Auth::user()->level }} telah diberikan kepada akun Anda !</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @elseif (Auth::user()->level == 'manager')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $trxheader }}</h3>
                        <p><b>Total Transaksi</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $product }}</h3>
                        <p><b>Total Menu</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('product.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $activity }}</h3>
                        <p><b>Total Aktivitas</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ route('activity.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div> 
            </div>
            <!-- ./col -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: chocolate;">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12 mb-4">
                                <div class="hero hero-bg-image hero-bg-parallax" style="font-family:'Dancing Script', cursive">
                                    <div class="hero-inner" style="color: white; text-align: center"><br>
                                        <h2>Selamat datang, di Dashboard {{ Auth::user()->name }} !</h2>
                                        <p class="lead"><b>Hak akses {{ Auth::user()->level }} telah diberikan kepada akun Anda !</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @else
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: chocolate;">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12 mb-4">
                                <div class="hero hero-bg-image hero-bg-parallax" style="font-family:'Dancing Script', cursive">
                                    <div class="hero-inner" style="color: white; text-align: center"><br>
                                        <h2>Selamat datang, di Dashboard {{ Auth::user()->name }} !</h2>
                                        <p class="lead"><b>Hak akses {{ Auth::user()->level }} telah diberikan kepada akun Anda !</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color: chocolate">
                        <h3 class="card-title" style="color: white"><b>Daftar Menu</b></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $pr)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pr->name }}</td>
                                        <td><img src="{{ Storage::url($pr->image) }}" width="100"></td>
                                        <td>{{ $pr->description }}</td>
                                        <td>{{ $pr->quantity }}</td>
                                        <td>{{ number_format($pr->price, 2) }}</td>
                                        @if ($pr->status == 1)
                                            <td><a href="#" class="btn btn-success">Tersedia</a></td>
                                        @else
                                            <td><a href="#" class="btn btn-danger">Tidak tersedia</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
@endsection