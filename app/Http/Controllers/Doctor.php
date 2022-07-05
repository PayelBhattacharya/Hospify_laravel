<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialist;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
class Doctor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('specialist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $hname=$request->hname;
        $email=$request->email;
        return view('hospify.hospital.specialist',['hname'=>$hname,'email'=>$email]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'hname'    =>  'required',
            'email'    =>  'required',
            'doctorname'     =>  'required',
            'doctoremail'     =>  'required',
            'doctorphone'     =>  'required',
            'specialist'     =>  'required',
            'date'     =>  'required',
        ]);
            $student = new Specialist();
            $student->hname= $request->hname;
            $student-> email = $request->email;
            $student->doctorname=$request->doctorname;
            $student->doctoremail=$request->doctoremail;
            $student->doctorphone=$request->doctorphone;
            $student->specialist=$request->specialist;
            $student->date=$request->date;


        $student->save();
        Alert::success('success','Succesfully added');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $email=$request->email;
        $sp=Specialist::where('email',$email)->get();
        return view('hospify.hospital.Doctor_view',compact('sp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;
        $student=Specialist::where('id',$id)->get();
        return view('hospify.hospital.specialist_edit',compact('student','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $student = Specialist::find($request->id);
        $student-> email = $request->email;
        $student->doctorname=$request->doctorname;
        $student->doctoremail=$request->doctoremail;
        $student->doctorphone=$request->doctorphone;
        $student->specialist=$request->specialist;
        $student->date=$request->date;


        $student->save();
        Alert::success('success','Succesfully Updated');
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
        $sp= Specialist::where('id', $id)->firstorfail()->delete();
        Alert::success('success','Successfully Data Deleted');
        return back();
    }
}
