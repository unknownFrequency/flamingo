<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Klippekort;
use Auth;

class KlippekortController extends Controller
{
    function __construct()
    {
      $this->middleware('auth');
    }

  public function index()
  {
    $user = Auth::user();
    return view('klippekort/index', compact('user'));
  }

  public function show($id)
  {
    $user = Auth::user()->find($id);
    $klippekort = Klippekort::get()->where('user_id', $id)->first();

    if($klippekort) {
      return view('klippekort/index', compact('user', 'klippekort'));
    } else {
      return redirect('/')->with('message', "Du skal være logget indfor at se den side");
    }
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'user_id' => 'required',
      'hoursMax' => 'required',
      'hoursSpend' => 'required',
    ]);
    $klippekort = Klippekort::create($request->all());

    return response()->json($klippekort, 201);
  }

  public function update(Request $request, Klippekort $klippekort)
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
