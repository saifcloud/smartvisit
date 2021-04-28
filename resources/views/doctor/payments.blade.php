@extends('doctor.layouts.default')
@section('content')
<section class="content-wrapper"> 
@include('doctor.partials.sidebar')

            <div class="side-wrapper">
               <div class="card wrapper-card">
                   <div class="card-body form-body">
                       <div class="row">
                           <div class="col-md-12">
                                <div class="paymentslist">
                                    <ul class="paymentul">
                                        <li>
                                            <div class="card paymentcard">
                                              <div class="icon" style="color: purple; background-color: #f5b6f566;">
                                                  <i class="fa fa-credit-card" aria-hidden="true"></i>
                                              </div>
                                              <div class="content">
                                                  <h5>$15,000</h5>
                                                  <p>Paid</p>
                                              </div>
                                            </div>
                                          </li>
                                        <li>
                                          <div class="card paymentcard">
                                            <div class="icon" style="color: rgb(0, 0, 0); background-color: #c0c0c0;">
                                              <i class="fa fa-database" aria-hidden="true"></i>
                                            </div>
                                            <div class="content">
                                                <h5>$2,320</h5>
                                                <p>Outstanding</p>
                                            </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="card paymentcard">
                                            <div class="icon" style="color: rgb(228, 186, 0); background-color: #fcfbcb;">
                                              <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="content">
                                                <h5>$1,200</h5>
                                                <p>DUE MM/DAY</p>
                                            </div>
                                          </div>
                                      </li>
                                  </ul>
                                </div>
                           </div>
                           <div class="col-md-10 offset-md-1" >
                            <div class="paymenttabarea">
                                <div class="paymenttabbtn prescribetabmenu ">

                                    <ul>
                                        <li class="prescribeactive">
                                            <button type="button" class="prescribebtn" id="payment">
                                                Payments
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="prescribebtn" id="deposit">
                                                Setup direct deposit
                                            </button>
                                        </li>
                                    </ul>

                                    
                                </div>

                                <div class="paymenttabcontent">
                                    <div class="tabcontentone">
                                        <div class="paginatearea">
                                            <button type="button" class="paginatebtn">
                                                <span>
                                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                </span> April
                                            </button>
                                            <span>February 2020</span>
                                            <button type="button" class="paginatebtn">
                                                June <span class="righticon">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </span>
                                            </button>
                                        </div>

                                        <div class="paymentstable">
                                            <table class="table">
                                                <thead class="custom-light">
                                                  <tr>
                                                    <th scope="col"># ID</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Invoice</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td scope="row"># 1</td>
                                                    <td>Outstanding</td>
                                                    <td>$150</td>
                                                    <td>02/01/02</td>
                                                    <td>icon</td>
                                                  </tr>
                                                  <tr>
                                                    <td scope="row"># 1</td>
                                                    <td>Outstanding</td>
                                                    <td>$150</td>
                                                    <td>02/01/02</td>
                                                    <td>icon</td>
                                                  </tr>
                                                  <tr>
                                                    <td scope="row"># 1</td>
                                                    <td>Outstanding</td>
                                                    <td>$150</td>
                                                    <td>02/01/02</td>
                                                    <td>icon</td>
                                                  </tr>
                                                  <tr>
                                                    <td scope="row"># 2</td>
                                                    <td style="color: gold;">Due on 02/01/20</td>
                                                    <td>$500</td>
                                                    <td>02/01/02</td>
                                                    <td>icon</td>
                                                  </tr>
                                                  <tr>
                                                    <td scope="row"># 2</td>
                                                    <td style="color: gold;">Due on 02/01/20</td>
                                                    <td>$500</td>
                                                    <td>02/01/02</td>
                                                    <td>icon</td>
                                                  </tr>
                                                  <tr>
                                                    <td scope="row"># 2</td>
                                                    <td style="color: gold;">Due on 02/01/20</td>
                                                    <td>$500</td>
                                                    <td>02/01/02</td>
                                                    <td>icon</td>
                                                  </tr>
                                                  <tr>
                                                    <td scope="row"># 1</td>
                                                    <td>Outstanding</td>
                                                    <td>$150</td>
                                                    <td>02/01/02</td>
                                                    <td>icon</td>
                                                  </tr>
                                                  <tr>
                                                    <td scope="row"># 1</td>
                                                    <td>Outstanding</td>
                                                    <td>$150</td>
                                                    <td>02/01/02</td>
                                                    <td>icon</td>
                                                  </tr>
                                                  <tr>
                                                    <td scope="row"># 3</td>
                                                    <td style="color: purple;">Paid</td>
                                                    <td>$250</td>
                                                    <td>02/01/02</td>
                                                    <td>icon</td>
                                                  </tr>
                                                  <tr>
                                                    <td scope="row"># 3</td>
                                                    <td style="color: purple;">Paid</td>
                                                    <td>$250</td>
                                                    <td>02/01/02</td>
                                                    <td>icon</td>
                                                  </tr>
                                                  <tr>
                                                    <td scope="row"># 3</td>
                                                    <td style="color: purple;">Paid</td>
                                                    <td>$250</td>
                                                    <td>02/01/02</td>
                                                    <td>icon</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div>

                                        <div class="paginationlist">
                                            <ul>
                                                <li>
                                                    <button type="button" class="paginatebtn">
                                                        <span>
                                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                        </span> Prev
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="paginatebtn">
                                                        Next <span class="righticon">
                                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="tabcontentwo">
                                       <div class="row">
                                           <div class="col-md-8 offset-md-2">
                                            <h5>Setup direct deposit account</h5>
                                            <p>This is the bank where you will receive your earnings.</p>
    
                                            <div class="paymentsform">
                                                <h5>Setup Direct Deposit</h5>
                                                <form action="">
                                                    <div class="row">
                                                       <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Your Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                       </div>
    
                                                       <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Bank Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                       </div>
    
                                                       <div class="col-md-12">
                                                           <h6 style="font-weight: 600;">Same as Residence Address?</h6>
                                                        <div class="form-group radiogroup">
                                                            <label class="paymentradio">Checking
                                                                <input type="radio" checked="checked" name="radio">
                                                                <span class="checkmark"></span>
                                                              </label>
                                                              <label class="paymentradio">Savings
                                                                <input type="radio" name="radio">
                                                                <span class="checkmark"></span>
                                                              </label>
                                                        </div>
                                                       </div>
    
                                                       <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Routing</label> <span class="character">9 Character</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                       </div>
    
                                                       <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Account</label> <span class="character">12 Character</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                       </div>
    
    
                                                       <div class="col-md-12">
                                                       <div class="creatbtn">
                                                        <button type="button" class="btn editbtn">
                                                            Create Account
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

                            </div>

                           </div>
                       </div>
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
            $(this).parent().addClass('prescribeactive').siblings().removeClass("prescribeactive");
        });
        $('#deposit').click(function(){
            $('.tabcontentwo').show();
            $('.tabcontentone').hide();
            $(this).parent().addClass('prescribeactive').siblings().removeClass("prescribeactive");
        })
    })
</script>

<@endsection