<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Medical as Medical;
use App\Log;
use Auth;
use Session;

class MedicalController extends Controller
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
      $medical = Medical::paginate(15);
      return view('Medical.index')->withMedical($medical);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Medical.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate the data
     $this->validate($request, array(
             'loc'      => 'required|max:255',
             'doc'      => 'required|max:255',
             'contact'  => 'required|max:255',
             'dis'      => 'required|max:255',
             'side'     => 'required|max:255',
         ));
      // store in the database
      $log = new Log;
      $log->user_id=Auth::user()->id;
      $log->name=Auth::user()->name;
      $log->action="Added a Medic";
      $log->actionval = 1;
      $log->save();
      $medical = new Medical;
      $medical->loc = $request->loc;
      $medical->doc = $request->doc;
      $medical->contact = $request->contact;
      $medical->dis = $request->dis;
      $medical->side = $request->side;
      $medical->save();
      //$medical->session()->flash('success', 'Medical Details successfully added!');
      return redirect()->route('medical.index');
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
      $medical = Medical::find($id);
      return view('Medical.edit')->withMedical($medical);
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
      $medical = Medical::find($id);

      $this->validate($request, array(
              'loc'      => 'required|max:255',
              'doc'      => 'required|max:255',
              'contact'  => 'required|max:255',
              'dis'      => 'required|max:255',
          ));
          $log = new Log;
          $log->user_id=Auth::user()->id;
          $log->name=Auth::user()->name;
          $log->action="Updated a Medic";
          $log->actionval = 2;
          $log->save();
      $input = $request->all();
      $medical->fill($input)->save();
      Session::flash('success', 'Medical details successfully edited!');
      return redirect()->route('medical.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $log = new Log;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Deleted a Medic";
        $log->actionval = 3;
        $log->save();
      $medical = Medical::find($id);
      $medical->delete();
      Session::flash('success', 'Medical details successfully removed!');
      return redirect()->route('medical.index');
    }
}
