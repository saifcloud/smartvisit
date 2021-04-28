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
                            <label class="consultdesign">
                                <label for="photo-upload" class="custom-file-upload consultprofile">
                                    <div class="img-wrap img-upload">
                                        <img for="photo-upload" src="{{ url('public/doctor/images/patient.jpg')}}">
                                    </div>
                                    <!-- <div class="p-image"> <i class="fa fa-camera upload-button"></i>
                                    <input class="file-upload" id="photo-upload" type="file" name="image" accept="image/*">
                                </div> -->
                                </label>
                            </label>
                        </div>
                    </div>
                    <h5>Dr Zohra Salehi</h5>
                    <span>_Devon_Cooper</span>
                    <span>22 Years Old</span>

                    <div class="consultsocialitem">
                        <ul>
                            <li>
                                <button class="defaultbtn numberbtn">
                                    <i class="flaticon-phone"></i> +0123456789
                                </button>
                            </li>

                            <li>
                                <button class="defaultbtn"  data-toggle="modal" data-target="#exampleModal">
                                    <i class="flaticon-video-camera"></i> Video Call
                                </button>
                            </li>

                            <li>
                                <a href="{{ url('doctor/prescribe') }}">
                                    <button class="defaultbtn">
                                        <i class="flaticon-prescription"></i> Prescribe
                                    </button>
                                </a>
                            </li>

                            <li>
                               <a href="{{ url('doctor/ordertest') }}">
                                <button class="defaultbtn">
                                    <i class="flaticon-blood-test"></i> Order Test
                                </button>
                               </a>
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
                                            <td class="text-right" style="border-top: 0;">01/23/1998</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Address:</td>
                                                <td class="text-right">11 Millbrook St.</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">City:</td>
                                                <td class="text-right">Worcester</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Zip Code:</td>
                                                <td class="text-right">Ma 01606</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">State:</td>
                                                <td class="text-right">Massachusetts</td>
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
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="visitImg">
                                        <h5>Uplaoded Image/Document</h5>
                                        <ul>
                                            <li>
                                                <img src="images/faceinfection.jpg" alt="">
                                                <span>
                                                    <img src="images/focus.png" alt="">
                                                </span>
                                            </li>

                                            <li>
                                                <img src="images/faceinfection.jpg" alt="">
                                                <span>
                                                    <img src="images/focus.png" alt="">
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            
                                <form action="">
                                    <div class="visitform">
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
                                                <label for="">Chief Complaint</label>
                                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn editbtn">
                                                    send
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                           

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
                                                    <i class="flaticon-mic"></i> <span> Turn On Smart
                                                        Notes
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


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog video_dialogue" role="document">
      <div class="modal-content">
        <div class="video-body">
            <div class="container">
                <div class="videoprofile">
                    <div class="row align-items-center">
                        <div class="col-md-1">
                            <div class="videopic">
                                <img src="images/overview/profileone.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h5>Devon Cooper</h5>
                        </div>
                    </div>
                </div>

                <div class="centerrating">
                    <div class="ratequality">
                        <p>Please rate the quality of the call</p>
                        <div class="rating">
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="star" for="star1" title="Bad" aria-hidden="true"></label>
                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="star" for="star2" title="Good" aria-hidden="true"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="star" for="star3" title="Very good" aria-hidden="true"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="star" for="star4" title="Great" aria-hidden="true"></label>
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="star" for="star5" title="Awesome" aria-hidden="true"></label>
                          </div>
                    </div>

                    <div class="accuracyrate">
                        <p>Please rate the accurancy of the data provided by Lauren Spencer</p>
                        <div class="rating">
                            <input type="radio" id="accuracy5" name="accuracy" value="5" />
                            <label class="star" for="accuracy5" title="Awesome" aria-hidden="true"></label>
                            <input type="radio" id="accuracy4" name="accuracy" value="4" />
                            <label class="star" for="accuracy4" title="Great" aria-hidden="true"></label>
                            <input type="radio" id="accuracy3" name="accuracy" value="3" />
                            <label class="star" for="accuracy3" title="Very good" aria-hidden="true"></label>
                            <input type="radio" id="accuracy2" name="accuracy" value="2" />
                            <label class="star" for="accuracy2" title="Good" aria-hidden="true"></label>
                            <input type="radio" id="accuracy1" name="accuracy" value="1" />
                            <label class="star" for="accuracy1" title="Bad" aria-hidden="true"></label>
                          </div>
                    </div>

                    <div class="form-group">
                        <button type="button" class="editbtn" data-dismiss="modal">
                            Send
                        </button>
                    </div>

                </div>

            </div>
        </div>
      </div>
    </div>
  </div>



    <!-- JS, Popper.js, and jQuery -->
    <script src="{{ url('public/doctor/js/jquery.min.js') }}"></script>
    <script src="{{ url('public/doctor/js/bootstrap.min.js') }}"></script>

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