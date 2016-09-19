<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Volunteer;
use Illuminate\Support\Facades\DB;
use App\Volunteer;
use Session;
use View;
use App\Log;
use Auth;

class VolunteerController extends Controller
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
             $volunteers = Volunteer::paginate(15);
             return view('Volunteer.index')->withVolunteers($volunteers);
         }
         /**
          * Show the form for creating a new resource.
          *
          * @return \Illuminate\Http\Response
          */
         public function create()
         {
             return view('Volunteer.add');
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
                    'name'          => 'required|max:255',
                    'batch'         => 'required|max:255',
                    'campus'        => 'required|max:255',
                    'contact'       => 'required|numeric',
                    'seva'          => 'required|numeric',
                    'cordname'      => 'required|max:255',
                    'cordcontact'   => 'required|numeric',

                ));
            // store in the database
            $volunteers = new Volunteer;
            $volunteers->name = $request->name;
            $volunteers->batch = $request->batch;
            $volunteers->campus = $request->campus;
            $volunteers->contact = $request->contact;
            $volunteers->seva = $request->seva;
            $volunteers->cordname= $request->cordname;
            $volunteers->cordcontact = $request->cordcontact;
            $log = new Log;
            $log->user_id=Auth::user()->id;
            $log->name=Auth::user()->name;
            $log->action="Created a Volunteer";
            $log->actionval = 1;
            $log->save();
            $volunteers->save();
            $request->session()->flash('success', 'Volunteer Details successfully added!');
            return redirect()->route('volunteer.index');
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
             $volunteers = Volunteer::find($id);
             return view('Volunteer.edit')->withVolunteers($volunteers);    }

         /**
          * Update the specified resource in storage.
          *
          * @param  \Illuminate\Http\Request  $request
          * @param  int  $id
          * @return \Illuminate\Http\Response
          */
         public function update(Request $request, $id)
         {
             $cord = Volunteer::find($id);

             $this->validate($request, array(
                     'name'          => 'required|max:255',
                     'batch'         => 'required|max:255',
                     'campus'        => 'required|max:255',
                     'contact'       => 'required|numeric',
                     'seva'          => 'required|numeric',
                     'cordname'      => 'required|max:255',
                     'cordcontact'   => 'required|numeric',

                 ));
                 $input = $request->all();
                 $log = new Log;
                 $log->user_id=Auth::user()->id;
                 $log->name=Auth::user()->name;
                 $log->action="Updated a Volunteer";
                 $log->actionval = 2;
                 $log->save();
                 $cord->fill($input)->save();
                 Session::flash('success', 'Volunteer details successfully edited!');
                 return redirect()->route('volunteer.index');
         }

         /**
          * Remove the specified resource from storage.
          *
          * @param  int  $id
          * @return \Illuminate\Http\Response
          */
         public function destroy($id)
         {
             $cord = Volunteer::find($id);
             $log = new Log;
             $log->user_id=Auth::user()->id;
             $log->name=Auth::user()->name;
             $log->action="Deleted a Volunteer";
             $log->actionval = 3;
             $log->save();
             $cord->delete();
             Session::flash('success', 'Volunteer details successfully removed!');
             return redirect()->route('volunteer.index');
         }
     }
