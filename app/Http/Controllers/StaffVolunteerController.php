<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\StaffVolunteer;
use Session;
use View;
use App\Log;
use Auth;

class StaffVolunteerController extends Controller
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
        $staff = StaffVolunteer::paginate(15);
        return view('StaffVolunteer.index')->withStaff($staff);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('StaffVolunteer.add');
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
           ));
       // store in the database
       $staff = new StaffVolunteer;
       $staff->name = $request->name;
       $staff->seva = $request->seva;
       $staff->department = $request->department;
       $log = new Log;
       $log->user_id=Auth::user()->id;
       $log->name=Auth::user()->name;
       $log->action="Created a StaffVolunteer";
       $log->actionval = 1;
       $log->save();
       $staff->save();
       $request->session()->flash('success', 'StaffVolunteer Details successfully added!');
       return redirect()->route('staffvolunteer.index');
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
        $staff = StaffVolunteer::find($id);
        return view('StaffVolunteer.edit')->withStaff($staff);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $staff = StaffVolunteer::find($id);

        $this->validate($request, array(
                'name'          => 'required|max:255',
                'seva'        => 'required|max:255',
                'department'   => 'required|max:255',
            ));
            $input = $request->all();
            $log = new Log;
            $log->user_id=Auth::user()->id;
            $log->name=Auth::user()->name;
            $log->action="Updated a StaffVolunteer";
            $log->actionval = 2;
            $log->save();
            $staff->fill($input)->save();
            Session::flash('success', 'StaffVolunteer details successfully edited!');
            return redirect()->route('staffvolunteer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = StaffVolunteer::find($id);
        $log = new Log;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Deleted a StaffVolunteer";
        $log->actionval = 3;
        $log->save();
        $staff->delete();
        Session::flash('success', 'StaffVolunteer details successfully removed!');
        return redirect()->route('staffvolunteer.index');
    }
}
