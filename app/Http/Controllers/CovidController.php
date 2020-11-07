<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Covid;
use App\Models\Covid as ModelsCovid;

class CovidController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $covids = ModelsCovid::all();
    return view('covids.index', compact('covids'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('covids.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'country' => 'required',
      'total_cases' => 'required',
      'new_cases' => 'required',
      'total_deaths' => 'required',
      'new_deaths' => 'required',
      'total_recovered' => 'required',
      'active_cases' => 'required',
      'critical' => 'required',
      'total_in_1M' => 'required',
      'deaths_in_1M' => 'required',
      'population' => 'required',
      'case_in_x_ppl' => 'required',
      'death_in_x_ppl' => 'required',
      'test_in_x_ppl' => 'required',
      'test_in_x_ppl' => 'required',
    ]);

    $covid = new ModelsCovid([
      'country' => $request->get('country'),
      'total_cases' => $request->get('total_cases'),
      'new_cases' => $request->get('new_cases'),
      'total_deaths' => $request->get('total_deaths'),
      'new_deaths' => $request->get('new_deaths'),
      'total_recovered' => $request->get('total_recovered'),
      'active_cases' => $request->get('active_cases'),
      'critical' => $request->get('critical'),
      'total_in_1M' => $request->get('total_in_1M'),
      'deaths_in_1M' => $request->get('deaths_in_1M'),
      'population' => $request->get('population'),
      'case_in_x_ppl' => $request->get('case_in_x_ppl'),
      'death_in_x_ppl' => $request->get('death_in_x_ppl'),
      'test_in_x_ppl' => $request->get('test_in_x_ppl'),
      'daysbefore' => $request->get('daysbefore')
    ]);
    $covid->save();
    return redirect('/covids')->with('success', 'New Covid Data saved!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $covid = ModelsCovid::find($id);
    return view('covids.edit', compact('covid'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $request->validate([
      'country' => 'required',
      'total_cases' => 'required',
      'new_cases' => 'required',
      'total_deaths' => 'required',
      'new_deaths' => 'required',
      'total_recovered' => 'required',
      'active_cases' => 'required',
      'critical' => 'required',
      'total_in_1M' => 'required',
      'deaths_in_1M' => 'required',
      'population' => 'required',
      'case_in_x_ppl' => 'required',
      'death_in_x_ppl' => 'required',
      'test_in_x_ppl' => 'required',
    ]);

    $covid = ModelsCovid::find($id);

    $covid -> country = $request->get('country');
    $covid -> total_cases = $request->get('total_cases');
    $covid -> new_cases = $request->get('new_cases');
    $covid -> total_deaths = $request->get('total_deaths');
    $covid -> new_deaths = $request->get('new_deaths');
    $covid -> total_recovered = $request->get('total_recovered');
    $covid -> active_cases = $request->get('active_cases');
    $covid -> critical = $request->get('critical');
    $covid -> total_in_1M = $request->get('total_in_1M');
    $covid -> deaths_in_1M = $request->get('deaths_in_1M');
    $covid -> population = $request->get('population');
    $covid -> case_in_x_ppl = $request->get('case_in_x_ppl');
    $covid -> death_in_x_ppl = $request->get('death_in_x_ppl');
    $covid -> test_in_x_ppl = $request->get('test_in_x_ppl');

    $covid->save();

    return redirect('/contacts')->with('success', 'Contact updated!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $covid = ModelsCovid::find($id);
    $covid->delete();

    return redirect('/covids')->with('success', 'covid deleted!');
  }
}
