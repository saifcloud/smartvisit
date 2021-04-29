@extends('doctor.layouts.default')
@section('content')


    <section class="content-wrapper">
     @include('doctor.partials.sidebar')

        <div class="side-wrapper">
            <div class="card wrapper-card">
               <div class="card-body">
                <div class="profilecard consultcard">
                    <div class="profilecardcontent">
                        <div class="form-group text-center profileset">
                            
                                <label for="photo-upload" class="custom-file-upload consultprofile">
                                    <div class="img-wrap img-upload">
                                        <img for="photo-upload" src="{{ url('/').$paitents->paitent_details->image }}">
                                    </div>
                                </label>
                            
                        </div>
                    </div>
                    <h5>{{ $paitents->paitent_details->first_name }} {{ $paitents->paitent_details->last_name}}</h5>
                    <span>_{{ $paitents->paitent_details->first_name }}_{{ $paitents->paitent_details->last_name}}_</span>
                    <span>{{ \Carbon\Carbon::parse($paitents->paitent_details->dob)->diff(\Carbon\Carbon::now())->format('%y')}} Years Old</span>

                    <div class="consultsocialitem">
                        <ul>
                            <li>
                                <button class="defaultbtn numberbtn">
                                    <i class="flaticon-phone"></i> {{ $paitents->paitent_details->phone}}
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div class="tabitem">
                        <ul>
                            <li class="tabactive" id="patientinfo">
                                Patient Info
                            </li>
                            <li id="visit">
                                Reason For Visit
                            </li>
                            <li id="soap">
                                Soap
                            </li>
                            <li id="summary">
                                Patient Visit Summary
                            </li>
                        </ul>
                    </div>
                </div>
               </div>

                <div class="tabarea">

                    <div class="firsttabcontent">
                        <div class="card-body form-body">
                            <div class="row">
                                <div class="col-md-8 offset-md-2 text-center">
                                  <div class="patient-info">
                                        <h5>Personal Info</h5>
                                        <table class="table">
                                            <tr>
                                            <td class="text-left" style="border-top: 0;">Date Of Birth:</td>
                                            <td class="text-right" style="border-top: 0;">{{ $paitents->paitent_details->dob }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Address:</td>
                                                <td class="text-right">{{ $paitents->paitent_details->paitent_basic_details->address}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">City:</td>
                                                <td class="text-right">{{ $paitents->paitent_details->paitent_basic_details->city}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Zip Code:</td>
                                                <td class="text-right">{{ $paitents->paitent_details->paitent_basic_details->zip_code}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">State:</td>
                                                <td class="text-right">{{ $paitents->paitent_details->paitent_basic_details->state}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Insurance Or Self-Pay:</td>
                                                <td class="text-right">Massachusetts</td>
                                            </tr>
                                    </table>
                                  </div>

                                    <div class="medical_history">
                                        <h5>Medical History</h5>
                                        <table class="table">
                                            <thead class="custom-thead-dark">
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Documents</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Drug or Food Allergy</td>
                                                    <td>Penicil Reaction</td>
                                                    <td class="text-center"><img src="images/icons/eye.png" alt=""></td>
                                                </tr>
                                                    <tr>
                                                        <td>Chronic Medical illnesses</td>
                                                        <td>--------------</td>
                                                        <td class="text-center"><img src="images/icons/eye.png" alt=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Previous hospitalization in past 3 months</td>
                                                        <td>Document #01: EMR, 01/00/20
                                                            Document #01: EMR, 01/00/20
                                                        </td>
                                                        <td class="text-center"><img src="images/icons/eye.png" alt=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Medication list</td>
                                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Social history(alcohol, smoking)</td>
                                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>History of violence or substance abuse</td>
                                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Immunization (Flu vaccine or shingles vaccines)</td>
                                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                                                        <td></td>
                                                    </tr>
                                            </tbody>
                                    </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="secondtabcontent">
                        <div class="card-body form-body">
                            <div class="visitdetailarea">
                                <div class="row">
                                    <div class="col-md-5">
                                       <div class="detailvisit">
                                           <ul>
                                               <li>
                                               <span> Symptom - Cough</span>
                                               </li>
                                               <li>
                                                <span>Symptom - Fever</span>
                                               </li>
                                               <li>
                                                <span>Reguest Refill</span>
                                                </li>
                                                <li>
                                                    <span>Need Referral</span>
                                                </li>
                                                <li>
                                                    <span>Symptom - Rash</span>
                                                </li>
                                           </ul>
                                       </div>
                                    </div>
                                    <div class="col-md-7">
                                            <div class="patient-info detail-info">
                                                <table class="table">
                                                    <tr>
                                                        <td>20,3.7</td>
                                                        <td>12:00 Am</td>
                                                        <td class="text-center"><img src="images/icons/eye.png" alt=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>20,3.7</td>
                                                        <td>2:00 Pm</td>
                                                        <td class="text-center"><img src="images/icons/eye.png" alt=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>20,3.7</td>
                                                        <td>12:00 Am</td>
                                                        <td class="text-center"><img src="images/icons/eye.png" alt=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>20,3.7</td>
                                                        <td>6:00 Am</td>
                                                        <td class="text-center"><img src="images/icons/eye.png" alt=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>20,3.7</td>
                                                        <td>12:00 Am</td>
                                                        <td class="text-center"><img src="images/icons/eye.png" alt=""></td>
                                                    </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="thirdtabcontent">
                        <div class="card-body form-body">
                           
                                <form action="">
                                    <div class="visitform mt-0">
                                        <div class="smartnotes">
                                            <div class="turnon">
                                                <button type="button" class="editbtn turnonbtn">
                                                   <i class="flaticon-mic"></i> <span> Turn On Smart Notes
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="chiefcomp">
                                            <div class="form-group">
                                                <label for="">Subjective</label>
                                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group soap_group">
                                                <label for="">Objective</label>
                                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                                            </div>

                                            <div class="maritalstatus">
                                            <h6>Mental Status</h6>
                                             <div class="form-group soapradio">
                                                 <label class="paymentradio">alert oriented
                                                     <input type="radio" checked="checked" name="radio">
                                                     <span class="checkmark"></span>
                                                   </label>
                                                   <label class="paymentradio">confused disoriented
                                                     <input type="radio" name="radio">
                                                     <span class="checkmark"></span>
                                                   </label>
                                             </div>
                                            </div>

                                            <div class="maritalstatus">
                                                <h6>Vital Signs</h6>
                                                 <div class="form-group soapradio">
                                                     <label class="paymentradio">temparature blood Pressure
                                                         <input type="radio" checked="checked" name="radio">
                                                         <span class="checkmark"></span>
                                                       </label>
                                                       <label class="paymentradio">finger sticks if available
                                                         <input type="radio" name="radio">
                                                         <span class="checkmark"></span>
                                                       </label>
                                                 </div>
                                            </div>

                                            <div class="maritalstatus">
                                                <h6>Uplaoded Images Or Test Results (If Applicable) Physical Findings:</h6>
                                            </div>

                                            <div class="form-group">
                                                <h5 style="font-weight: 600;">Assessment</h5>
                                                <label for="">Description Of Patient Problem List</label>
                                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Impression (Differential Diagnosis)</label>
                                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Add Diagnosis</label>
                                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Result</label>
                                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Type Dx Code</label>
                                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                                            </div>

                                            <div class="maritalstatus">
                                                <h6 style="font-weight: 600;">Plan</h6>
                                                <label>Prescription Ordered</label>
                                                 <div class="form-group soapradio">
                                                     <label class="paymentradio">temparature blood Pressure
                                                         <input type="radio" checked="checked" name="radio">
                                                         <span class="checkmark"></span>
                                                       </label>
                                                       <label class="paymentradio">finger sticks if available
                                                         <input type="radio" name="radio">
                                                         <span class="checkmark"></span>
                                                       </label>
                                                 </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="">how many?</label>
                                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                                            </div>

                                            <div class="form-group consultinput">
                                               <div class="row">
                                                   <div class="col-md-6">
                                                    <h6 style="font-weight: 600;">Monitoring Parameters</h6>

                                                        <label for="">Education</label>
                                                        <input type="text" class="form-control">
                                                   </div>

                                                   <div class="col-md-6">
                                                        <label for="">diet</label>
                                                        <input type="text" class="form-control">
                                                   </div>

                                                   <div class="col-md-6">
                                                        <label for="">exercise</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="">medication use</label>
                                                        <input type="text" class="form-control">
                                                   </div>

                                                   <div class="col-md-6">
                                                        <label for="">symptoms</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="">smokings/alcohol</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="">activity level</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                               </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Follow up visit</label>
                                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                                            </div>
                                            

                                            <div class="form-group">
                                                <button type="button" class="btn editbtn">
                                                    Submit Soap
                                                </button>
                                            </div>
                                           </div>
                                    </div>
                                   
                                </form>
                           

                        </div>
                    </div>


                    <div class="fourtabcontent">
                        <div class="card-body form-body">
                           
                                <form action="">
                                    <div class="visitform mt-0">
                                        <div class="smartnotes">
                                            <div class="turnon">
                                                <button type="button" class="editbtn turnonbtn">
                                                    <i class="flaticon-mic"></i> <span> Turn On Smart Notes
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="chiefcomp">
                                            <div class="form-group">
                                                <label for="">Plan Of Care Summary</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-group">
                                                <label for="">Medications</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Lab Tests</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="">What To Monitor For At Home</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="">When To Seek Emergency Help</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Your Suggested Next Follow Up With PCP Or Telemedicine</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <button type="button" class="btn editbtn">
                                                    Send Patient Name
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                        </div>
                    </div>

                </div>


            </div>


        </div>


    </section>





    <!-- JS, Popper.js, and jQuery -->
    <script src="{{ url('public/doctor/js/jquery.min.js') }}"></script>
   
    <script>
        $(document).ready(function(){
            $('.firsttabcontent').show();
            $('.secondtabcontent').hide();
            $('.thirdtabcontent').hide();
            $('.fourtabcontent').hide();
            $('#patientinfo').click(function(){
                $('.secondtabcontent').hide();
                $('.thirdtabcontent').hide();
                $('.fourtabcontent').hide();
                $('.firsttabcontent').show();
                $(this).addClass('tabactive').siblings().removeClass("tabactive");
            });
            $('#visit').click(function(){
                $('.firsttabcontent').hide();
                $('.thirdtabcontent').hide();
                $('.fourtabcontent').hide();
                $('.secondtabcontent').show();
                $(this).addClass('tabactive').siblings().removeClass("tabactive");
            });
            $('#soap').click(function(){
                $('.firsttabcontent').hide();
                $('.secondtabcontent').hide();
                $('.fourtabcontent').hide();
                $('.thirdtabcontent').show();
                $(this).addClass('tabactive').siblings().removeClass("tabactive");
            });
            $('#summary').click(function(){
                $('.firsttabcontent').hide();
                $('.secondtabcontent').hide();
                $('.thirdtabcontent').hide();
                $('.fourtabcontent').show();
                $(this).addClass('tabactive').siblings().removeClass("tabactive");
            })
        })
    </script>
@endsection