<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Milestone;
use App\Task;
use App\User;

class MilestonesController extends Controller
{
    public function index()
    {
      $meilensteine = Milestone::all();

      return view('meilensteine', compact('meilensteine'));
    }

    public function show(Milestone $meilenstein)
    {
      return $meilenstein;
    }

    public function allSpecificTasks(Milestone $meilenstein)
    {
        $tasks = Task::all()->where('milestone_id', '=', $meilenstein->id);
        $users = User::all();
        $meilensteine = Milestone::all();
 
        return view('aufgaben', compact('tasks','users','meilensteine'));
    }
    
    /**
     *save
     */
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
     * edit
     */
    public function edit($meilenstein)
    {
    	$taskInfo = Task::find($meilenstein);
    	$users = User::all();
    	$meilensteine = Milestone::all();
    	
    	return view('modalTasksUpdate',compact('taskInfo','users','meilensteine'));
    }
    
    /*
     * edit
    */
    public function ajaxEdit(Request $request)
    {
    	$meilenstein=$request->input('id');
    	$taskInfo = Task::find($meilenstein);
    	//$users = User::all();
    	//$meilensteine = Milestone::all();

    	$data=array();
    	$data['name']=$taskInfo->name;
    	$data['body']=$taskInfo->body;
    	$data['id']=$taskInfo->id;
    	var_dump($meilenstein);
    	var_dump($data);exit;
    	return json_encode($data);
    }
    
    /*
     * update
     */
    public function update(Request $request)
    {
    	$meilenstein=$request->input('hiddenId');
    	
 
    	$info = Task::find($meilenstein);
    	
    	$info->name = $request->input('name');
    	$info->body = $request->input('body');
    	$info->user_id = $request->input('user_id');
    	$info->milestone_id = $request->input('milestone_id');
    	$info->duedate = date('Y-m-d H:i:s',strtotime($request->input('duedate')));
    
    
        if ($info->save()) {
    		return redirect('meilensteine/'.$info->milestone_id.'/aufgaben');
    	} else {
    		return back()->withInput()->withErrors('error,please retry');
    	}
    }
}
