<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\hospital_detail;

use App\Models\book_hospital;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $book_hospital = book_hospital::all()->toArray();
        // return view('book_hospitals', compact('book_hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book_hospitals');
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
            'name'        =>  'required',
            'age'         =>  'required',
            'address'     =>  'required',
            'relation'    =>  'required',
            'phone'       =>  'required',
            'requirment'  =>  'required',
            'date'        =>  'required'
        ]);

        $data= new book_hospital([
            'name'         =>$request->get('name'),
            'age'          =>$request->get('age'),
            'address'      =>$request->get('address'),
            'relation'     =>$request->get('relation'),
            'phone'        =>$request->get('phone'),
            'requirment'   =>$request->get('requirment'),
            'date'         =>$request->get('date')
        ]);
        $data->save();
        // return redirect()->route('book_hospital.create')->with('message','Booking Successful');
        return view('dashboard')->with('message','Booking Successful');
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
    // $milestone =  Milestone::where('unique_id', $request->id)
    // ->whereHas('block', function ($q) use($request) {
    //     $q->whereNotIn('unique_id', $request->milestone);
    // })
    // ->first();
    public function fetch(Request $request)
    {
        $city=$request->city;
        $requirments =$request->get('requirments');

        $hospitals = hospital_detail::whereIn('city',$request->city)
                  ->where('requirments','like', '%' . $requirments . '%')
                  ->get();

        // $hospitals = hospital_registration::where(function ($query) use($request){
        //     $query->where('city',$request->city);
        // })->where('requirments','like', '%' . $requirments . '%')->get();

        // $hospitals = hospital_registration::where(function ($query) use($city,$requirments) {
        //      for ($i = 0; $i < count($city); $i++){
        //         $query->where('city',$city[$i])
        //         ->where('requirments','like', '%' . $requirments . '%')
        //         ->get();
        //      }
        // });

        return view('fetch',compact('hospitals'));

    }

    public function doctor_details()
    {
        $email = request('email');

        $hospitals = hospital_detail::where('email',$email)
                ->get();
        return view('doctor_details',compact('hospitals'));
    }
}
