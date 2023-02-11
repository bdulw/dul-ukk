@extends('layouts.master')

@section('title')
    <title>Log Activity</title>
@endsection

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" style="font-family:'Dancing Script', cursive;">
                    <h1>Log Activity</h1>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header" style="background-color: chocolate">
                    <h3 class="card-title"><b>Activity Users</b></h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Activity</th>
                                <th>Times</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activity_log as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="font-w600 text-left" style="width: 100px">
                                    <span class="badge">{{ $item->user->level }} -> {{ $item->user->name }}</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-success">{{ $item->description }}</span>
                                </td>
                                <td>
                                    <span class="badge badge-danger">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection