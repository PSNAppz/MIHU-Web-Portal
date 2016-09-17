<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transportation as Trans;
use App\Accommodation as Acc;
use App\Darshan as Darshu;
use App\Food as Foo;
use App\Security as Sec;
use App\Coordinator as Cord;
use Illute\Support\Facades\Input;
use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Session;
use View;
use App\Darshan;

class ImportExportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


        public function importExport()
    	{
    		return view('ImportExport.index');
    	}
    	public function downloadExcel($database,$type)
    	{
            if($database=="accommodations"){
    		$data = Acc::get()->toArray();
    		return Excel::create('accommodations', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="transport"){
    		$data = Trans::get()->toArray();
    		return Excel::create('transportations', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="darshan"){
    		$data = Faq::get()->toArray();
    		return Excel::create('darshans', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="security"){
    		$data = Faq::get()->toArray();
    		return Excel::create('securities', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="specialevent"){
            $data = Trans::get()->toArray();
            return Excel::create('specialevents', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
            if($database=="medical"){
            $data = Trans::get()->toArray();
            return Excel::create('medicals', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
            if($database=="food"){
            $data = Trans::get()->toArray();
            return Excel::create('foods', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
            if($database=="coordinator"){
            $data = Trans::get()->toArray();
            return Excel::create('coordinators', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
    	}

    	public function importExcel($database)
    	{
            //Accommodations
            if($database =='accommodations'){
    		if(Input::hasFile('import_file')){
    			$path = Input::file('import_file')->getRealPath();
    			$data = Excel::load($path, function($reader) {
    			})->get();
    			if(!empty($data) && $data->count()){
    				foreach ($data as $key => $value) {
    					Acc::create([
                        'gender' => $value->gender,
                        'areaName' => $value->areaname,
                        'locationofAcc' => $value->locationofacc,
                        'nearby' => $value->nearby,
                        'isFull' => $value->isfull
                    ]);
    				}
    					dd('Insert Record successfully.');
                        redirect()->route('impexp');
    			}
    		}
        }
        //Faq
        elseif ($database == 'transport') {
            if(Input::hasFile('import_file')){
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                        Trans::create([
                        'busno' => $value->busno,
                        'contact' => $value->contact,
                        'from' => $value->from,
                        'dest' => $value->dest,
                        'deptime' => $value->deptime,
                        'parking'=> $value->parking,
                        'status'=>$value->status;
                    ]);
                    }
                        dd('Insert Record successfully.');
                        redirect()->route('impexp');
                }
            }
        }
        elseif($database == 'darshan'){
            if(Input::hasFile('import_file')){
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                        Darshu::create([
                        'darshan_time' => $value->darshan_time,
                        'date' => $value->date,
                        'token_loc' => $value->token_loc,
                        'token_time' => $value->token_time,
                        'contact_name' => $value->contact_name,
                        'contact_no'=> $value->contact_no
                    ]);
                    }
                        dd('Insert Record successfully.');
                        redirect()->route('impexp');
                }
            }
        }
        elseif($database == 'coordinators'){
            if(Input::hasFile('import_file')){
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                        Cord::create([
                        'name' => $value->name,
                        'seva' => $value->seva,
                        'occupation' => $value->occupation,
                        'contact' => $value->contact
                    ]);
                    }
                        dd('Insert Record successfully.');
                        redirect()->route('impexp');
                }
            }
        }
        elseif($database == 'food'){
            if(Input::hasFile('import_file')){
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                        Foo::create([
                        'meal' => $value->meal,
                        'counter' => $value->counter,
                        'nearby' => $value->nearby,
                        'time' => $value->time,
                        'category' => $value->category
                    ]);
                    }
                        dd('Insert Record successfully.');
                        redirect()->route('impexp');
                }
            }
        }
        elseif($database == 'security'){
            if(Input::hasFile('import_file')){
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                        Sec::create([
                        'name' => $value->name,
                        'iscord' => $value->iscord,
                        'location' => $value->from,
                        'nearby' => $value->nearby,
                        'from' => $value->from,
                        'to'=> $value->to,
                        'batch'=> $value->batch,
                        'contact'=> $value->contact
                    ]);
                    }
                        dd('Insert Record successfully.');
                        redirect()->route('impexp');
                }
            }
        }
        elseif($database == 'medical'){
            if(Input::hasFile('import_file')){
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                        Acc::create([
                        'busno' => $value->busno,
                        'contact' => $value->contact,
                        'from' => $value->from,
                        'dest' => $value->dest,
                        'deptime' => $value->deptime,
                        'parking'=> $value->parking,
                        'status'=>$value->status;
                    ]);
                    }
                        dd('Insert Record successfully.');
                        redirect()->route('impexp');
                }
            }
        }
        else{
            redirect()->route('impexp');
        }


    		return back();
    	}
}
