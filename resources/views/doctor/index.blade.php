@extends('doctor.layouts.default')
@section('content')


<section class="content-wrapper"> 
 @include('doctor.partials.sidebar')

            <div class="side-wrapper">
              <div class="overviewCard">
                  <ul>
                      <li>
                        <div class="card dashboardcard">
                            <div class="icon" style="background: #f8fced; color: #bfe34e;">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <h6>28</h6>
                            <p>Patients</p>
                        </div>
                      </li>

                      <li>
                        <div class="card dashboardcard">
                            <div class="icon" style="background: #fff8e5;">
                                <img src="{{ url('public/doctor/images/icons/check-1.png') }}" alt="">
                            </div>
                            <h6>30 h/w</h6>
                            <p>Availability</p>
                        </div>
                      </li>

                      <li>
                        <div class="card dashboardcard">
                            <div class="icon" style="background:  #eaf8f9;">
                                <img src="{{ url('public/doctor/images/icons/dr-tools.png') }}" alt="">
                            </div>
                            <h6>GP</h6>
                            <p>Specialization</p>
                        </div>
                      </li>

                      <li>
                        <div class="card dashboardcard">
                            <div class="icon" style="background:  #fef5ee;">
                                <img src="{{ url('public/doctor/images/icons/pin.png') }}" alt="">
                            </div>
                            <h6>Boston, Ma</h6>
                            <p>Location</p>
                        </div>
                      </li>

                      <li>
                        <div class="card dashboardcard">
                            <div class="icon" style="background:  #f7e6f9;">
                                <img src="{{ url('public/doctor/images/icons/card-1.png') }}" alt="">
                            </div>
                            <h6>$ 15,000</h6>
                            <p>Paid</p>
                        </div>
                      </li>

                      <li>
                        <div class="card dashboardcard">
                            <div class="icon" style="background:  #f0f2f3;">
                                <img src="{{ url('public/doctor/images/icons/coin.png') }}" alt="">
                            </div>
                            <h6>$ 2,320</h6>
                            <p>Outstanding</p>
                        </div>
                      </li>
                  </ul>

                <!-- ///// overview first column area ///// -->

                <div class="overviewColumnarea">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="overview_consult_head">
                                <h5>Today Consult</h5>
                                <span>See All</span>
                            </div>

                            <div class="card">

                                <div class="overflex">
                                    <div class="icon">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profileone.jpeg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>Beth Mccoy <i class="flaticon-video-camera"></i></h5>
                                        <span>Medical Check Up</span>
                                    </div>
                                    <div class="sidecontent">
                                        <h6>at 2:00 pm</h6>
                                        <h6>at 2:30 pm</h6>
                                    </div>
                                </div>

                                <div class="overflex">
                                    <div class="icon">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profiletwo.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>Besis Alexander<i class="flaticon-phone"></i></h5>
                                        <span>Medical Check Up</span>
                                    </div>
                                    <div class="sidecontent">
                                        <h6>at 2:00 pm</h6>
                                    </div>
                                </div>



                                <div class="overflex">
                                    <div class="icon">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg')}}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profilefive.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>Devight Murphy <i class="flaticon-video-camera"></i></h5>
                                        <span>Medical Check Up</span>
                                    </div>
                                    <div class="sidecontent">
                                        <h6>at 2:30 pm</h6>
                                    </div>
                                </div>


                                <div class="overflex">
                                    <div class="icon">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg')}}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg')}}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>Evan Hanry <i class="flaticon-phone"></i></h5>
                                        <span>Medical Check Up</span>
                                    </div>
                                    <div class="sidecontent">
                                        <h6>at 2:30 pm</h6>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="col-md-6">
                            <div class="overview_consult_head">
                                <h5>Today Available Urgent Consults</h5>
                                <span>See All</span>
                            </div>

                            <div class="card">

                                <div class="overflex">
                                    <div class="icon">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg')  }}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profileone.jpeg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>Beth Mccoy <i class="flaticon-video-camera"></i></h5>
                                        <span>Medical Check Up</span>
                                    </div>
                                    <div class="sidecontent">
                                        <h6 style="font-weight: 600;">at 2:30 pm</h6>
                                    </div>
                                </div>

                                <div class="overflex">
                                    <div class="icon">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profiletwo.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>Besis Alexander<i class="flaticon-phone"></i></h5>
                                        <span>Medical Check Up</span>
                                    </div>
                                    <div class="sidecontent">
                                        <h6 style="font-weight: 600;">at 2:00 pm</h6>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <!-- end -->


                <!-- 2nd column area -->

                <div class="overviewColumnarea">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="overview_consult_head">
                                <h5>Consult Requests</h5>
                                <span>See All</span>
                            </div>

                            <div class="card requestscroll">

                                <div class="overflex">
                                    <div class="icon requesticon">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}') }}" alt="">
                                        <img src="{{ url('public/doctor/images/overview/profileone.jpeg') }}" alt="">
                                    </div>
                                    <div class="content Requestscontent">
                                        <h5>Ricardo Russels <i class="flaticon-video-camera"></i></h5>
                                        <h6>Scaling</h6>
                                        <span>Today, 10:00 Am</span>
                                    </div>
                                    <div class="sidecontent iconflex">
                                        <span style="background: #f2f9dc; color: #bfe34e;"><i class="flaticon-check"></i></span>
                                        <span style="background: #f7ced1; color: #d8081a;"><i class="flaticon-close"></i></span>
                                    </div>
                                </div>

                                <div class="overflex">
                                    <div class="icon requesticon">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}" alt="">
                                    </div>
                                    <div class="content Requestscontent">
                                        <h5>Devon Cooper <i class="flaticon-video-camera"></i> <span>(Emergency)</span> </h5>
                                        <h6>Medical Check Up</h6>
                                        <span>Today, 12:00 Am</span>
                                    </div>
                                    <div class="sidecontent iconflex">
                                        <h6 style="background: #f2f9dc; color: #bfe34e;">Accepted</h6>
                                    </div>
                                </div>


                                <div class="overflex">
                                    <div class="icon requesticon">
                                        <img src="{{ url('public/doctor/images/overview/profiletwo.jpg') }}" alt="">
                                    </div>
                                    <div class="content Requestscontent">
                                        <h5>Ana Lopez<i class="flaticon-video-camera"></i><span>(Emergency)</span></h5>
                                        <h6>Medical Check Up</h6>
                                        <span>Today, 14:00 Pm</span>
                                    </div>
                                    <div class="sidecontent iconflex">
                                        <h6 style="background: #f2f9dc; color: #bfe34e;">Accepted</h6>
                                    </div>
                                </div>


                                <div class="overflex">
                                    <div class="icon requesticon">
                                        <img src="{{ url('public/doctor/images/overview/profilefive.jpg') }}" alt="">
                                    </div>
                                    <div class="content Requestscontent">
                                        <h5>Edden Azzard<i class="flaticon-video-camera"></i></h5>
                                        <h6>Scaling</h6>
                                        <span>25 May, 16:00 Pm</span>
                                    </div>
                                    <div class="sidecontent iconflex">
                                        <span style="background: #f2f9dc; color: #bfe34e;"><i class="flaticon-check"></i></span>
                                        <span style="background: #f7ced1; color: #d8081a;"><i class="flaticon-close"></i></span>
                                    </div>
                                </div>


                                <div class="overflex">
                                    <div class="icon requesticon">
                                        <img src="{{ url('public/doctor/images/overview/profilethree.jpg') }}" alt="">
                                    </div>
                                    <div class="content Requestscontent">
                                        <h5>Ricardo Russels <i class="flaticon-video-camera"></i></h5>
                                        <h6>Scaling</h6>
                                        <span>Today, 10:00 Am</span>
                                    </div>
                                    <div class="sidecontent iconflex">
                                        <span style="background: #f2f9dc; color: #bfe34e;"><i class="flaticon-check"></i></span>
                                        <span style="background: #f7ced1; color: #d8081a;"><i class="flaticon-close"></i></span>
                                    </div>
                                </div>


                            </div>

                        </div>


                        <div class="col-md-6">
                            <div class="overview_consult_head">
                                <h5>Recent Consults</h5>
                                <span>See All</span>
                            </div>

                            <div class="card">

                                <div class="overflex">
                                    <div class="icon">
                                        <img src="{{ url('public/doctor/images/overview/profileone.jpeg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>Olive Mark</h5>
                                        <span>Medical Check Up</span>
                                    </div>
                                </div>

                                <div class="overflex">
                                    <div class="icon">
                                        <img src="{{ url('public/doctor/images/overview/profiletwo.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>Rochel Reigns</h5>
                                        <span>Medical Check Up</span>
                                    </div>
                                </div>

                                <div class="overflex">
                                    <div class="icon">
                                        <img src="{{ url('public/doctor/images/overview/profilethree.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>Angelina Watson</h5>
                                        <span>Medical Check Up</span>
                                    </div>
                                </div>

                                <div class="overflex">
                                    <div class="icon">
                                        <img src="{{ url('public/doctor/images/overview/profilefour.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>Besis Alexander</h5>
                                        <span>Medical Check Up</span>
                                    </div>
                                </div>

                                <div class="overflex">
                                    <div class="icon">
                                        <img src="{{ url('public/doctor/images/overview/profilefive.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>Beth Mccoy</h5>
                                        <span>Medical Check Up</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- end -->


                <!-- 3rd column area -->

                <div class="overviewColumnarea">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview_consult_head fullcolumhead">
                                <h5>Clinical Updates</h5>
                                <span>See All</span>
                            </div>

                            <div class="card">

                                <div class="overflex" style="align-items: unset;">
                                    <div class="updatepic">
                                        <img src="{{ url('public/doctor/images/overview/doctorone.jpg') }}" alt="">
                                    </div>
                                    <div class="updatecontent">
                                        <h5>LDL cholestrol: How low can you (safely) go?.</h5>
                                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing eli. Quam odio odit labore recusandae, provident voluptatum tenetur facilis consectetur temporibus veniam ipsum laudantium ut alias sapiente esse a sit nostrum suscipit. <span>Read More</span></h6> 
                                        <div class="bottomcontent">
                                            <span>
                                                <img src="{{ url('public/doctor/images/icons/date.png') }}" alt="">  20/03/23
                                            </span>
                                            <span>
                                                <img src="{{ url('public/doctor/images/icons/edit.png') }}" alt=""> Lauren Spencer
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="overflex" style="align-items: unset;">
                                    <div class="updatepic">
                                        <img src="{{ url('public/doctor/images/overview/doctortwo.jpg') }}" alt="">
                                    </div>
                                    <div class="updatecontent">
                                        <h5>LDL cholestrol: How low can you (safely) go?.</h5>
                                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing eli. Quam odio odit labore recusandae, provident voluptatum tenetur facilis consectetur temporibus veniam ipsum laudantium ut alias sapiente esse a sit nostrum suscipit. <span>Read More</span></h6> 
                                        <div class="bottomcontent">
                                            <span>
                                                <img src="{{ url('public/doctor/images/icons/date.png') }}" alt="">  20/03/23
                                            </span>
                                            <span>
                                                <img src="{{ url('public/doctor/images/icons/edit.png') }}" alt=""> Lauren Spencer
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="overflex" style="align-items: unset;">
                                    <div class="updatepic">
                                        <img src="{{ url('public/doctor/images/overview/doctorthree.jpg') }}" alt="">
                                    </div>
                                    <div class="updatecontent">
                                        <h5>LDL cholestrol: How low can you (safely) go?.</h5>
                                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing eli. Quam odio odit labore recusandae, provident voluptatum tenetur facilis consectetur temporibus veniam ipsum laudantium ut alias sapiente esse a sit nostrum suscipit. <span>Read More</span></h6> 
                                        <div class="bottomcontent">
                                            <span>
                                                <img src="{{ url('public/doctor/images/icons/date.png') }}" alt="">  20/03/23
                                            </span>
                                            <span>
                                                <img src="{{ url('public/doctor/images/icons/edit.png') }}" alt=""> Lauren Spencer
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="overflex" style="align-items: unset;">
                                    <div class="updatepic">
                                        <img src="{{ url('public/doctor/images/overview/doctorone.jpg') }}" alt="">
                                    </div>
                                    <div class="updatecontent">
                                        <h5>LDL cholestrol: How low can you (safely) go?.</h5>
                                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing eli. Quam odio odit labore recusandae, provident voluptatum tenetur facilis consectetur temporibus veniam ipsum laudantium ut alias sapiente esse a sit nostrum suscipit. <span>Read More</span></h6> 
                                        <div class="bottomcontent">
                                            <span>
                                                <img src="{{ url('public/doctor/images/icons/date.png') }}" alt="">  20/03/23
                                            </span>
                                            <span>
                                                <img src="{{ url('public/doctor/images/icons/edit.png') }}" alt=""> Lauren Spencer
                                            </span>
                                        </div>
                                    </div>
                                </div>

                               


                            </div>

                        </div>

                    </div>
                </div>

                <!-- end -->



              </div>

               
            </div>

           
</section>

@endsection






