<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Food as Foo;

use Session;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Foo::paginate(15);
        return view('Food.index')->withFood($food);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Food.add');
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
             'category'    => 'required|numeric',
             'meal'        => 'required|max:255',
             'time'        => 'required|max:255',
             'nearby'      => 'required|max:255',
             'counter'     => 'required|max:255',
         ));
      // store in the database

      $food = new Foo;
      $food->category = $request->category;
      $food->meal = $request->meal;
      $food->time = $request->time;
      $food->nearby = $request->nearby;
      $food->counter = $request->counter;
      $food->save();
      $request->session()->flash('success', 'Food Details successfully added!');
      return redirect()->route('food.index');
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
      $food = Foo::find($id);
      return view('Food.edit')->withFood($food);
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
      $food = Foo::find($id);

      $this->validate($request, array(
              'meal'        => 'required|max:255',
              'time'        => 'required|max:255',
              'nearby'      => 'required|max:255',
              'counter'     => 'required|max:255',
          ));

      $input = $request->all();
      $food->fill($input)->save();
      Session::flash('success', 'Food details successfully edited!');
      return redirect()->route('food.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $food = Foo::find($id);
      $food->delete();
      Session::flash('success', 'Food details successfully removed!');
      return redirect()->route('food.index');
    }
}
