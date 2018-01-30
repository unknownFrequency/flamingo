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
//    $this->middleware('auth:api');
  }

  /**
   * @return array
   */
  public function userIds() 
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


  public function show($id)
  {
    $klippekort = Klippekort::find((int)$id);
    if(null !== Auth::user() && Auth::user()->id === $klippekort->user_id) {
      $user = User::find($klippekort->user_id);
      $is_admin = Auth::user()->role_id;
    } else {
      return redirect('/')->with('message', "Du har ikke adgang dertil");
    }

    if($klippekort && $user && $is_admin) {
      return view('klippekort/show', compact('is_admin', 'user', 'klippekort'));
    }
  }

  public function create() {
    if(null !== Auth::user() && Auth::user()->role_id === 1) {
      /* $user_ids = $this->userIds(); */
      $user_ids = User::all();
      return view('klippekort/create', compact('user_ids'));
    }
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'user_id' => 'required|unique:klippekorts,user_id', // only 1 per user  //
      'hours_max' => 'required',
      'hours_spend' => 'required',
    ]);

    $klippekort = Klippekort::create([
      'user_id' => $request->get('user_id'),
      'hoursMax' => $request->get('hours_max'),
      'hoursSpend' => $request->get('hours_spend')
    ]);

    if($klippekort) {
      return response()->json($klippekort, 201);
    } else {
      redirect('/klippekort')->with('errors', ["Noget gik galt"]);
    }


  }

  public function update(Request $request)
  {
    $klippekort = Klippekort::find($request->get('id'));
    $klippekort->update([
      'hoursMax' => $request->get('hours_max'),
      'hoursSpend' => $request->get('hours_spend'),
    ]);

    if($klippekort->save()) {
      return response()->json($klippekort, 200);
    } else {
      return response()->json($klippekort, 500);
    }
  }

  public function delete(Klippekort $klippekort)
  {
    $klippekort->delete();
    return response()->json(null, 204);
  }

}
