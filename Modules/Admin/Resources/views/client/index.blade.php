@extends('admin::layouts.master')
@section('content')
<body class="theme-orange">

<!-- Page Loader -->

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
                        <!-- <li class="breadcrumb-item">Table</li> -->
                        <li class="breadcrumb-item active">{{ isset($page_title) ? $page_title:""}}</li>
                    </ul>
                    <a href="{{ url('admin/client/create')}}" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    @if(Session()->has('success'))
                    <p class="alert alert-success text-center">{{ Session()->get('success')}}</p>
                    @endif

                     @if(Session()->has('failed'))
                    <p class="alert alert-danger text-center">{{ Session()->get('failed')}}</p>
                    @endif
                    <div class="card">
                        <!-- <div class="header">
                            <h2>Add Row</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>                       
                        </div> -->
                        <div class="body">
                           <!--  <button id="addToTable" class="btn btn-primary m-b-15" type="button">
                                <i class="icon wb-plus" aria-hidden="true"></i> Add row
                            </button> -->
                            <div class="table-responsive">
                                <table class="table table-bordered data-table-client">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Created At</th>
                                                <th width="100px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</div>



<!--start Model for add quantity  -->

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quantity</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--  -->


         <div class="row col-sm-12">

           <div class="form-group col-sm-6">
           <label>Quantity</label>
           <input type="number"   class="form-control" name="quantity"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" >
           <p class="text-danger"></p>
          </div>

          <div class="form-group col-sm-6">
          <label>Buying price</label>
          <input type="number" step="1" min="1" class="form-control" name="buying_price">
          <p class="text-danger"></p>
          </div>


             
        </div>
        <!--  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
<!--end Model for add quantity  -->

@endsection
