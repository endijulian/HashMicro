@extends('layouts.template_default')

<style>
    .clearfix{
        min-height: 550px;
    }

    .badge{
        color: red;
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
                                        <li><a href="{{ route('stnk.index') }}">STNK</a></li>
                                        <li class="active">Create</li>
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
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Add New Master STNK</strong>
                    <a href="{{ route('stnk.index') }}" class="float-right btn btn-info btn-sm"><i class="fa fa-chevron-circle-left"></i> Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('stnk.store') }}" method="post" novalidate="novalidate" onSubmit="return confirm('Apakah anda yakin ingin menambahkan data?') ">
                        @csrf

                        <input id="users_id" name="users_id" type="hidden" class="form-control" aria-required="true" aria-invalid="false" value="{{ Auth::user()->id }}">
                        {{-- Left --}}
                        <div class="card-body col-lg-4">
                            <div class="form-group">
                                <div class="form-group accordion">
                                    <label for="no_stnk" class="control-label mb-1">No STNK<span class="badge">*</span></label>
                                    <input id="no_stnk" name="no_stnk" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('no_stnk') }}">
                                    <p class="text-danger">{{ $errors->first('no_stnk') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="jenis_kendaraans_id" class="control-label mb-1">Jenis Kendaraan<span class="badge">*</span></label>
                                        <select name="jenis_kendaraans_id" id="jenis_kendaraans_id" class="form-control" required>
                                            <option value="">Please select</option>
                                            @foreach ($jenisKendaraan as $value)
                                                <option value="{{ $value->id }}">{{ $value->jenis_kendaraan }}</option>
                                            @endforeach
                                        </select>
                                    <p class="text-danger">{{ $errors->first('jenis_kendaraans_id') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="silinder" class="control-label mb-1">Silinder (CC)<span class="badge">*</span></label>
                                    <input id="silinder" name="silinder" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('silinder') }}">
                                    <p class="text-danger">{{ $errors->first('silinder') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="tnkb" class="control-label mb-1">TNKB<span class="badge">*</span></label>
                                    <input id="tnkb" name="tnkb" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('tnkb') }}">
                                    <p class="text-danger">{{ $errors->first('tnkb') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="pkb" class="control-label mb-1">PKB<span class="badge">*</span></label>
                                    <input id="pkb" name="pkb" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Rp" value="{{ old('pkb') }}">
                                    <p class="text-danger">{{ $errors->first('pkb') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="nama_stnk" class="control-label mb-1">Nama STNK<span class="badge">*</span></label>
                                    <input id="nama_stnk" name="nama_stnk" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('nama_stnk') }}">
                                    <p class="text-danger">{{ $errors->first('nama_stnk') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="nilai_pajak_stnk" class="control-label mb-1">Nilai Pajak STNK</label>
                                    <input id="nilai_pajak_stnk" name="nilai_pajak_stnk" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Rp" value="{{ old('nilai_pajak_stnk') }}">
                                    <p class="text-danger">{{ $errors->first('nilai_pajak_stnk') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="status_id" class="control-label mb-1">Status</label>
                                    <select name="status_id" id="status_id" class="form-control">
                                        @foreach ($status as $value)
                                            <option value="{{ $value->id }}">{{ $value->status }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- Center --}}
                        <div class="card-body col-lg-4">
                            <div class="form-group">
                                <div class="form-group accordion">
                                    <label for="no_polisi" class="control-label mb-1">No Polisi<span class="badge">*</span></label>
                                    <input id="no_polisi" name="no_polisi" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('no_polisi') }}">
                                    <p class="text-danger">{{ $errors->first('no_polisi') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="model" class="control-label mb-1">Model<span class="badge">*</span></label>
                                    <input id="model" name="model" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('model') }}">
                                    <p class="text-danger">{{ $errors->first('model') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="no_mesin" class="control-label mb-1">No Mesin<span class="badge">*</span></label>
                                    <input id="no_mesin" name="no_mesin" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('no_mesin') }}">
                                    <p class="text-danger">{{ $errors->first('no_mesin') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="swdkllj" class="control-label mb-1">SWDKLLJ<span class="badge">*</span></label>
                                    <input id="swdkllj" name="swdkllj" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('swdkllj') }}">
                                    <p class="text-danger">{{ $errors->first('swdkllj') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="bahan_bakar" class="control-label mb-1">Bahan Bakar<span class="badge">*</span></label>
                                    <input id="bahan_bakar" name="bahan_bakar" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('bahan_bakar') }}">
                                    <p class="text-danger">{{ $errors->first('bahan_bakar') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="warna" class="control-label mb-1">Warna<span class="badge">*</span></label>
                                    <input id="warna" name="warna" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('warna') }}">
                                    <p class="text-danger">{{ $errors->first('warna') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="pajak_jasa" class="control-label mb-1">Pajak Jasa</label>
                                    <input id="pajak_jasa" name="pajak_jasa" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Rp" value="{{ old('pajak_jasa') }}">
                                    <p class="text-danger">{{ $errors->first('pajak_jasa') }}</p>
                                </div>
                            </div>
                        </div>

                        {{-- Right --}}
                        <div class="card-body col-lg-4">
                            <div class="form-group">
                                <div class="form-group accordion">
                                    <label for="merk" class="control-label mb-1">Merk<span class="badge">*</span></label>
                                    <input id="merk" name="merk" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('merk') }}">
                                    <p class="text-danger">{{ $errors->first('merk') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="no_rangka" class="control-label mb-1">No Rangka<span class="badge">*</span></label>
                                    <input id="no_rangka" name="no_rangka" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('no_rangka') }}">
                                    <p class="text-danger">{{ $errors->first('no_rangka') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="masa_berlaku" class="control-label mb-1">Masa Berlaku<span class="badge">*</span></label>
                                    <input id="masa_berlaku" name="masa_berlaku" type="date" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('masa_berlaku') }}">
                                    <p class="text-danger">{{ $errors->first('masa_berlaku') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="jasa_perpanjang" class="control-label mb-1">Jasa Perpanjangan</label>
                                    <input id="jasa_perpanjang" name="jasa_perpanjang" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Rp" value="{{ old('jasa_perpanjang') }}">
                                    <p class="text-danger">{{ $errors->first('jasa_perpanjang') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="tahun_kendaraan" class="control-label mb-1">Tahun Kendaraan<span class="badge">*</span></label>
                                    <input id="tahun_kendaraan" name="tahun_kendaraan" type="number" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('tahun_kendaraan') }}">
                                    <p class="text-danger">{{ $errors->first('tahun_kendaraan') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="no_bpkb" class="control-label mb-1">No BPKP</label>
                                    <input id="no_bpkb" name="no_bpkb" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('no_bpkb') }}">
                                    <p class="text-danger">{{ $errors->first('no_bpkb') }}</p>
                                </div>
                                <div class="form-group accordion">
                                    <label for="pajak_stnk" class="control-label mb-1">Pajak STNK<span class="badge">*</span></label>
                                    <input id="pajak_stnk" name="pajak_stnk" type="date" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('pajak_stnk') }}">
                                    <p class="text-danger">{{ $errors->first('pajak_stnk') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-body col-lg-12">
                            <div class="form-actions form-group">
                                <button type="reset" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-rotate-left"></i> Cancel</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check-square" onClick='return confirmSubmit()'></i> Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script>

    var nilai_pajak_stnk = document.getElementById('nilai_pajak_stnk');
    var pkb = document.getElementById('pkb');
    var pajak_jasa = document.getElementById('pajak_jasa');
    var jasa_perpanjang = document.getElementById('jasa_perpanjang');

    nilai_pajak_stnk.addEventListener('keyup', function(e){
        nilai_pajak_stnk.value = formatRupiah(this.value, 'Rp. ');
    });

    pkb.addEventListener('keyup', function(e){
        pkb.value = formatRupiah(this.value, 'Rp. ');
    });
    
    swdkllj.addEventListener('keyup', function(e){
        swdkllj.value = formatRupiah(this.value, 'Rp. ');
    });

    pajak_jasa.addEventListener('keyup', function(e){
        pajak_jasa.value = formatRupiah(this.value, 'Rp. ');
    });

    jasa_perpanjang.addEventListener('keyup', function(e){
        jasa_perpanjang.value = formatRupiah(this.value, 'Rp. ');
    });

    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>

@endsection