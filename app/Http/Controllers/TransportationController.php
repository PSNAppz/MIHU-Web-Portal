<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transportation as Transport;
use Session;
use View;
use App\Http\Requests;
use App\Log;
use Auth;

class TransportationController extends Controller
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
        $transportations = Transport::orderBy('dest')->paginate(15);
        return view('Transportation.index')->withTransportations($transportations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Transportation.add');

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
               'busno'           => 'required|max:255',
               'contact'         => 'required|numeric',
               'from'            => 'required|max:255',
               'dest'            => 'required|max:255',
               'deptime'         => 'required|max:255',
               'parking'         => 'required|max:255',
               'status'          => 'required|numeric',
           ));
       // store in the database
       $transportations = new Transport;
       $transportations->busno = $request->busno;
       $transportations->contact = $request->contact;
       $transportations->from = $request->from;
       $transportations->dest = $request->dest;
       $transportations->deptime = $request->deptime;
       $transportations->parking = $request->parking;
       $transportations->status = $request->status;
       $transportations->save();
       $log = new Log;
       $log->user_id=Auth::user()->id;
       $log->action="Added a Transportation";
       $log->actionval = 1;
       $log->save();
       $request->session()->flash('success', 'Transportation Details successfully added!');
       return redirect()->route('transportation.index');
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
         $tr = Transport::find($id);
         return view('Transportation.edit')->withTr($tr);
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
         $tr = Transport::find($id);

         $this->validate($request, array(
                 'busno'           => 'required|max:255',
                 'contact'         => 'required|numeric',
                 'from'            => 'required|max:255',
                 'dest'            => 'required|max:255',
                 'deptime'         => 'required|max:255',
                 'parking'         => 'required|max:255',
                 'status'          => 'required|numeric',
             ));
     $input = $request->all();
     $tr->fill($input)->save();
     $log = new Log;
     $log->user_id=Auth::user()->id;
     $log->action="Updated a Transportation";
     $log->actionval = 2;
     $log->save();
     Session::flash('success', 'Transportation details successfully edited!');
     return redirect()->route('transportation.index');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $tr = Transport::find($id);
         $tr->delete();
         $log = new Log;
         $log->user_id=Auth::user()->id;
         $log->action="Deleted a Transportation";
         $log->actionval = 3;
         $log->save();
         Session::flash('success', 'Transportation details succesfully removed!');
         return redirect()->route('transportation.index');
     }
}
