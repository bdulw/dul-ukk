<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ActivityLog;
use App\Models\Product;
use App\Models\TransaksiHeader;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::select()->count();
        $products = Product::all();
        $product = Product::select()->count();
        $trxheader = TransaksiHeader::select()->count();
        $activity = ActivityLog::select()->count();
        $activity_log = ActivityLog::with('user')->latest()->limit(10)->orderBy('id','DESC')->get();

        return view('home', compact('user', 'activity_log', 'product', 'trxheader', 'activity', 'products'));
    }
}