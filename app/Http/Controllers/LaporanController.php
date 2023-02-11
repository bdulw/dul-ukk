<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiHeader;
use App\Models\User;

class LaporanController extends Controller
{
    //index transaksi
    public function index()
    {
        $trx = TransaksiHeader::all();
        return view('laporan.index', compact('trx'));
    }

    public function search(Request $request)
    {

        $keyword = $request->search;
        $trx = TransaksiHeader::where('user_id', 'like', "%" . $keyword . "%")->paginate(5);
        return view('laporan.index', compact('trx'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}