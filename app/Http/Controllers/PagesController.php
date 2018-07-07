<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Milestone;
use App\Task;


class PagesController extends Controller
{
  public function index()
  {
    $aufgabe = Task::all();
    $meilenstein = Milestone::all()->sortByDesc('statusPercentage');

    $aufgabeNotDone = Task::where('status', '<=', '1')->count();
    $aufgabeDone = Task::where('status', '=', '2')->count();

    return view('index', compact('aufgabe','meilenstein','aufgabeNotDone', 'aufgabeDone'));
}

  public function login()
  {
    return view('login');
  }
}
