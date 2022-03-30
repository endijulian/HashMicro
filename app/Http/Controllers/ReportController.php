<?php

namespace App\Http\Controllers;

use App\Models\SdsoMain;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        // $region = SdsoMain::where('type_so_id', 3)->get();

        // $with['region'] = $region;
        return view('report.index');
    }
}
