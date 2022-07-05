<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ams;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

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
        return view('hospify.admin.ambulance');
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
        Alert::success('Success','Data Stored');
        return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=feedback::all();
        return view('hospify.admin.view_feedback',compact('data'));
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
        // $data = User::where('id', $id)->firstorfail()->delete();
        // Alert::success('Success','Data Deleted');
        // return back();
    }

    public function fetch(Request $request)
    {
        $location=$request->get('location');

        $ambulances=ams::where('location',$location)
        ->get();
        return view('hospify.user.fetch_ambulance',compact('ambulances'));
    }
}
