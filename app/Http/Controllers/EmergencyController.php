<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Emergency as Emergency;

use App\Medical as Medical;

use Session;

class EmergencyController extends Controller
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
    $emergency = Emergency::paginate(15);
    $medical = Medical::paginate(15);
    return view('Medical.index')->withMedical($medical)->withEmergency($emergency);

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function create()
  {
      return view('Emergency.create');
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
           'service'      => 'required|max:255',
           'name'      => 'required|max:255',
           'contact'  => 'required|max:255',
       ));
    // store in the database

    $emergency = new Emergency;
    $emergency->service = $request->service;
    $emergency->name = $request->name;
    $emergency->contact = $request->contact;
    $emergency->save();
    Session::flash('success', 'Emergency Details successfully added!');
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
    $emergency = Emergency::find($id);
    return view('Emergency.edit')->withEmergency($emergency);
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
    $emergency = Emergency::find($id);

    $this->validate($request, array(
            'service'      => 'required|max:255',
            'name'      => 'required|max:255',
            'contact'  => 'required|max:255',
        ));

    $input = $request->all();
    $emergency->fill($input)->save();
    Session::flash('success', 'Emergency details successfully edited!');
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
    $emergency = Emergency::find($id);
    $emergency->delete();
    Session::flash('success', 'Emergency details successfully removed!');
    return redirect()->route('medical.index');
  }
}
