<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Klippekort;
use App\User;
use Auth;

class KlippekortController extends Controller
{
  function __construct()
  {
    /* $this->middleware('auth:api'); */
  }

  public function getUserIdsArr() 
  {
    $users = User::all();
    $userIds = [];
    foreach($users as $user) {
      $userIds[] = $user->id;
    }
    return $userIds;
  }

  public function index()
  {
    if(null !== Auth::user() && Auth::user()->role_id === 1) {
      $klippekorts = Klippekort::all()->sortByDesc('id');
      return view('klippekort/index', compact('klippekorts'));
    } else {
      return redirect('/')->with('message', "Du skal være logget indfor at se den side");
    }
  }

  public function create() {
    if(null !== Auth::user() && Auth::user()->role_id === 1) {
      /* $user_ids = $this->getUserIdsArr(); */
      $user_ids = User::all();
      return view('klippekort/create', compact('user_ids'));
    }
  }

  public function show($id)
  {
    $user = Auth::user()->find($id);
    $klippekort = Klippekort::get()->where('user_id', $id)->first();

    if($klippekort) {
      return view('klippekort/show', compact('user', 'klippekort'));
    } else {
      return redirect('/')->with('message', "Du skal være logget indfor at se den side");
    }
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'to_user' => 'required',
      'hours_max' => 'required',
      'hours_spend' => 'required',
    ]);

    $klippekort = Klippekort::create([
      'user_id' => $request->get('to_user'),
      'hoursMax' => $request->get('hours_max'),
      'hoursSpend' => $request->get('hours_spend')
    ]);

    return response()->json($klippekort, 201);
  }

  public function update()
  {
    $klippekort->update($request->all());
    return response()->json($klippekort, 200);
  }

  public function delete(Klippekort $klippekort)
  {
    $klippekort->delete();
    return response()->json(null, 204);
  }

}
