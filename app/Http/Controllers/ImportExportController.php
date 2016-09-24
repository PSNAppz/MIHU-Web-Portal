<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transportation as Trans;
use App\Accommodation as Acc;
use App\Darshan as Darshu;
use App\Food as Foo;
use App\Security as Sec;
use App\Coordinator as Cord;
use App\SpecialEvent as SE;
use App\Medical as Med;
use App\Seva;
use App\Volunteer as Vol;
use App\StaffVolunteer;
use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Session;
use View;
use App\Darshan;
use Illuminate\Support\Facades\Input;

class ImportExportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    	public function downloadExcel($database,$type)
    	{
            if($database=="accommodations"){
    		$data = Acc::get()->toArray();
    		return Excel::create('AccommodationMIHU', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="transport"){
    		$data = Trans::get()->toArray();
    		return Excel::create('TransportationMIHU', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="seva"){
    		$data = Seva::get()->toArray();
    		return Excel::create('TransportationMIHU', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="darshan"){
    		$data = Darshu::get()->toArray();
    		return Excel::create('DarshanMIHU', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="security"){
    		$data = Sec::get()->toArray();
    		return Excel::create('SecurityMIHU', function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
            }
            if($database=="specialevent"){
            $data = SE::get()->toArray();
            return Excel::create('SpecialeventsMIHU', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
            if($database=="food"){
            $data = Foo::get()->toArray();
            return Excel::create('FoodMIHU', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
            if($database=="coordinator"){
            $data = Cord::get()->toArray();
            return Excel::create('CoordinatorsMIHU', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
            if($database=="volunteer"){
            $data = Vol::get()->toArray();
            return Excel::create('VolunteersMIHU', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                    $sheet->fromArray($data);
                });
            })->download($type);
            }
            if($database=="staff"){
            $data = StaffVolunteer::get()->toArray();
            return Excel::create('StaffMIHU', function($excel) use ($data) {
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
                        redirect()->route('home');
    			}
    		}
        }
            elseif($database =='volunteer'){
                if(Input::hasFile('import_file')){
                    $path = Input::file('import_file')->getRealPath();
                    $data = Excel::load($path, function($reader) {
                    })->get();
                    if(!empty($data) && $data->count()){
                        foreach ($data as $key => $value) {
                            Vol::create([
                                'name' => $value->name,
                                'batch' => $value->batch,
                                'campus' => $value->campus,
                                'contact' => $value->contact,
                                'seva' => $value->seva,
                                'cordname' => $value->cordname,
                                'cordcontact' => $value->cordcontact
                            ]);
                        }
                        dd('Insert Record successfully.');
                        redirect()->route('home');
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
                        'status'=>$value->status
                    ]);
                    }
                        dd('Insert Record successfully.');
                        redirect()->route('home');
                }
            }
        }
        elseif ($database == 'seva') {
            if(Input::hasFile('import_file')){
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                        Seva::create([
                        'place' => $value->place,
                        'seva' => $value->seva,
                        'location' => $value->location,
                        'coordinator' => $value->coordinator,
                        'contact' => $value->contact
                    ]);
                    }
                        dd('Insert Record successfully.');
                        redirect()->route('home');
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
                        'token_time' => $value->token_time
                    ]);
                    }
                        dd('Insert Record successfully.');
                        redirect()->route('home');
                }
            }
        }
        elseif($database == 'coordinator'){
            if(Input::hasFile('import_file')){
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                        Cord::create([
                        'name' => $value->name,
                        'seva' => $value->seva,
                        'department' => $value->department,
                        'contact' => $value->contact
                    ]);
                    }
                    dd('Insert Record successfully.');
-                        redirect()->route('home');
                }
            }
        }
        elseif($database == 'staff'){
            if(Input::hasFile('import_file')){
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                        StaffVolunteer::create([
                        'name' => $value->name,
                        'seva' => $value->seva,
                        'department' => $value->department,
                    ]);
                    }
                    dd('Insert Record successfully.');
-                        redirect()->route('staffvolunteer');
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
                        redirect()->route('home');
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
                        'location' => $value->location,
                        'nearby' => $value->nearby,
                        'from' => $value->from,
                        'to'=> $value->to,
                        'batch'=> $value->batch,
                        'contact'=> $value->contact
                    ]);
                    }
                        dd('Insert Record successfully.');
                        redirect()->route('home');
                }
            }
        }
        elseif($database == 'specialevent'){
            if(Input::hasFile('import_file')){
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                        SE::create([
                        'busno' => $value->busno,
                        'contact' => $value->contact,
                        'from' => $value->from,
                        'dest' => $value->dest,
                        'deptime' => $value->deptime,
                        'parking'=> $value->parking,
                        'status'=>$value->status
                    ]);
                    }
                        dd('Insert Record successfully.');
                        redirect()->route('home');
                }
            }
        }
        else{
            return view('home');
        }


    		return back();
    	}
}
