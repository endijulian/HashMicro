@extends('layouts.template_default')

<style>
    .clearfix{
        min-height: 550px;
    }

    .span-ceneter{
        padding-right: -100px;
    }
</style>

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
                                        <li class="{{ route('stnk.index') }}">STNK</li>
                                        <li class="active">Detail</li>
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
            <div class="card-header">
                <h4>Detail Master STNK</h4>
            </div>
            <div class="card-body">
                <div class="default-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item ml-3 nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Detail</a>
                            <a class="nav-item ml-3 nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">History Data</a>
                        </div>
                    </nav>
                    <div class="tab-content pt-2" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">No STNK</div>
                                        <div class="col-md-3">{{ $detail_stnk->no_stnk }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">No Polisi</div>
                                        <div class="col-md-3">{{ $detail_stnk->no_polisi }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Merk</div>
                                        <div class="col-md-3">{{ $detail_stnk->merk }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Jenis Kendaraan</div>
                                        <div class="col-md-3">{{ $detail_stnk->jenis_kendaraans->jenis_kendaraan }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Model</div>
                                        <div class="col-md-3">{{ $detail_stnk->model }}</div>
                                    </div>
                                </li><li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">No Rangka</div>
                                        <div class="col-md-3">{{ $detail_stnk->no_rangka }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Silinder (CC)</div>
                                        <div class="col-md-3">{{ $detail_stnk->silinder }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">No Mesin</div>
                                        <div class="col-md-3">{{ $detail_stnk->no_mesin }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Masa Berlaku</div>
                                        <div class="col-md-3">{{ $detail_stnk->masa_berlaku }}</div>
                                    </div>
                                </li><li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">TNKB</div>
                                        <div class="col-md-3">{{ $detail_stnk->tnkb }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">SWDKLLJ</div>
                                        <div class="col-md-3">{{ $detail_stnk->swdkllj }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Jasa Perpanjangan</div>
                                        <div class="col-md-3">{{ $detail_stnk->jasa_perpanjang }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">PKB</div>
                                        <div class="col-md-3">{{ $detail_stnk->pkb }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Bahan Bakar</div>
                                        <div class="col-md-3">{{ $detail_stnk->bahan_bakar }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Tahun Kendaraan</div>
                                        <div class="col-md-3">{{ $detail_stnk->tahun_kendaraan }}</div>
                                    </div>
                                </li><li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Nama STNK</div>
                                        <div class="col-md-3">{{ $detail_stnk->nama_stnk }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Warna</div>
                                        <div class="col-md-3">{{ $detail_stnk->warna }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">No BPKB</div>
                                        <div class="col-md-3">{{ $detail_stnk->no_bpkb }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Nilai Pajak STNK</div>
                                        <div class="col-md-3">{{ $detail_stnk->nilai_pajak_stnk }}</div>
                                    </div>
                                </li>

                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Pajak Jasa</div>
                                        <div class="col-md-3">{{ $detail_stnk->pajak_jasa }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Pajak STNK</div>
                                        <div class="col-md-3">{{ $detail_stnk->pajak_stnk }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Status</div>
                                        <div class="col-md-3">{{ $detail_stnk->status->status}}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Created At</div>
                                        <div class="col-md-3">{{ $detail_stnk->created_at }}</div>
                                    </div>
                                </li>
                                <li class="list-group-item col-lg-12">
                                    <div class="row">
                                        <div class="col-md-3">Created By</div>
                                        <div class="col-md-3">{{ $detail_stnk->users->level->level.'.'.$detail_stnk->users->name}}</div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            @foreach ($detil_history as $value_history)
                                <li class="list-group-item col-lg-12">
                                    <div class="row mb-3">
                                        @if ($value_history->no_stnk)
                                            <div class="col-md-12">No STNK : {{ $value_history->no_stnk }}</div>
                                        @endif
                                        @if ($value_history->no_polisi)
                                            <div class="col-md-12">No Polisi : {{ $value_history->no_polisi }} </div>
                                        @endif
                                        @if ($value_history->merk)
                                            <div class="col-md-12">Merk : {{ $value_history->merk }} </div>
                                        @endif
                                        @if ($value_history->jenis_kendaraan)
                                            <div class="col-md-12">Jenis Kendaraan : </div>
                                        @endif
                                        @if ($value_history->model)
                                            <div class="col-md-12">Model : {{ $value_history->model }} </div>
                                        @endif
                                        @if ($value_history->no_rangka)
                                            <div class="col-md-12">No Rangka : {{ $value_history->no_rangka }} </div>
                                        @endif
                                        @if ($value_history->silinder)
                                            <div class="col-md-12">Silinder (CC) : {{ $value_history->silinder }} </div>
                                        @endif
                                        @if ($value_history->no_mesin)
                                            <div class="col-md-12">No Mesin : {{ $value_history->no_mesin }} </div>
                                        @endif
                                        @if ($value_history->no_polisi)
                                            <div class="col-md-12">No Polisi : {{ $value_history->no_polisi }} </div>
                                        @endif
                                        @if ($value_history->masa_berlaku)
                                            <div class="col-md-12">Masa Berlaku : {{ $value_history->masa_berlaku }} </div>
                                        @endif
                                        @if ($value_history->tnkb)
                                            <div class="col-md-12">TNKB : {{ $value_history->tnkb }} </div>
                                        @endif
                                        @if ($value_history->swdkllj)
                                            <div class="col-md-12">SWDKLLJ : {{ $value_history->swdkllj }} </div>
                                        @endif
                                        @if ($value_history->jasa_perpanjang)
                                            <div class="col-md-12">Jasa Perpanjangan : {{ $value_history->jasa_perpanjang }} </div>
                                        @endif
                                        @if ($value_history->pkb)
                                            <div class="col-md-12">PKB : {{ $value_history->pkb }} </div>
                                        @endif
                                        @if ($value_history->bahan_bakar)
                                            <div class="col-md-12">Bahan Bakar : {{ $value_history->bahan_bakar }} </div>
                                        @endif
                                        @if ($value_history->tahun_kendaraan)
                                            <div class="col-md-12">Tahun Kendaraan : {{ $value_history->tahun_kendaraan }} </div>
                                        @endif
                                        @if ($value_history->nama_stnk)
                                            <div class="col-md-12">Nama STNK : {{ $value_history->nama_stnk }} </div>
                                        @endif
                                        @if ($value_history->warna)
                                            <div class="col-md-12">Warna : {{ $value_history->warna }} </div>
                                        @endif
                                        @if ($value_history->no_bpkb)
                                            <div class="col-md-12">No BPKB : {{ $value_history->no_bpkb }} </div>
                                        @endif
                                        @if ($value_history->nilai_pajak_stnk)
                                            <div class="col-md-12">Nilai Pajak STNK : {{ $value_history->nilai_pajak_stnk }} </div>
                                        @endif
                                        @if ($value_history->pajak_jasa)
                                            <div class="col-md-12">Pajak Jasa : {{ $value_history->pajak_jasa }} </div>
                                        @endif
                                        @if ($value_history->pajak_stnk)
                                            <div class="col-md-12">Pajak STNK : {{ $value_history->pajak_stnk }} </div>
                                        @endif
                                        @if ($value_history->status)
                                            <div class="col-md-12">Status :  </div>
                                        @endif
                                        
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"><p>Updated At</p></div>
                                        <div class="col-md-3"><p>{{ $value_history->created_at }}</p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"><p>Updated By</p></div>
                                        <div class="col-md-3"><p>{{ $value_history->users->level->level .'.'. $value_history->users->name}}</p></div>
                                    </div>
                                </li>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection