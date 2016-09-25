<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Coordinator;
use Session;
use View;
use App\Log;
use Auth;


class CoordinatorController extends Controller
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
        $coordinators = Coordinator::get();
        return view('Coordinator.index')->withCoordinators($coordinators);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Coordinator.add');
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
               'seva'        => 'required|max:255',
               'department'   => 'required|max:255',
               'contact'          => 'required|numeric',
           ));
       // store in the database
       $coordinators = new Coordinator;
       $coordinators->name = $request->name;
       $coordinators->seva = $request->seva;
       $coordinators->department = $request->department;
       $coordinators->contact = $request->contact;
       $log = new Log;
       $log->user_id=Auth::user()->id;
       $log->name=Auth::user()->name;
       $log->action="Created a Coordinator";
       $log->actionval = 1;
       $log->save();
       $coordinators->save();
       $request->session()->flash('success', 'Coordinator Details successfully added!');
       return redirect()->route('coordinator.index');
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
        $cord = Coordinator::find($id);
        return view('Coordinator.edit')->withCord($cord);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cord = Coordinator::find($id);

        $this->validate($request, array(
                'name'          => 'required|max:255',
                'seva'        => 'required|max:255',
                'department'   => 'required|max:255',
                'contact'          => 'required|numeric',
            ));
            $input = $request->all();
            $log = new Log;
            $log->user_id=Auth::user()->id;
            $log->name=Auth::user()->name;
            $log->action="Updated a Coordinator";
            $log->actionval = 2;
            $log->save();
            $cord->fill($input)->save();
            Session::flash('success', 'Coordinator details successfully edited!');
            return redirect()->route('coordinator.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cord = Coordinator::find($id);
        $log = new Log;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Deleted a Coordinator";
        $log->actionval = 3;
        $log->save();
        $cord->delete();
        Session::flash('success', 'Coordinator details successfully removed!');
        return redirect()->route('coordinator.index');
    }
}
