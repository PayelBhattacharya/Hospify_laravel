<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\hospital;

use App\Models\book_hospital;

use App\Models\availability;

use App\Models\specialist;

use RealRashid\SweetAlert\Facades\Alert;


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
    public function create(Request $request)
    {
        $email=$request->email;
        return view('hospify.user.book_hospitals',['email'=>$email]);
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
            'user_email'  =>  'required',
            'relation'    =>  'required',
            'phone'       =>  'required',
            'requirement' =>  'required',
            'date'        =>  'required',
            'email'       =>  'required'
        ]);

        $data=new book_hospital();
        $data->name=$request->name;
        $data->age=$request->age;
        $data->address=$request->address;
        $data->user_email=$request->user_email;
        $data->relation=$request->relation;
        $data->phone=$request->phone;
        $data->requirement=$request->requirement;
        $data->date=$request->date;
        $data->email=$request->email;
        $data->save();
        Alert::success('Success', 'Booking Successful');

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
        $city=$request->city;
        $requirements =$request->get('requirements');

        $hospitals = hospital::join('availabilities', 'availabilities.email', '=', 'hospitals.email')
                    ->whereIn('hospitals.city',$request->city)
                    ->where('hospitals.requirements','like', '%' . $requirements . '%')
                    ->get(['hospitals.*','availabilities.*']);

        return view('hospify.user.fetch',['requirements'=>$requirements],compact('hospitals'));

    }

    public function doctor_details()
    {
        $email = request('email');

        $hospitals = specialist::where('email','=',$email)
                ->get();
        return view('hospify.user.doctor_details',compact('hospitals'));
    }

}
