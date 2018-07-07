<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;

class TasksController extends Controller
{
  public function index()
  {
    $tasks = Task::all();
    $users = User::all();
    return view('aufgaben', compact('tasks','users'));
  }

  public function show(Task $aufgabe)
  {
    return "Eine Seite um Aufgaben zu bearbeiten/abzuschließen???";
  }
}
