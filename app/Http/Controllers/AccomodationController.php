<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Accomodation;
use Illuminate\Support\Facades\DB;
use App\Accomodation as Accomodate;
use Session;

class AccomodationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth',['only' => 'create','store']);
     }

    public function index()
    {
        $accomodations = Accomodate::paginate(10);
        return view('Accomodation.index')->withAccomodations($accomodations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Accomodation.add');
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
       $accomodations = new Accomodate;
       $accomodations->gender = $request->gender;
       $accomodations->areaName = $request->areaName;
       $accomodations->locationofAcc = $request->locationofAcc;
       $accomodations->nearby = $request->nearby;
       $accomodations->isFull = $request->isFull;
       $accomodations->save();
       $request->session()->flash('success', 'Accomodation Details successfully added!');
       return redirect()->route('accomodation.index');
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acc = Accomodation::find($id);
        $acc->delete();
        Session::flash('success', 'Accomodation details succesflly removed!');
        return redirect()->route('accomodation.index');
    }
}
