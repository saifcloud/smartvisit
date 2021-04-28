@extends('doctor.layouts.default')
@section('content')

<section class="content-wrapper"> 
@include('doctor.partials.sidebar')

            <div class="side-wrapper">
               <div class="card wrapper-card">
                  
                    <div class="card-body">
                        <div class="main-heading">
                            <h5>My Availability</h5>
                        </div>
                        <div class="availability_pagination">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="paginationlist patient-pagination">
                                    <ul>
                                        <li>
                                            <button type="button" class="paginatebtn">
                                                <span>
                                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                </span>
                                                April
                                            </button>
                                        </li>
                                        <li>
                                            <span class="middlepaginate">May 2020</span>
                                        </li>
                                        <li>
                                            <button type="button" class="paginatebtn">
                                                June
                                               <span class="righticon">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="form-group rightgroup">
                                   <a href="{{ url('doctor/availability-edit')}}">
                                    <button type="button" class="orangebtn">
                                        <i class="flaticon-write"></i> Edit Mode
                                    </button>
                                   </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="Availability_table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>10 am - 12 am</th>
                                    <th>12 am - 2 pm</th>
                                    <th>2 pm - 4 pm</th>
                                    <th>4 pm - 6 pm</th>
                                    <th>6 pm - 8 pm</th>
                                    <th>8 am - 10 pm</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td width="18%">
                                        <span class="tableday">Fri</span>  <span class="daynum">1 st</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="greytd"></td>
                                    <td class="greytd"></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                        <span class="tableday"> Sat</span>  <span class="daynum">2 nd</span>
                                    </td>
                                    <td></td>
                                    <td class="greytd"></td>
                                    <td></td>
                                    <td class="greytd"></td>
                                    <td></td>
                                    <td class="greytd"></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Sun </span> <span class="daynum">3 rd</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="greytd"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Mon </span> <span class="daynum">4 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td class="dayactive">
                                       <span class="tableday"> Tue </span> <span class="daynum">5 th</span>
                                    </td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                    <td></td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Wed </span> <span class="daynum">6 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Thu </span> <span class="daynum">7 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Fri </span> <span class="daynum">8 th</span>
                                    </td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Sat </span> <span class="daynum">9 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Sun </span> <span class="daynum">10 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Mon </span> <span class="daynum">11 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Tue </span>  <span class="daynum">12 th</span>
                                    </td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td></td>
                                    <td></td>
                                </tr>


                                <tr>
                                    <td>
                                       <span class="tableday"> Wed </span> <span class="daynum">13 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Thu </span> <span class="daynum">14 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                    <td class="activeright"></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Fri </span> <span class="daynum">15 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Sat </span> <span class="daynum">16 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Sun </span> <span class="daynum">17 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Mon </span> <span class="daynum">18 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>


                                <tr>
                                    <td>
                                       <span class="tableday"> Tue </span> <span class="daynum">19 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Wed </span> <span class="daynum">20 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Thu </span> <span class="daynum">21 st</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Fri </span> <span class="daynum">22 nd</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Sat </span> <span class="daynum">23 rd</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Sun </span> <span class="daynum">24 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>


                                <tr>
                                    <td>
                                      <span class="tableday">  Mon </span> <span class="daynum">25 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Tue </span> <span class="daynum">26 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Wed </span> <span class="daynum">27 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Thu </span> <span class="daynum">28 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                       <span class="tableday"> Fri </span> <span class="daynum">29 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>
                                      <span class="tableday">  Sat </span> <span class="daynum">30 th</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                   
               </div>

               
            </div>

           
</section>


<!-- JS, Popper.js, and jQuery -->
<script src="{{ url('public/doctor/js/jquery.min.js') }}"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->

<script>
    $(document).ready(function(){
        $('.tabcontentwo').hide();
        $('#payment').click(function(){
            $('.tabcontentone').show();
            $('.tabcontentwo').hide();
            $(this).parent().addClass('paymentactivebtn').siblings().removeClass("paymentactivebtn");
        });
        $('#deposit').click(function(){
            $('.tabcontentwo').show();
            $('.tabcontentone').hide();
            $(this).parent().addClass('paymentactivebtn').siblings().removeClass("paymentactivebtn");
        })
    })
</script>

@endsection
