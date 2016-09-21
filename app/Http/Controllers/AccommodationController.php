<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Accommodation;
use Illuminate\Support\Facades\DB;
use App\Accommodation as Accommodate;
use Session;
use View;
use App\Log;
use Auth;

class AccommodationController extends Controller
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
        $accommodations = Accommodate::orderBy('areaName')->paginate(15);
        return view('Accommodation.index')->withAccommodations($accommodations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Accommodation.add');
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
               'gender'          => 'required|numeric',
               'areaName'        => 'required|max:255',
               'locationofAcc'   => 'required|max:255',
               'nearby'          => 'required|max:255',
               'isFull'          => 'required|numeric',
           ));
       // store in the database
       $log = new Log;
       $accommodations = new Accommodate;
       $accommodations->gender = $request->gender;
       $accommodations->areaName = $request->areaName;
       $accommodations->locationofAcc = $request->locationofAcc;
       $accommodations->nearby = $request->nearby;
       $accommodations->isFull = $request->isFull;
       $accommodations->coord = $request->coord;
       $accommodations->contact = $request->contact;
       $log->user_id=Auth::user()->id;
       $log->name=Auth::user()->name;
       $log->action="Added Accommodation";
       $log->actionval = 1;
       $log->save();
       $accommodations->save();
       $request->session()->flash('success', 'Accommodation Details successfully added!');
       return redirect()->route('accommodation.index');
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
        $acc = Accommodate::find($id);
        return view('Accommodation.edit')->withAcc($acc);
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
        $acc = Accommodation::find($id);
        $log = new Log;
        $this->validate($request, array(
                'gender'          => 'required|numeric',
                'areaName'        => 'required|max:255',
                'locationofAcc'   => 'required|max:255',
                'nearby'          => 'required|max:255',
                'isFull'          => 'required|numeric',
            ));

    $input = $request->all();
    $log->user_id=Auth::user()->id;
    $log->name=Auth::user()->name;
    $log->action="Updated an accommodation";
    $log->actionval = 2;
    $log->save();
    $acc->fill($input)->save();
    Session::flash('success', 'Accommodation details successfully edited!');
    return redirect()->route('accommodation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acc = Accommodation::find($id);
        $log = new Log;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Deleted an Accommodation";
        $log->actionval = 3;
        $log->save();
        $acc->delete();
        Session::flash('success', 'Accommodation details successfully removed!');
        return redirect()->route('accommodation.index');
    }


}
