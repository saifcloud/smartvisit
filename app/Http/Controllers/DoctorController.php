<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\City;
use App\State;
use App\Country;

use App\Mailing_address;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('doctor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        //
        $doctor = User::find(Auth::id());
        $country   = Country::where('status',1)->where('is_deleted',0)->get();
        return view('doctor.profile',compact('doctor', 'country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_doctor_information(Request $request)
    {
        
        // return $request->all();
        $doctor = User::find(Auth::id());
        $doctor->first_name = $request->first_name;
        $doctor->last_name  = $request->last_name;
        $doctor->phone      = $request->phone;
        $doctor->save();
       
        $mailing_address = Mailing_address::where('user_id',Auth::id())->first();
        if(empty($mailing_address)){
          $mailing_address = new Mailing_address;
        }
        $mailing_address->user_id              = $doctor->id;
        $mailing_address->office_first_name    = $request->office_first_name;
        $mailing_address->office_last_name     = $request->office_last_name;
        $mailing_address->office_email         = $request->office_email;
        $mailing_address->office_phone         = $request->office_phone;
        $mailing_address->office_address_1     = $request->office_address_1;
        $mailing_address->office_address_2     = $request->office_address_2;
        $mailing_address->office_city          = $request->office_city;
        $mailing_address->office_state         = $request->office_state;
        $mailing_address->office_country       = $request->office_country;
        $mailing_address->office_zip_code      = $request->office_zip_code;
        $mailing_address->residence_first_name = $request->residence_first_name;
        $mailing_address->residence_last_name  = $request->residence_last_name;
        $mailing_address->residence_email      = $request->residence_email;
        $mailing_address->residence_phone      = $request->residence_phone;
        $mailing_address->residence_address_1  = $request->residence_address_1;
        $mailing_address->residence_address_2  = $request->residence_address_2;
        $mailing_address->residence_city       = $request->residence_city;
        $mailing_address->residence_state      = $request->residence_state;
        $mailing_address->residence_country    = $request->residence_country;
        $mailing_address->residence_zip_code   = $request->residence_zip_code;
        $mailing_address->save();

        return response()->json(['status'=>true,'message'=>'Information updated successfully.']);


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
}
