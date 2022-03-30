<?php

namespace App\Http\Controllers;

use App\Models\JenisKendaraan;
use App\Models\Status;
use App\Models\Stnk;
use App\Models\StnkHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class StnkController extends Controller
{
    public function index(Request $request)
    {
        $stnk = Stnk::paginate(5);

        $cari = $request->get('keyword');

        if ($cari) {
            $stnk = Stnk::where('no_stnk', 'LIKE', "%$cari%")
                ->orWhere('nama_stnk', 'LIKE', "%$cari%")
                ->orWhere('no_bpkb', 'LIKE', "%$cari%")
                ->orWhere('no_polisi', 'LIKE', "%$cari%")
                ->orWhere('merk', 'LIKE', "%$cari%")->paginate();
        }

        $with['stnk'] = $stnk;
        return view('stnk.index', $with);
    }

    public function create(Request $request)
    {
        $status             = Status::all();
        $jenisKendaraan     = JenisKendaraan::all();

        $with['status']          = $status;
        $with['jenisKendaraan']  = $jenisKendaraan;


        return view('stnk.create', $with);
    }

    public function store(Request $request)
    {
        $input_stnk = $request->all();

        $validasi = Validator::make($input_stnk, [
            'no_stnk'                   => 'required|unique:stnk',
            'jenis_kendaraans_id'       => 'required',
            'silinder'                  => 'required',
            'tnkb'                      => 'required',
            'pkb'                       => 'required',
            'nama_stnk'                 => 'required',
            'nilai_pajak_stnk'          => 'nullable',
            'no_polisi'                 => 'required|unique:stnk',
            'model'                     => 'required',
            'no_mesin'                  => 'required|unique:stnk',
            'swdkllj'                   => 'required',
            'bahan_bakar'               => 'required',
            'warna'                     => 'required',
            'pajak_jasa'                => 'nullable',
            'merk'                      => 'required',
            'no_rangka'                 => 'required|unique:stnk',
            'masa_berlaku'              => 'required',
            'jasa_perpanjang'           => 'nullable',
            'tahun_kendaraan'           => 'required',
            'no_bpkb'                   => 'nullable',
            'pajak_stnk'                => 'required',
            'status_id'                 => 'required',
        ]);

        if ($validasi->fails()) {
            return redirect()->route('stnk.create')->withErrors($validasi)->withInput();
        }

        Stnk::create($input_stnk);

        return redirect()->route('stnk.index')->with('status', 'Create Data Berhasil');
    }

    public function edit($id)
    {
        $idDec              = Crypt::decrypt($id);
        $stnk               = Stnk::findOrFail($idDec);
        $status             = Status::get();
        $jenisKendaraan     = JenisKendaraan::all();


        $with['status']          = $status;
        $with['jenisKendaraan']  = $jenisKendaraan;
        $with['stnk']            =  $stnk;
        return view('stnk.edit', $with);
    }

    public function update(Request $request, $id)
    {
        $stnk           = Stnk::findOrFail($id);
        $update_stnk    = $request->all();

        $validasi = Validator::make($update_stnk, [
            'no_stnk'                   => 'required|unique:stnk,no_stnk,' . $id,
            'jenis_kendaraans_id'       => 'required',
            'silinder'                  => 'required',
            'tnkb'                      => 'required',
            'pkb'                       => 'required',
            'nama_stnk'                 => 'required',
            'nilai_pajak_stnk'          => 'nullable',
            'no_polisi'                 => 'required|unique:stnk,no_polisi,' . $id,
            'model'                     => 'required',
            'no_mesin'                  => 'required|unique:stnk,no_mesin,' . $id,
            'swdkllj'                   => 'required',
            'bahan_bakar'               => 'required',
            'warna'                     => 'required',
            'pajak_jasa'                => 'nullable',
            'merk'                      => 'required',
            'no_rangka'                 => 'required|unique:stnk,no_rangka,' . $id,
            'masa_berlaku'              => 'required',
            'jasa_perpanjang'           => 'nullable',
            'tahun_kendaraan'           => 'required',
            'no_bpkb'                   => 'nullable',
            'pajak_stnk'                => 'required',
            'status_id'                 => 'required',
        ]);

        $createHistoryStnk = [];
        foreach ($update_stnk as $key => $value) {

            if (!in_array($key, array("_token", "id", "_method"))) {

                $stnk_bukan = Stnk::where($key, 'LIKE', '%' . $value . '%')->find($id);

                if (is_null($stnk_bukan)) {
                    $createHistoryStnk[$key] = $value;
                }

                $row[$key] = $value;
            }
        }

        if ($validasi->fails()) {
            return redirect()->route('stnk.edit', $id)->withErrors($validasi)->withInput();
        }


        $createHistoryStnk['stnk_id'] = $id;
        $createHistoryStnk['users_id'] = Auth::user()->id;
        // dd($createHistoryStnk);
        StnkHistory::create($createHistoryStnk);

        $stnk->update($update_stnk);

        return redirect()->route('stnk.index', $id)->with('status', 'Data berhasil diupdate..');
    }

    public function detail($id)
    {
        $detail_stnk        = Stnk::findOrFail($id);
        $detil_history      = StnkHistory::where('stnk_id', $id)->orderBy('id', 'desc')->get();
        // dd($detil_history);

        return view('stnk.detail', compact('detail_stnk', 'detil_history'));
    }
}
