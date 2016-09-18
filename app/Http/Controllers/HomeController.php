<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use Session;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = Log::paginate(15);
        return view('home')->withLogs($logs);
    }
    public function destroy()
    {
      DB::table('logs')->truncate();
      Session::flash('success', 'Logs Cleared');
      return redirect()->back();
    }
}
