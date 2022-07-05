<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hospital;

use App\Models\book_hospital;

use RealRashid\SweetAlert\Facades\Alert;

class HospitalDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $hospital = Hospital::all()->toArray();
        // return view('hospital.admin', compact('hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospify.hospital.hospital_details');
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
            'hname'=>'required',
            'registration' =>'required',
            'trade'=>'required',
            'ownername'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'city'=>'required',
            'requirements'=>'required'
        ]);

        $data=new Hospital([
            'hname'          =>$request->get('hname'),
            'registration'   =>  $request->get('registration'),
            'trade'          =>  $request->get('trade'),
            'ownername'      =>  $request->get('ownername'),
            'email'          =>  $request->get('email'),
            'phone'          =>  $request->get('phone'),
            'address'        =>  $request->get('address'),
            'city'           =>  $request->get('city'),
            'requirements'    =>  $request->get('requirements')

        ]);
        $data->save();
        Alert::success('Success', 'You\'ve Successfully added your details');
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
    public function edit(Request $request,$email)
    {
        $email=$request->email;
        $data=Hospital::where('email',$email)->get();
        return view('hospify.hospital.edit',['email'=>$email],compact('data'));
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
        $student = Hospital::find($request->id);
        $student->hname = $request->hname;
        $student->registration = $request->registration;
        $student->trade = $request->trade;
        $student->ownername = $request->ownername;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->city = $request->city;
        $student->requirements=  $request->requirements;

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
        //
    }
    public function search()
    {
        return view('hospify.user.search');
    }


    public function fetch(Request $request)
    {
        $email=$request->email;
        $data=book_hospital::where('email',$email)
        ->get();
        return view('hospify.hospital.booking_members',compact('data'));
    }
}
