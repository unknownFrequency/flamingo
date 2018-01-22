<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Klippekort;

class KlippekortController extends Controller
{

  public function index()
  {
    return Klippekort::all();
  }

  public function show(Klippekort $klippekort)
  {
    return $klippekort;
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
