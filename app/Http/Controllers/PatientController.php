<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Doctor_paitent;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     $page_title = "Patients";
     $paitents = Doctor_paitent::where('doctor_id',Auth::id())
                                                            ->where('is_deleted',0)
                                                            ->paginate(14);
     return view('doctor.patients',compact('paitents','page_title'));
    }

    public function patient_detail($id)
    {
        //
        $page_title ='Patients';
        $paitents = Doctor_paitent::where('id',base64_decode($id))->where('is_deleted',0)->first();
        return view('doctor.patient_detail',compact('paitents','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consult_patient()
    {
        //
        return view('doctor.consult_patient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ordertest(Request $request)
    {
        //
        return view('doctor.ordertest');
    }

    public function prescribe(Request $request)
    {
        //
         return view('doctor.prescribe');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
        //
        return view('doctor.patient_detail');
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
