<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Milestone;
use App\User;

class TasksController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $tasks = Task::all();
    $users = User::all();
    $meilensteine = Milestone::all();

    $mid="";
    return view('aufgaben', compact('tasks','users','meilensteine','mid'));
  }

  //Speichern einer neuen Aufgabe
  public function store(Request $request)
  {
    $taskInfo = new Task;
    $taskInfo->name = $request->input('name');
    $taskInfo->body = $request->input('body');
    $taskInfo->status = 0;
    $taskInfo->user_id = $request->input('user_id');
    $taskInfo->milestone_id = $request->input('milestone_id');
    $taskInfo->duedate=date('Y-m-d H:i:s',strtotime($request->input('duedate')));

    if ($taskInfo->save()) {
    return redirect('aufgaben');
    } else {
    return back()->withInput()->withErrors('Fehler. Bitte versuchen Sie es nochmal.');
    }
  }

  //Aufgabe aktualisieren
  public function update(Request $request)
  {
	  $meilenstein=$request->input('hiddenId');

	  $info = Task::find($meilenstein);

	  $info->name = $request->input('name');
	  $info->body = $request->input('body');
    $info->status = $request->input('status');
	  $info->user_id = $request->input('user_id');
	  $info->milestone_id = $request->input('milestone_id');
	  $info->duedate = date('Y-m-d H:i:s',strtotime($request->input('duedate')));

	  if($info->save()) {
	  	return redirect('aufgaben');
	  } else {
	   	return back()->withInput()->withErrors('Fehler. Bitte versuchen Sie es nochmal.');
	  }
  }

  public function destroy($meilenstein)
  {
    $task = Task::find($meilenstein);
    $task->delete();
    return redirect('/aufgaben')->with('success', 'Aufgabe erfolgreich gelรถscht');
  }

}
