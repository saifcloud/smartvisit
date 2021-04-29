<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\City;
use App\State;
use App\Country;
use App\Clinical_update;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clinical_update()
    {
        //
        $page_title = "Clinical Updates";
        $clinical_update = Clinical_update::where('status',1)->where('is_deleted',0)->latest()->get();
        return view('doctor.clinical_update',compact('clinical_update','page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function clinical_details($id)
    {
        //
        $page_title = "Clinical Updates";
        $clinical_update = Clinical_update::find(base64_decode($id));
        return view('doctor.clinical_details',compact('clinical_update','page_title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_state(Request $request)
    {
        //
        $state = State::where('country_id',$request->country_id)
                                                    ->where('status',1)
                                                    ->where('is_deleted',0)
                                                    ->get();

        $html = '';
           if(count($state) > 0 ){
             $html.= '<option value="">--select--</option>';
             foreach($state as $kye => $row){
             $html.= '<option value="'.$row->id.'">'.$row->name.'</option>';
             }
            }

        return $html;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_city(Request $request)
    {
        //
         $city = City::where('state_id',$request->state_id)
                                                    ->where('status',1)
                                                    ->where('is_deleted',0)
                                                    ->get();

        $html = '';
           if(count($city) > 0 ){
             $html.= '<option value="">--select--</option>';
             foreach($city as $kye => $row){
             $html.= '<option value="'.$row->id.'">'.$row->name.'</option>';
             }
            }

        return $html;
    }


    public function form_load_data(Request $request){
        

         $country = Country::where('status',1)->where('is_deleted',0)->get();
         
         $state = State::where('country_id',$request->country_id)
                                                    ->where('status',1)
                                                    ->where('is_deleted',0)
                                                    ->get();

         $city = City::where('state_id',$request->state_id)
                                                    ->where('status',1)
                                                    ->where('is_deleted',0)
                                                    ->get();

        

        $html = '<option value="" selected disabled>--select--</option>';
           if(count($state) > 0 ){
             // $html.= '<option value="" selected disabled>--select--</option>';
             foreach($state as $kye => $row){
             $html.= '<option value="'.$row->id.'" '.($row->id==$request->state_id ? 'selected':'').'>'.$row->name.'</option>';
             }
            }

        

        $html1 = '<option value="" selected disabled>--select--</option>';
           if(count($city) > 0 ){
             // $html1.= '<option value="" selected disabled>--select--</option>';
             foreach($city as $kye => $row){
             $html1.= '<option value="'.$row->id.'" '.($row->id==$request->city_id ? 'selected':'').'>'.$row->name.'</option>';
             }
            }

         
         $html2 = '<option value="" selected disabled>--select--</option>';
           if(count($country) > 0 ){
           
             foreach($country as $kye => $row){
             $html2.= '<option value="'.$row->id.'" '.($row->id==$request->country_id ? 'selected':'').'>'.$row->name.'</option>';
             }
            }






              $html11 = '<option value="" selected disabled>--select--</option>';
           if(count($state) > 0 ){
             // $html.= '<option value="" selected disabled>--select--</option>';
             foreach($state as $kye => $row){
             $html11.= '<option value="'.$row->id.'" '.($row->id==$request->rstate_id ? 'selected':'').'>'.$row->name.'</option>';
             }
            }

        

        $html12 = '<option value="" selected disabled>--select--</option>';
           if(count($city) > 0 ){
             // $html1.= '<option value="" selected disabled>--select--</option>';
             foreach($city as $kye => $row){
             $html12.= '<option value="'.$row->id.'" '.($row->id==$request->rcity_id ? 'selected':'').'>'.$row->name.'</option>';
             }
            }

         
         $html13 = '<option value="" selected disabled>--select--</option>';
           if(count($country) > 0 ){
           
             foreach($country as $kye => $row){
             $html13.= '<option value="'.$row->id.'" '.($row->id==$request->rcountry_id ? 'selected':'').'>'.$row->name.'</option>';
             }
            }


         return response()->json(['office_state'=>$html,'office_city'=>$html1,'office_country'=>$html2,
            'residence_state'=>$html11,'residence_city'=>$html12,'residence_country'=>$html13]);
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
