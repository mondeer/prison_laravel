<?php

namespace prison\Http\Controllers;

use Illuminate\Http\Request;
use prison\Prisoner;
use prison\Released_prisoner;

class PrisonerController extends Controller
{
    public function create()
    {
        return view('createprisoner');
    }

    public function store(Request $request)
    {
        $prisoner = new Prisoner;

        $prisoner->first_name = $request->input('first_name');
        $prisoner->middle_name = $request->input('middle_name');
        $prisoner->last_name = $request->input('last_name');
        $prisoner->national_id = $request->input('national_id');
        $prisoner->file_no = $request->input('file_no');
        $prisoner->home_county = $request->input('home_county');
        $prisoner->home_location = $request->input('home_location');
        $prisoner->next_kin = $request->input('next_kin');
        $prisoner->kin_contacts = $request->input('kin_contacts');
        $prisoner->prisoner_mobile = $request->input('prisoner_mobile');
        $prisoner->adm_date = $request->input('adm_date');
        $prisoner->crime = $request->input('crime');
        $prisoner->gender = $request->input('gender');
        $prisoner->dob = $request->input('dob');
        $prisoner->profile_pix = $request->input('profile_pix');
        $prisoner->medquiz = $request->input('medquiz');
        $prisoner->medical_history = $request->input('medical_history');
        $prisoner->weight = $request->input('weight');
        $prisoner->height =$request->input('height');
        $prisoner->save();

        return redirect('/prisoner/create')->with('prisoner', $prisoner);
    }

    public function show($id)
    {

    }

    public function view() {
        $prisoners = Prisoner::all();
        return view('viewprisoner')->with('prisoners', $prisoners);
    }

    public function edit($id)
    {
        $prisoner = Prisoner::findOrFail($id);
        return view('edit')->with('prisoner', $prisoner);
    }

    public function update(Request $request, $id)
    {
      $prisoner = Prisoner::findOrFail($id);
      $prisoner->national_id = $request->input('national_id');
      $prisoner->home_location = $request->input('home_location');
      $prisoner->next_kin = $request->input('next_kin');
      $prisoner->save();

      return redirect('/prisoner/view');

    }

    public function destroy($id)
    {

        $prisoner = Prisoner::findOrFail($id);
        $released = array(
         'prisoner_id'=>$prisoner->id
         );

        Released_prisoner::insert($released);

        $prisoner->delete();

        return redirect('/prisoner/view');
    }

    public function release() {
      $prisoners = Prisoner::query();

      $prisoner = Prisoner::where('national_id', $request->input('national_id'));

      return view('releaseprisoner')->with('prisoner', $prisoner);s

    }
}
