@extends('admin::layouts.master')
@section('content')
<body class="theme-orange">

<!-- Page Loader -->
<!-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="http://www.wrraptheme.com/templates/hexabit/html/assets/images/icon-light.svg" width="48" height="48" alt="HexaBit"></div>
        <p>Please wait...</p>        
    </div>
</div> -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">
@include('admin::partials.navbar')
@include('admin::partials.sidebar')
    

    

    

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>{{ isset($page_title) ? $page_title:""}}</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}"><i class="icon-home"></i></a></li>
                        <!-- <li class="breadcrumb-item">Forms</li> -->
                        <li class="breadcrumb-item active">{{ isset($page_title) ? $page_title:""}}</li>
                    </ul>
                    <!-- <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a> -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            
            <div class="row clearfix">
                <div class="col-md-12">

                    <div class="card">
                        <div class="header">
                            <h2></h2>
                        </div>

                        <div class="col-sm-12">
                             @if(Session()->has('failed'))
                             <p class="alert alert-danger text-center">{{ Session()->get('failed')}}</p>
                             @endif
                        </div>


                        <div class="body">
                            <form id="basic-form" method="post" action="{{ url('admin/client/update')}}" novalidate>
                               @csrf
                                <input type="hidden" name="client_id" value="{{ base64_encode($client->id) }}">
                                 
                                <div class="row col-sm-12">
  
                                    <div class="form-group col-sm-6">
                                        <label>Client name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $client->name }}">
                                        @if($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>


                                    <div class="form-group col-sm-6">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="{{ $client->email }}" readonly="">
                                        @if($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>


                                    

                                </div>




                                 <div class="row col-sm-12">

                                    


                                    <div class="form-group col-sm-6">
                                        <label>Phone</label>
                                        <input type="number" class="form-control" name="phone" value="{{ $client->phone }}" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                        @if($errors->has('phone'))
                                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                                        @endif
                                    </div>


                                 <!--    <div class="form-group col-sm-6">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password">
                                        @if($errors->has('password'))
                                        <p class="text-danger">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div> -->

                                        <div class="form-group col-sm-6">
                                        <label>Password</label>
                                        
                                        <div class="row">
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" name="password" id="passwordRn">
                                        </div>

                                        <div class="col-sm-4">
                                        <a class="btn btn-success" href="javascript:void(0)" id="generatePassword">Generate password</a>
                                        </div>
                                        </div>
                                        @if($errors->has('password'))
                                        <p class="text-danger">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>

                                    

                                </div>


                                   <div class="row col-sm-12">

                            
                                    <div class="form-group col-sm-6">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control">{{ $client->address }}</textarea>
                                        @if($errors->has('address'))
                                        <p class="text-danger">{{ $errors->first('address') }}</p>
                                        @endif
                                    </div>

                                    

                                </div>
                               
                                

                               
                               
                              
                               
                               
                                <br>

                                <button type="submit" class="btn btn-primary ml-3">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</div>

@endsection
<!-- <script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="http://www.wrraptheme.com/templates/hexabit/html/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="http://www.wrraptheme.com/templates/hexabit/html/assets/vendor/parsleyjs/js/parsley.min.js"></script>
    
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
    $(function() {
        // validation needs name of the element
        $('#food').multiselect();

        // initialize after multiselect
        $('#basic-form').parsley();
    });
    </script>
</body>

</html>
 -->