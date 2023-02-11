<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ActivityLog;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all()->count();
        $activity_log = ActivityLog::with('user')->latest()->limit(10)->orderBy('id','DESC')->get();
        
        return view('activity.index', compact('user', 'activity_log'));
    }
}
