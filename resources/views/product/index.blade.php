@extends('layouts.master')

@section('title')
    <title>{{ $title }}</title>
@endsection

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" style="font-family:'Dancing Script', cursive;">
                    <h1>Menu List</h1>
                </div>
                <!--<div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Product</a></li>
                    </ol>
                </div>-->
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="background-color: chocolate">
                            <a href="{{ route('product.create') }}" class="btn btn-primary card-title">Create Menu</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product as $pr)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pr->name }}</td>
                                            <td><img src="{{ Storage::url($pr->image) }}" width="150"></td>
                                            <td>{{ $pr->description }}</td>
                                            <td>{{ number_format($pr->price, 2) }}</td>
                                            <td>{{ $pr->quantity }}</td>
                                            @if ($pr->status == 1)
                                                <td><a href="#" class="btn btn-success">Tersedia</a></td>
                                            @else
                                                <td><a href="#" class="btn btn-danger">Tidak tersedia</a></td>
                                            @endif
                                            <td><a href="{{ route('product.edit', $pr->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a><br><br>
                
                                                <a href="{{ route('product.destroy', $pr->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Belum Ada Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection