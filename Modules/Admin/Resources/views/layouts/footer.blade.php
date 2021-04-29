s<!-- Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{ url('public/admin_assets/bundles/libscripts.bundle.js') }}"></script>    

<script src="{{ url('public/admin_assets/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ url('public/admin_assets/bundles/c3.bundle.js') }}"></script>

<script src="{{ url('public/admin_assets/bundles/chartist.bundle.js')}}"></script>

<!-- <script src="{{ url('public/admin_assets/js/toastr.js')}}"></script> -->

<script src="{{ url('public/admin_assets/bundles/mainscripts.bundle.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<script src="{{ url('public/admin_assets/js/buttons.bootstrap4.min.js')}}"></script>

<script src="{{ url('public/admin_assets/js/buttons.colVis.min.js')}}"></script>

<script src="{{ url('public/admin_assets/js/buttons.html5.min.js')}}"></script>

<script src="{{ url('public/admin_assets/js/buttons.print.min.js')}}"></script>

<script src="{{ url('public/admin_assets/js/sweetalert.min.js')}}"></script>

<script src="{{ url('public/admin_assets/js/index.js')}}"></script>

<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>



<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'description' );
</script>

<!-- doctor -->
<script type="text/javascript">
  $(document).ready(function(){

   $.ajaxSetup({
         headers:{
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
   });

  //initalize table

  var table = $('.data-table-doctor').DataTable({
    processing:true,
    serverSide:true,
    ajax:"{{ url('admin/doctor')}}",
    columns:[
           {data:'DT_RowIndex',name:'DT_RowIndex'},
           {data:'first_name',name:'first_name'},
           {data:'last_name',name:"last_name"},
           {data:'email',name:'email'},
           {data:'phone',name:'phone'},
           {data:'action',name:'action',orderable: true,searchable: true}

    ]
  });




   // 
   $('#sameAddress').click(function(){
        // alert($('#office_first_name').val())
      $('#residence_first_name').val($('#office_first_name').val());
      $('#residence_last_name').val($('#office_last_name').val());
      $('#residence_email').val($('#office_email').val());
      $('#residence_phone').val($('#office_phone').val());
      $('#residence_address_1').val($('#office_address_1').val());
      $('#residence_address_2').val($('#office_address_2').val());
      $('#residence_zip_code').val($('#office_zip_code').val());
      $('#residence_city').val($('#office_city').val());
      $('#residence_state').val($('#office_state').val());
      $('#residence_country').val($('#office_country').val());
   })

  })
</script>



<!-- clinical update -->
<script type="text/javascript">
  $(document).ready(function(){

   $.ajaxSetup({
         headers:{
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
   });

  //initalize table

  var table = $('.data-table-clinical-update').DataTable({
    processing:true,
    serverSide:true,
    ajax:"{{ url('admin/clinical-update')}}",
    columns:[
           {data:'DT_RowIndex',name:'DT_RowIndex'},
           {data:'image',name:'image'},
           {data:'title',name:"title"},
           {data:'description',name:'description'},
           {data:'date',name:'date'},
           {data:'action',name:'action',orderable: true,searchable: true}

    ]
  });




   // 
   $('#sameAddress').click(function(){
        // alert($('#office_first_name').val())
      $('#residence_first_name').val($('#office_first_name').val());
      $('#residence_last_name').val($('#office_last_name').val());
      $('#residence_email').val($('#office_email').val());
      $('#residence_phone').val($('#office_phone').val());
      $('#residence_address_1').val($('#office_address_1').val());
      $('#residence_address_2').val($('#office_address_2').val());
      $('#residence_zip_code').val($('#office_zip_code').val());
      $('#residence_city').val($('#office_city').val());
      $('#residence_state').val($('#office_state').val());
      $('#residence_country').val($('#office_country').val());
   })

  })
</script>





</body>

</html>