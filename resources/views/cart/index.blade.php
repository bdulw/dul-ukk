@extends('layouts.master')

@section('title')
    <title>Cart Page</title>
@endsection

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" style="font-family:'Dancing Script', cursive;">
                    <h1>Keranjang</h1>
                </div>
                <!--<div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div>-->
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            @if ($msg = Session::get('gagal'))
                <div class="alert alert-danger">
                    <p>{{ $msg }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success" style="background-color: green; color: white">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header" style="background-color: chocolate">
                            <h3 class="card-title"><b>Profil Kasir</b></h3>
                        </div>
                        <div class="card-body d-flex justify-content-between">
                            <div class="d-flex flex-column">
                                <p>Nama Kasir : <b>{{ Auth::user()->name }}</b></b> </p>
                                <p class="time">Waktu : <b>{{ date('H:i:s') }}</b></p>
                                <p class="tgl">Tanggal : <b>{{ date('Y-m-d') }}</b></p>
                            </div>
                        </div>
                        <hr color="black">
                            <p style="margin-left: 130px;"><b>Total Harga</b></p>
                            <div class="card-body d-flex align-items-center justify-content-center" style="background-color: chocolate">
                                <h1 class="text-white text-bold totalnya">Rp.
                                    {{ number_format($total_belanja, 2, ',', '.') }}</h1>
                            </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header" style="background-color: chocolate">
                            <h3 class="card-title"><b>Keranjang Barang</b></h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hovered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Qty</th>
                                        <th>Harga (Rp.)</th>
                                        <th>Subtotal (Rp.)</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $ct)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ct->product->name }}</td>
                                            <td>{{ $ct->quantity }}</td>
                                            <td>{{ $ct->product->price }}</td>
                                            <td>{{ $ct->subTotal }}</td>
                                            <td>
                                                <form action="{{ route('cart.destroy', $ct->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="cart_id" value="{{ $ct->id }}">
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <a href="{{ route('order.index') }}" class="btn btn-sm btn-primary">CheckOut</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-4">
                    <div class="card">
                        <div class="card-header" style="background-color: chocolate">
                            <h3 class="card-title"><b>Pilih Barang</b></h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('cart.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="">Pilih Produk</label>
                                    <select name="product_id" class="form-control">
                                        <option value="0">Pilih Produk</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }} ---- Stok menu : {{ $product->quantity }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Qty</label>
                                    <input type="number" name="quantity" value="1" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <div class="col-3">
                    <div class="card">
                        <div class="card-header" style="background-color: chocolate">
                            <h3 class="card-title"><b>Sisa Stock</b></h3>
                        </div>  
                        <div class="card-body d-flex justify-content-between">
                            <div class="d-flex flex-column">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Nama Menu</td>
                                            <td>Stock</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $pr)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pr->name }}</td>
                                                <td>{{ $pr->quantity }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>                      
                    </div>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-header" style="background-color: chocolate">
                            <h3 class="card-title"><b>Pilih Barang</b></h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('cart.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="">Pilih Produk</label>
                                    <select name="product_id" class="form-control">
                                        <option value="0">Pilih Produk</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Qty</label>
                                    <input type="number" name="quantity" value="1" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-5">
                    <div class="card">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><b>Total Harga</b></h3>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-center" style="background-color: chocolate">
                                <h1 class="text-white text-bold totalnya">Rp.
                                    {{ number_format($total_belanja, 2, ',', '.') }}</h1>
                            </div>
                        </div>
                    </div>
                </div>                 --}}
            </div>
            {{-- <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header" style="background-color: chocolate">
                            <h3 class="card-title"><b>Keranjang Barang</b></h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hovered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Barcode</th>
                                        <th>Qty</th>
                                        <th>Harga (Rp.)</th>
                                        <th>Subtotal (Rp.)</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $ct)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ct->product->name }}</td>
                                            <td>{{ $ct->product->barcode }}</td>
                                            <td>{{ $ct->quantity }}</td>
                                            <td>{{ $ct->product->price }}</td>
                                            <td>{{ $ct->subTotal }}</td>
                                            <td>
                                                <form action="{{ route('cart.destroy', $ct->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="cart_id" value="{{ $ct->id }}">
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <a href="{{ route('order.index') }}" class="btn btn-sm btn-primary">CheckOut</a>
                        </div>
                    </div>
                </div>
            </div> --}}
    </section>
@endsection