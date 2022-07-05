<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\availability;

use RealRashid\SweetAlert\Facades\Alert;


class AddFacilities extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $email=$request->email;
        $students = availability::where('email',$email)->get();
        return view('hospify.hospital.view_facilities',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $email=$request->email;
        return view('hospify.hospital.add_facilities',['email'=>$email]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'icu'           =>  'required',
            'ventilation'   =>  'required',
            'covid'       =>  'required',
            'bloodbank'      =>  'required',
            'cityscan'         =>  'required',
            'oxygen'   =>  'required',
            'normalbed'          =>  'required',
            'covidbed'          =>  'required',
            'email'         =>  'required'
        ]);

        $data=new availability();
        $data->ICU=$request->icu;
        $data->VENTILATION=$request->ventilation;
        $data->COVID_VACCINATION=$request->covid;
        $data->BLOOD_BANK=$request->bloodbank;
        $data->CITY_SCAN=$request->cityscan;
        $data->OXYGEN_AVALABILITY=$request->oxygen;
        $data->NORMAL_BED=$request->normalbed;
        $data->COVID_BED=$request->covidbed;
        $data->email=$request->email;
        $data->save();
        Alert::success('Success', 'Data Successfully Added');
        return back();
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
        $student = availability::find($id);
        return view('hospify.hospital.edit_facilities',compact('student', 'id'));
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
        $this->validate($request, [
            'icu'           =>  'required',
            'ventilation'   =>  'required',
            'covid'       =>  'required',
            'bloodbank'      =>  'required',
            'cityscan'         =>  'required',
            'oxygen'   =>  'required',
            'normalbed'          =>  'required',
            'covidbed'          =>  'required',
        ]);
        $student = availability::find($id);
        $student->ICU =  $request->get('icu');
        $student->VENTILATION   =  $request->get('ventilation');
        $student->COVID_VACCINATION    =  $request->get('covid');
        $student->BLOOD_BANK   =  $request->get('bloodbank');
        $student->CITY_SCAN   =  $request->get('cityscan');
        $student->OXYGEN_AVALABILITY   =  $request->get('oxygen');
        $student->NORMAL_BED    =  $request->get('normalbed');
        $student->COVID_BED   =  $request->get('covidbed');
        $student->save();
        Alert::success('Success', 'Data Successfully Updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
