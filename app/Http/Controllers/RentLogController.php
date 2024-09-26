<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\RentLogs;
use Illuminate\Http\Request;

class RentLogController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->toDateString();
        $rentlogs = RentLogs::with(['user', 'book'])->get();
        return view('rentlog', ['rent_logs' => $rentlogs, 'todays' => $today]);
    }
}
