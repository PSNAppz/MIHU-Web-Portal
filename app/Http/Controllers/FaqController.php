<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Faq as Faq;
use Illuminate\Support\Facades\DB;
use Session;
use View;
use App\Log;
use Auth;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth',['only' => 'create','store','edit','update','destroy','importExport','downloadExcel','importExcel']);
     }

    public function index()
    {
        $faq = Faq::paginate(15);
        return view('Faq.index')->withFaq($faq);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Faq.add');

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
               'ques'          => 'required|max:255',
               'ans'           => 'required',
           ));
       // store in the database
       $log = new Log;
       $log->user_id=Auth::user()->id;
       $log->name=Auth::user()->name;
       $log->action="Created a FAQ";
       $log->actionval = 1;
       $log->save();
       $faq = new Faq;
       $faq->ques = $request->ques;
       $faq->ans = $request->ans;
       $faq->save();
       $request->session()->flash('success', 'FAQ successfully added!');
       return redirect()->route('faq.index');
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
        $faq = Faq::find($id);
        return view('Faq.edit')->withFaq($faq);
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
        $faq = Faq::find($id);

        $this->validate($request, array(
                'ques'          => 'required|max:255',
                'ans'           => 'required',
            ));

    $input = $request->all();
    $log = new Log;
    $log->user_id=Auth::user()->id;
    $log->name=Auth::user()->name;
    $log->action="Updated a FAQ";
    $log->actionval = 2;
    $log->save();
    $faq->fill($input)->save();
    Session::flash('success', 'FAQ successfully edited!');
    return redirect()->route('faq.index');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = Faq::find($id);
        $log = new Log;
        $log->user_id=Auth::user()->id;
        $log->name=Auth::user()->name;
        $log->action="Deleted a FAQ";
        $log->actionval = 3;
        $log->save();
        $faq->delete();
        Session::flash('success', 'FAQ successfully removed!');
        return redirect()->route('faq.index');
    }

}
