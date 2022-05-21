<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ams;

class AmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_dashboard');

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
            'name'    =>  'required',
            'location'     =>  'required',
            'phone'     =>  'required',

        ]);
        $Am = new Ams([
            'name'    =>  $request->get('name'),
            'location'     =>  $request->get('location'),
            'phone'     => $request->get('phone'),
        ]);
        $Am->save();
        return view('admin_dashboard')->with('message','Successfully Registered');
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
        //
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
        //
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

    public function fetch(Request $request)
    {
        $location=$request->get('location');

        $ambulances=ams::where('location',$location)
        ->get();
        return view('fetch_ambulance',compact('ambulances'));
    }
}
