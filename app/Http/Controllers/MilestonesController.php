<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Milestone;
use App\Task;
use App\User;

class MilestonesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $meilensteine = Milestone::all();

      return view('meilensteine', compact('meilensteine'));
    }

    public function show(Milestone $meilenstein)
    {
      return $meilenstein;
    }

    //Anzeigen der Aufgaben von einem bestimmten Meilenstein über die URL, bspw. "../meilensteine/1/aufgaben"
    public function allSpecificTasks(Milestone $meilenstein)
    {
        $tasks = Task::all()->where('milestone_id', '=', $meilenstein->id);
        $users = User::all();
        $meilensteine = Milestone::all();
        $mid=$meilenstein->id;

        return view('aufgaben', compact('tasks','users','meilensteine','mid'));
    }
    //Speichern
    public function store(Request $request)
        {
        	$mileInfo = new Milestone;

        	$mileInfo->name = $request->input('name');
        	$mileInfo->description = $request->input('description');
        	$mileInfo->duedate=date('Y-m-d H:i:s',strtotime($request->input('duedate')));

        	$mileInfo->statusPercentage=0;

        	if ($mileInfo->save()) {
        		return redirect('meilensteine');
        	} else {
        		return back()->withInput()->withErrors('error,please retry');
        	}
        }
 

        /*
         * update
         */
    public function update(Request $request)
    {
    	$meilenstein=$request->input('hiddenId');

        $info = Milestone::find($meilenstein);

        $info->name = $request->input('name');
        $info->description = $request->input('description');
        $info->duedate = date('Y-m-d H:i:s',strtotime($request->input('duedate')));
        

        if ($info->save()) {
        	return redirect('meilensteine');
        } else {
        	return back()->withInput()->withErrors('error,please retry');
        }
     }
}
