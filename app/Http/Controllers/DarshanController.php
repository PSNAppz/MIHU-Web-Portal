<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Darshan as Darshu;
use App\Newsfeed as News;
use Session;
use View;
use App\Log;
use Auth;

class DarshanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth',['only' => 'create','store','edit','update','destroy']);
     }

    public function index()
    {
      $darshan = Darshu::paginate(15);
      $news = News::paginate(15);
      return view('Darshan.index')->withDarshan($darshan)->withNews($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Darshan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate Data
        $this->validate($request, array(
          'darshan_time'=>'required',
          'date'=>'required',
          'token_loc'=>'required',
          'token_time'=>'required',
        ));
        //store
        $darshan = new Darshu;
        $darshan->darshan_time = $request->darshan_time;
        $darshan->date = $request->date;
        $darshan->token_loc = $request->token_loc;
        $darshan->token_time = $request->token_time;
        $log = new Log;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Created Darshan Timing";
        $log->actionval = 1;
        $log->save();
        $darshan->save();
        $request->session()->flash('success', 'Darshan Timings successfully added!');
        return redirect()->route('darshan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $dar = Darshu::find($id);
      return view('Darshan.edit')->withDar($dar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $dar = Darshu::find($id);

      $this->validate($request, array(
              'darshan_time'    => 'required|max:255',
              'date'            => 'required|max:255',
              'token_loc'       => 'required|max:255',
              'token_time'      => 'required|max:255',
          ));

      $input = $request->all();
      $log = new Log;
      $log->user_id=Auth::user()->id;
      $log->name=Auth::user()->name;
      $log->action="Updated Darshan Timing";
      $log->actionval = 2;
      $log->save();
      $dar->fill($input)->save();
      Session::flash('success', 'Darshan details successfully edited!');
      return redirect()->route('darshan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $dar = Darshu::find($id);
      $log = new Log;
      $log->user_id=Auth::user()->id;
      $log->name=Auth::user()->name;
      $log->action="Deleted Darshan Timing";
      $log->actionval = 3;
      $log->save();
      $dar->delete();
      Session::flash('success', 'Darshan details successfully removed!');
      return redirect()->route('darshan.index');
    }
}
