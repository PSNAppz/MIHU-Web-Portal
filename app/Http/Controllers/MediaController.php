<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Media as Medi;
use View;
use Session;
use App\Log;
use Auth;

class MediaController extends Controller
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
     $media=Medi::paginate(15);
     return view('Media.index')->withMedia($media);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('Media.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
      $media = Medi::find($id);
      return view('Media.edit')->withMedia($media);
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
      $media = Medi::find($id);

      $this->validate($request, array(
              'mediaroom'    => 'required|max:255',
              'mediaenc'     => 'required|max:255',
              'name'         => 'required|max:255',
              'phone'        => 'required|max:255',
          ));

      $input = $request->all();
      $log = new Log;
      $log->user_id=Auth::user()->id;
      $log->name=Auth::user()->name;
      $log->action="Updated a Media";
      $log->actionval = 2;
      $log->save();
      $media->fill($input)->save();
      Session::flash('success', 'Media details updated!');
      return redirect()->route('media.index');
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
