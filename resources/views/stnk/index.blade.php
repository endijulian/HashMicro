@extends('layouts.template_default')

<style>
    .clearfix{
        min-height: 550px;
    }

    .my-active span{
        background-color: #01C292 !important;
        color: white !important;
        border-color: #01C292 !important;
    }

</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

@section('title')
    STNK
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Dashboard</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="{{ route('home') }}">Dashboard</a></li>
                                        <li class="active">STNK</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">

            @if (session('status'))
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <div class="row">
                            <div class="col-md-2">
                                <strong class="card-title">Master STNK</strong>
                            </div>
                            <div class="col-md-5">
                                <form action="{{route('stnk.index')}}" method="get">
                                    <div class="input-group">
                                        <input type="text" id="keyword" name="keyword" placeholder="Search" value="{{Request::get('keyword')}}"  class="form-control">
                                        <div class="input-group-btn"><button type="submit" class="btn btn-primary">Search</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5">
                                <a href="{{ route('stnk.create') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> Add Data</a>
                            </div>
                    </div>
                </div>
                <div class="table-stats order-table ov-h">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No STNK</th>
                                <th>Nama STNK</th>
                                <th>Masa Berlaku</th>
                                <th>No BPKB</th>
                                <th>No Polisi</th>
                                <th>Merk</th>
                                <th>Status</th>
                                <th>Detail</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stnk as $value)
                                <tr>
                                    <td>{{ $value->no_stnk ?? '' }}</td>
                                    <td>{{ $value->nama_stnk ?? '' }}</td>
                                    <td>{{ $value->masa_berlaku ?? '' }}</td>
                                    <td>{{ $value->no_bpkb ?? '' }}</td>
                                    <td>{{ $value->no_polisi ?? '' }}</td>
                                    <td>{{ $value->merk ?? '' }}</td>
                                    <td>
                                        @if ($value->status_id == 1)
                                            <span class="btn btn-primary">{{ $value->status->status ?? '' }}</span>
                                        @else
                                            <span class="btn btn-danger">{{ $value->status->status ?? '' }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('stnk.detail',$value->id) }}"><i class="fa fa-folder-open-o"></i>Detail</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('stnk.edit',Crypt::encrypt($value->id)) }}"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> 
            </div>

            <div class="card">
                {{ $stnk->links('vendor.pagination.customPagination') }}
            </div>
        </div>
    </div>
</div>
@endsection