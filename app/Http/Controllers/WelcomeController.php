<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Newsfeed as Newsfee;

use App\Log;

use Auth;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $newsfeed = Newsfee::orderBy('id', 'desc')->get();
         return view('welcome')->withNewsfeed($newsfeed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addnews');
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
        'message'=>'required|max:255'
      ));
      //store
      $newsfeed = new Newsfee;
      $newsfeed->message = $request->message;
      $log = new Log;
      $log->user_id=Auth::user()->id;
      $log->name=Auth::user()->name;
      $log->action="Created Newsfeed";
      $log->actionval = 1;
      $log->save();
      $newsfeed->save();

      return redirect()->route('welcome.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $newsfeed = Newsfee::find($id);
      $log = new Log;
      $log->user_id=Auth::user()->id;
      $log->name=Auth::user()->name;
      $log->action="Deleted Darshan Timing";
      $log->actionval = 3;
      $log->save();
      $newsfeed->delete();
      return redirect()->route('welcome.index');
    }
}
