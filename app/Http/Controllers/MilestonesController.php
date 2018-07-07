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

        return view('aufgaben', compact('tasks','users'));
    }
}
