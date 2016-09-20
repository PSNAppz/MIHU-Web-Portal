<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use Session;
use DB;
use App\User;
use Auth;

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
        $logs = Log::all();
        $users = User::all();
        return view('home',compact('logs','users'));
    }
    public function destroy()
    {
      DB::table('logs')->truncate();
      $log = new Log;
      $log->user_id=Auth::user()->id;
      $log->name=Auth::user()->name;
      $log->action="Cleared Logs";
      $log->actionval = 3;
      $log->save();
      Session::flash('success', 'Logs Cleared');
      return redirect()->back();
    }
}
