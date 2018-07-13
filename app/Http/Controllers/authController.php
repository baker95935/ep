<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
  public function __construct()
  {
    //die Login Seite darf nur von nicht-eingeloggten Benutzern aufgerufen werden
    $this->middleware('guest', ['except' => 'logout']);
  }

  public function viewLogin()
  {
    return view('login');
  }

  public function doLogin()
  {
    //Versuche den Benutzer einzuloggen
    if (! auth()->attempt(request(['email','password']))){
      //Wenns fehl schlägt, dann leite auf die vorherige Seite
      return redirect()->back();
    }

    return redirect()->route('home');
  }

  public function logout()
  {
    auth()->logout();

    return redirect()->action('authController@viewLogin');;
  }
}
