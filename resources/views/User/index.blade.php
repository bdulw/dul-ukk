@extends('layouts.master')

@section('title')
    <title>User Page</title>
@endsection

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" style="font-family:'Dancing Script', cursive;">
                    <h1>User</h1>
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
                            <a href="{{ route('User.create') }}" class="btn btn-primary card-title">Create User</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Level</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($user as $u)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge">{{ $u->name }}</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">{{ $u->level }}</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-warning">{{ $u->email }}</span>
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