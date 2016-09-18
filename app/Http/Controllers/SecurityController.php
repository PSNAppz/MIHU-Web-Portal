<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Security as Sec;
use Session;
use View;
use App\Log;
use Auth;

class SecurityController extends Controller
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
        $sec= Sec::paginate(10);
        return view('Security.index')->withSec($sec);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Security.add');
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
               'iscord'          => 'required|numeric',
               'location'          => 'required|max:255',
               'nearby'          => 'required|max:255',
               'from'          => 'required|max:255',
               'to'          => 'required|max:255',
               'batch'          => 'required|max:255',
               'contact'          => 'required|max:255',
           ));
           $log = new Log;
           $log->user_id=Auth::user()->id;
           $log->action="Added a Security";
           $log->save();
       // store in the database
       $sec = new Sec;
       $sec->name = $request->name;
       $sec->iscord = $request->iscord;
       $sec->location = $request->location;
       $sec->nearby = $request->nearby;
       $sec->from = $request->from;
       $sec->to = $request->to;
       $sec->batch = $request->batch;
       $sec->contact = $request->contact;
       $sec->save();
       $request->session()->flash('success', 'Security details successfully added!');
       return redirect()->route('security.index');
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
        $sec = Sec::find($id);
        return view('Security.edit')->withSec($sec);
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
        $sec = Sec::find($id);
        $this->validate($request, array(
                'name'          => 'required|max:255',
                'iscord'          => 'required|numeric',
                'location'          => 'required|max:255',
                'nearby'          => 'required|max:255',
                'from'          => 'required|max:255',
                'to'          => 'required|max:255',
                'batch'          => 'required|max:255',
                'contact'          => 'required|max:255',
            ));
            $log = new Log;
            $log->user_id=Auth::user()->id;
            $log->action="Updated a Security";
            $log->save();
            $input = $request->all();
            $sec->fill($input)->save();
            Session::flash('success', 'Security details successfully edited!');
            return redirect()->route('security.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sec = Sec::find($id);
        $log = new Log;
        $log->user_id=Auth::user()->id;
        $log->action="Deleted a Security";
        $log->save();
        $sec->delete();
        Session::flash('success', 'Security details successfully removed!');
        return redirect()->route('security.index');
    }
}
