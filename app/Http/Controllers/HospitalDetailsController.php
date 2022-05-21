<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hospital;

class HospitalDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospital = Hospital::all()->toArray();
        return view('hospital.admin', compact('hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("hospital.hospital_details");
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
            'password'=>'required',
            'city'=>'required',
            'requirments'=>'required'
        ]);

        $data=new Hospital([
            'hname'          =>$request->get('hname'),
            'registration'   =>  $request->get('registration'),
            'trade'          =>  $request->get('trade'),
            'ownername'      =>  $request->get('ownername'),
            'email'          =>  $request->get('email'),
            'phone'          =>  $request->get('phone'),
            'address'        =>  $request->get('address'),
            'password'       =>  $request->get('password'),
            'city'           =>  $request->get('city'),
            'requirments'    =>  $request->get('requirments')

        ]);
        $data->save();
        return view('hospital_dashboard');
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
        $hospital = Hospital::find($id);
        return view('hospital.edit', compact('hospital', 'id'));
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
            'hname'    =>  'required',
            'registration'     =>  'required',
            'trade'     => 'required',
            'ownername'     => 'required',
            'email'     => 'required',
            'phone'     =>  'required',
            'address'     =>'required',
            'city'     =>  'required',
            'password'     => 'required',
            'requirements' =>'required'
        ]);
        $hospital =Hospital::find($id);
        $hospital->hname = $request->get('hname');
        $hospital->registration = $request->get('registration');
        $hospital->trade = $request->get('trade');
        $hospital->ownername = $request->get('ownername');
        $hospital->email = $request->get('email');
        $hospital->phone = $request->get('phone');
        $hospital->address = $request->get('address');
        $hospital->city = $request->get('city');
        $hospital->password = $request->get('password');
        $hospital->requirements=  $request->get('requirements');
        $hospital->save();
        return redirect()->route('hospital.index')->with('success', 'Data Updated');
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
        return view('search');
    }
    public function fetch(Request $request)
    {
        $city = $request->get('city');
        $requirments =$request->get('requirments');

        $hospitals = Hospital::where('city',$city)
                  ->where('requirments','like', '%' . $requirments . '%')
                  ->get();

        return view('fetch',compact('hospitals'));

    }

    public function hospital_login(){
        return view('hospital_login');
    }
}
