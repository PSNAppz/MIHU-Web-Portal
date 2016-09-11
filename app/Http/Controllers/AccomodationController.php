<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AccomodationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         //
         $this->middleware('auth',['only' => 'create','store']);
     }

    public function index()
    {
        $accomodations = DB::table('accomodation_details')->get();
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
               'areaName'        => 'required|max:255',
               'locationofAcc'   => 'required|max:255',
               'isFull'   => 'required|integer',
           ));
       // store in the database
       $accomodations = new Post;
       $accomodations->areaName = $request->areaName;
       $accomodations->locationofAcc = $request->locationofAcc;
       $accomodations->isFull = $request->isFull;
       $accomodations->save();
       Session::flash('success', 'Succesfully Added New Accomodation Details!');
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
        //
    }
}
