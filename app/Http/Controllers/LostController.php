<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lost;
use App\Log;
use Auth;
use Image;
use Storage;
use Session;

class LostController extends Controller
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
        $lost = Lost::paginate(15);
        return view('Lost.index')->withLost($lost);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Lost.add');
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
              'image'              => 'sometimes|image',
              'location'          => 'required|max:255',
              'description'       => 'required|max:255',
          ));
          // store in the database
          $lost = new Lost;
          $lost->category = $request->category;
          $lost->location = $request->location;
          $lost->description = $request->description;

          //check if image was uploaded
          if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'.$fileName);
            Image::make($image)->resize(800, 400)->save($location);
            $lost->image = $fileName;
          } else {
            $lost->image = '';
          }
          $log = new Log;
          $log->user_id = Auth::user()->id;
          $log->name = Auth::user()->name;
          $log->action = "Added a Lost/Missing Event";
          $log->actionval = 1;
          $log->save();
          $lost->save();
          $request->session()->flash('success', 'Lost & Found successfully added!');
          return redirect()->route('lost.index');
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
      $lost = Lost::find($id);

      return view('Lost.edit')->withLost($lost);
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
      $this->validate($request, array(
              'category'          => 'required|numeric',
              'image'              => 'sometimes|image',
              'location'          => 'required|max:255',
              'description'       => 'required|max:255',
          ));

      $lost = Lost::find($id);
      $lost->category = $request->category;
      $lost->location = $request->location;
      $lost->description = $request->description;

      //check if image was uploaded
      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $fileName = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('images/'.$fileName);
        Image::make($image)->resize(800, 400)->save($location);
        $oldImage = $lost->image;
        Storage::delete($oldImage);
        $lost->image = $fileName;
      }

      $log = new Log;
      $log->user_id = Auth::user()->id;
      $log->name = Auth::user()->name;
      $log->action = "Edited a Lost/Missing Event";
      $log->actionval = 1;
      $log->save();
      $lost->save();
      $request->session()->flash('success', 'Lost & Found successfully edited!');
      return redirect()->route('lost.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $lost = Lost::find($id);
      $lost->delete();
      $log = new Log;
      $log->user_id=Auth::user()->id;
      $log->name=Auth::user()->name;
      $log->action="Deleted a Lost & Found";
      $log->actionval = 3;
      $log->save();
      Session::flash('success', 'Lost & Found successfully removed!');
      return redirect()->route('lost.index');
    }
}
