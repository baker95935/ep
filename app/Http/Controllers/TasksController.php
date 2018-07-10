<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Milestone;
use App\Task;
use App\User;


class TasksController extends Controller
{
  public function index()
  {
    $tasks = Task::all();
    $users = User::all();
    $meilensteine = Milestone::all();
    return view('aufgaben', compact('tasks','users','meilensteine'));
  }

  public function show(Task $aufgabe)
  {
    return "Eine Seite um Aufgaben zu bearbeiten/abzuschließen???";
  }


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
    return back()->withInput()->withErrors('error,please retry');
    }
  }
}
