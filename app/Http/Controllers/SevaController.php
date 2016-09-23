<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Seva;
use Session;
use View;
use App\Log;
use Auth;

class SevaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only' => 'create','store','edit','update','destroy']);
    }

    public function index()
    {
        $seva = Seva::paginate(15);
        return view('Seva.index')->withSeva($seva);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Seva.add');
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
               'place'          => 'required|max:255',
               'seva'         => 'required|max:255',
               'location'          => 'required|max:255',
               'coordinator'   => 'required|max:255',
               'contact'   => 'required|numeric',

           ));
       // store in the database
       $seva = new Seva;
       $seva->place = $request->place;
       $seva->seva = $request->seva;
       $seva->location = $request->location;
       $seva->coordinator= $request->coordinator;
       $seva->contact = $request->contact;
       $log = new Log;
       $log->user_id=Auth::user()->id;
       $log->name=Auth::user()->name;
       $log->action="Created a Seva";
       $log->actionval = 1;
       $log->save();
       $seva->save();
       $request->session()->flash('success', 'Seva Details successfully added!');
       return redirect()->route('seva.index');
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
        $seva = Seva::find($id);
        return view('Seva.edit')->withSeva($seva);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cord = Seva::find($id);

        $this->validate($request, array(
                'place'          => 'required|max:255',
                'seva'         => 'required|max:255',
                'location'          => 'required|max:255',
                'coordinator'   => 'required|max:255',
                'contact'   => 'required|numeric',

            ));
            $input = $request->all();
            $log = new Log;
            $log->user_id=Auth::user()->id;
            $log->name=Auth::user()->name;
            $log->action="Updated a Seva";
            $log->actionval = 2;
            $log->save();
            $cord->fill($input)->save();
            Session::flash('success', 'Seva details successfully edited!');
            return redirect()->route('seva.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cord = Seva::find($id);
        $log = new Log;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Deleted a Seva";
        $log->actionval = 3;
        $log->save();
        $cord->delete();
        Session::flash('success', 'Seva details successfully removed!');
        return redirect()->route('seva.index');
    }
}
