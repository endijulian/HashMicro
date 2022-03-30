@extends('layouts.template_default')

<style>
    .clearfix{
        min-height: 550px;
    }
</style>

@section('title')
    Report
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
                                        <li class="active">Report</li>
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

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#" method="post">
                    @csrf

                    <div class="card-body col-lg-12">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <div class="form-group accordion">
                                    <label for="jenis_kendaraans_id" class="control-label mb-1">Region</label>
                                        <select name="jenis_kendaraans_id" id="jenis_kendaraans_id" class="form-control" required>
                                            {{-- @foreach ($region as $value_region) --}}
                                                <option value="">select</option>
                                            {{-- @endforeach --}}
                                        </select>
                                    <p class="text-danger">{{ $errors->first('jenis_kendaraans_id') }}</p>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <div class="form-group accordion">
                                    <label for="jenis_kendaraans_id" class="control-label mb-1">Sales Office</label>
                                        <select name="jenis_kendaraans_id" id="jenis_kendaraans_id" class="form-control" required>
                                            <option value="">select</option>
                                            <option value="1">Test</option>
                                            <option value="2">Test</option>
                                        </select>
                                    <p class="text-danger">{{ $errors->first('jenis_kendaraans_id') }}</p>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <div class="form-group accordion">
                                    <label for="jenis_kendaraans_id" class="control-label mb-1">Employee</label>
                                        <select name="jenis_kendaraans_id" id="jenis_kendaraans_id" class="form-control" required>
                                            <option value="">select</option>
                                            <option value="1">Test</option>
                                            <option value="2">Test</option>
                                        </select>
                                    <p class="text-danger">{{ $errors->first('jenis_kendaraans_id') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <div class="form-group accordion">
                                    <label for="pajak_stnk" class="control-label mb-1">Start Date</label>
                                    <input id="pajak_stnk" name="pajak_stnk" type="date" class="form-control" required>
                                    <p class="text-danger">{{ $errors->first('pajak_stnk') }}</p>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <div class="form-group accordion">
                                    <label for="pajak_stnk" class="control-label mb-1">End Date</label>
                                    <input id="pajak_stnk" name="pajak_stnk" type="date" class="form-control" required>
                                    <p class="text-danger">{{ $errors->first('pajak_stnk') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body col-lg-12">
                        <div class="form-actions form-group float-right">
                            <button type="reset" class="btn btn-default" ><i class="fa fa-rotate-left"></i> Cancel</button>
                            <button type="submit" class="btn btn-primary"> Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection