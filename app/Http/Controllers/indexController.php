<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Milestone;
use App\Task;


class indexController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    //Beginn: Status-Berechnung
    $msStatus1 = array();
    $msStatus2 = array();
    $status = array();

    //Für jeden Meilenstein
    for ($i=1; $i <= Milestone::all()->count(); $i++) {
      //Alle erledigten Aufgaben pro Meilenstein
      array_push($msStatus2, Task::where('milestone_id','=', $i)->where('status','=', 2)->count());
      //Alle Aufgaben pro Meilenstein
      array_push($msStatus1, Task::where('milestone_id','=', $i)->count());

      //Verhinderung von 'teilen durch null'-Fehler
      if ($msStatus1[$i-1] == 0) {
        $msStatus1[$i-1] = 1;
      }
      if ($msStatus2[$i-1] == 0){
        $msStatus2[$i-1] = 1;
      }
      //Füttern des Ergebnis-Arrays mit dem gerundeten Wert pro Meilenstein
      array_push($status, round($msStatus2[$i-1] / $msStatus1[$i-1] * 100, 0));
    }
    //Ende: Status-Berechnung
    $aufgabe = Task::all();
    $meilenstein = Milestone::all();

    $aufgabeNotDone = Task::where('status', '<=', '1')->count();
    $aufgabeDone = Task::where('status', '=', '2')->count();

    return view('index', compact('aufgabe','meilenstein','aufgabeNotDone', 'aufgabeDone', 'status'));
  }
}
