<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Accommodation;
use Illuminate\Support\Facades\DB;
use App\SpecialEvent as SE;
use Session;
use View;
use App\Log;
use Auth;

class SpecialEventController extends Controller
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
        $se = SE::paginate(15);
        return view('SpecialEvent.index')->withSe($se);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SpecialEvent.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'category'          => 'required|numeric',
                'date'              => 'required|max:255',
                'time'              => 'required|max:255',
                'location'          => 'required|max:255',
                'coordinator'       => 'required|max:255',
                'contact'           => 'required|max:255',
            ));
        // store in the database
        $se = new SE;
        $se->category = $request->category;
        $se->date = $request->date;
        $se->time = $request->time;
        $se->location = $request->location;
        $se->coordinator = $request->coordinator;
        $se->contact = $request->contact;
        $log = new Log;
        $log->user_id=Auth::user()->id;
        $log->action="Added a Special Event";
        $log->save();
        $se->save();
        $request->session()->flash('success', 'Special Event successfully added!');
        return redirect()->route('specialevents.index');
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
        $se = SE::find($id);
        return view('SpecialEvent.edit')->withSe($se);
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
        $se = SE::find($id);
        $this->validate($request, array(
                'category'          => 'required|numeric',
                'date'              => 'required|max:255',
                'time'              => 'required|max:255',
                'location'          => 'required|max:255',
                'coordinator'       => 'required|max:255',
                'contact'           => 'required|max:255',
            ));
        $input = $request->all();
        $se->fill($input)->save();
        $log = new Log;
        $log->user_id=Auth::user()->id;
        $log->action="Updated a Special Event";
        $log->save();
        Session::flash('success', 'Special Event successfully edited!');
        return redirect()->route('specialevents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $se = SE::find($id);
        $se->delete();
        $log = new Log;
        $log->user_id=Auth::user()->id;
        $log->action="Deleted a Special Event";
        $log->save();
        Session::flash('success', 'Special Event successfully removed!');
        return redirect()->route('specialevents.index');
    }
}
