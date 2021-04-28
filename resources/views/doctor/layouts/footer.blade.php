<!-- JS, Popper.js, and jQuery -->
<script src="{{ url('public/doctor/js/jquery.min.js') }}"></script>
<script src="{{ url('public/doctor/js/bootstrap.min.js') }}"></script>



</body>
</html>

<!-- product -->
<script type="text/javascript">
	$(document).ready(function(){
     $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
	 });


	      var table = $('.data-table-product').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: "{{ url('admin/product') }}",
	        columns: [
	            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
	            {data: 'name', name: 'name'},
	            {data: 'quantity', name: 'quantity'},
	            {data: 'average_price', name: 'average_price'},
	            {data: 'total', name: 'total'},
	            {data: 'date', name: 'date'},
	            {data: 'action', name: 'action', orderable: false, searchable: false},
	        ]
	    });

         

         //show total 

         
         $('.gettotal').on('input', function() {
			   var qty          = $('#pquantity').val();
			   var buying_price = $('#buying_price').val();
               if(qty !=''  && buying_price !=''){
               	$('#addptp').val(parseFloat(qty)* parseFloat(buying_price));
               }else{
               	$('#addptp').val("");
               }

			});
         //on click modal open
        $('body').on('click','#st-add-quantity',function(){
        	$('#product_id').val($(this).data('pid')); 
            $('#addQty').modal('show');
        })



       //on close model 

       $('body').on('click','.addQtyClose',function(){
       	 $('#iquantity').val("");
       	 $('#iprice').val("");


       	 $('.iquantity-error').text('');
       	 $('.iprice-error').text('');


       })

	   // ajax

	    $('body').on('click','#add-quantity',function(){
        
	    	var error = 0;

            if($('#iquantity').val()==''){
            	$('.iquantity-error').text('*Please enter quantity.');
            	 error++;
            }else if($('#iquantity').val()==0){
                $('.iquantity-error').text('*Quantity should not be zero.');
            	 error++;
            }else{
            	$('.iquantity-error').text('');
            }

             if($('#iprice').val()==''){

            	$('.iprice-error').text('*Please enter price.');
            	 error++;

            }else if($('#iprice').val()==0){

                $('.iprice-error').text('*Price should not be zero.');
            	 error++;

            }else{
            	$('.iprice-error').text('');
            }


            if(error == 0){
            	$.ajax({
                        url:"{{ url('admin/product/quantity')}}",
                        type:"POST",
                        data:{
                        	product_id:$('#product_id').val(),
                        	quantity:$('#iquantity').val(),
                        	buying_price:$('#iprice').val()
                        },
                        success:function(response){
                             console.log(response)
	                         if(response.status==true){
                              $('#addQty').modal('hide');
                              $('#iquantity').val("");
       	                      $('#iprice').val("");
       	                      table.draw();
	                         }

                        }
            	})
            }

	    })



	})
</script>




<!-- client -->
<script type="text/javascript">
	$(document).ready(function(){
     $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
	 });


	      var table = $('.data-table-client').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: "{{ url('admin/client') }}",
	        columns: [
	            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
	            {data: 'name', name: 'name'},
	            {data: 'email', name: 'email'},
	            {data: 'phone', name: 'phone'},
	            {data: 'address', name: 'address'},
	            {data: 'date', name: 'date'},
	            {data: 'action', name: 'action', orderable: false, searchable: false},
	        ]
	    });



	})
</script>



<!-- stock -->
<script type="text/javascript">
	 
      $(document).ready(function(){
	         $.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		      });





	 var table = $('.data-table-stock').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: "{{ url('stock') }}",
	        columns: [
	            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
	            {data: 'date', name: 'date'},
	           // {data: 'client', name: 'client'},
	            {data: 'product', name: 'product'},
	            {data: 'quantity', name: 'quantity'},
	            {data: 'average_buy_price', name: 'average_buy_price'},
	            {data: 'invested_amount', name: 'invested_amount'},
	            {data: 'current_price', name: 'current_price'},
	            {data: 'current_value', name: 'current_value'},
	           // {data: 'sell_pricee', name: 'sell_pricee'},
	           // {data: 'sell_value', name: 'sell_value'},
	            {data: 'profit', name: 'profit'},
	            {data: 'profit_percentage', name: 'profit_percentage'},
	            {data: 'stock_end_date', name: 'stock_end_date'},
	           
	           
	           // {data: 'buying_price', name: 'buying_price'},
	           
	           
	           // {data: 'amount', name: 'amount'},
	           // {data: 'total', name: 'total'},
	           // {data: 'profit', name: 'profit'},
	           // {data: 'actual_profit', name: 'actual_profit'},
	            {data: 'action', name: 'action', orderable: false, searchable: false},
	        ]
	    });







         	//date picker
			  $('#st-date').datepicker({
			  	  autoclose: true, 
                  todayHighlight: true,
                  format: 'yyyy-mm-dd'
			  }).datepicker('update', new Date());

			  $('#st-trade-end').datepicker({
			  	  autoclose: true, 
                  todayHighlight: true,
                 format: 'yyyy-mm-dd'
			  }).datepicker('update', new Date());
           


           //get buying price 
            $('body').on('change','#stock_item',function(){
              // alert($(this).val());
              $.ajax({
              	      url:"{{ url('admin/get-stock-item')}}",
              	      type:"POST",
              	      data:{product_id:$(this).val()},
              	      success:function(response){
              	      	$('#buying_price').val(response.product.buying_price)
              	      }
              })
            });


            //on  input selling price
             $('#selling_price').on('input', function() {
			   var selling_price = $(this).val();
			   var quantity      = $('#quantity').val();
			   var buying_price  = $('#buying_price').val();
			
               if(selling_price !=''){
               	var sellingAmount = parseFloat(quantity)* parseFloat(selling_price);
               	$('#st_total_amount').val(sellingAmount);
                
                //amount profit
                var buyingAmount = parseFloat(quantity)* parseFloat(buying_price);
                var profitInAmount = parseFloat(sellingAmount) - parseFloat(buyingAmount);
               	$('#stprofit').val(profitInAmount);


               	//percentage profit
               	var percentageProfit = (parseFloat(profitInAmount) /parseFloat(buyingAmount)*100).toFixed(2);
               	$('#stprofitper').val(percentageProfit);
               }else{
               	$('#st_total_amount').val("");
               }

			});




            // onclose model remove validations
             $('body').on('click','.addStockClose',function(){
	             $('.client-error').text('');
	             $('#st-date-error').text('');
	             $('.stock_item-error').text('');
	             $('.st-end-error').text('');
	             $('.quantity-error').text('');
	             $('.buying_price-error').text('');
	             $('.selling_price-error').text('');
	             $(':input').val('');
             });


             $('body').on('click','#add-stock-to-client',function(){

              var error = 0;

              if($('#client').val()==""){
              	$('.client-error').text('*Please select client.');
              	error++;
              }else{
              	$('.client-error').text('');
              }



               if($('#st-date').val()==""){
              	$('.st-date-error').text('*Please select date.');
              	 error++;
              }else{
              	 $('.st-date-error').text('');
              }




               if($('#stock_item').val()==""){
              	$('.stock_item-error').text('*Please select stock item.');
              	error++;
              }else{
              	$('.stock_item-error').text('');
              }


              if($('#st-trade-end').val()==""){
              	$('.st-end-error').text('*Please select trade end date.');
              	error++;
              }else{
              	$('.st-end-error').text('');
              }



               if($('#quantity').val()==""){
              	$('.quantity-error').text('*Please enter quantity');
              	error++;
              }else{
              	$('.quantity-error').text('');
              }



              //  if($('#buying_price').val()==""){
              // 	$('.buying_price-error').text('*Please enter buying price');
              // 	error++;
              // }else{
              // 	$('.buying_price-error').text('');
              // }



             if($('#selling_price').val()==""){
              	$('.selling_price-error').text('*Please enter selling price');
              	error++;
              }else{
              	$('.selling_price-error').text('');
              }


              //ajax
              if(error==0){
              
                $.ajax({
                	   url:"{{ url('admin/add-stock-to-client')}}",
                	   type:"POST",
                	   data:{
                       client_id:     $('#client').val(),
                       date:          $('#st-date').val(),
                       product_id:    $('#stock_item').val(),
                       trade_end_date:$('#st-trade-end').val(),
                       quantity:      $('#quantity').val(),
                       // buying_price:  $('#buying_price').val(),
                       selling_price: $('#selling_price').val()
                	   },
                	   success:function(response){
                       console.log(response)
	                       if(response.status==true){
                            $('.server-error').text(response.message);
                            setTimeout(function() { 
                            $('#addStockToClient').modal('hide');
                            $('#client').val("");
                            $('#stock_item').val("");
                            $('#st-date').val("");
                            $('#st-trade-end').val("");
                            $('#quantity').val("");
                            $('#buying_price').val("");
                            $('#selling_price').val("");
                             table.draw();
                             }, 3000);
                           
	                       }else{
	                       	$('.server-error').text(response.message);
	                       }
                	   }
                })
              }


             })




		  });
      
</script>



<script>
    $(document).ready(function(){
        
        // for stock table details
        
          var stock_id = $('#stock_id').val();
          var table = $('.data-table-stock-detais').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: "{{ url('stock/show') }}/"+stock_id,
	        columns: [
	            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
	           // {data: 'date', name: 'date'},
	           // {data: 'client', name: 'client'},
	            {data: 'product', name: 'product'},
	            {data: 'quantity', name: 'quantity'},
	            {data: 'buying_price', name: 'buying_price'},
	            {data: 'invested_amount', name: 'invested_amount'},
	            {data: 'current_value', name: 'current_value'},
	            {data: 'sell_pricee', name: 'sell_pricee'},
	            {data: 'sell_value', name: 'sell_value'},
	            {data: 'profit', name: 'profit'},
	            {data: 'status', name: 'status'},
	           // {data: 'profit_percentage', name: 'profit_percentage'},
	           // {data: 'stock_end_date', name: 'stock_end_date'},
	           
	           
	           // {data: 'buying_price', name: 'buying_price'},
	           
	           
	           // {data: 'amount', name: 'amount'},
	           // {data: 'total', name: 'total'},
	           // {data: 'profit', name: 'profit'},
	           // {data: 'actual_profit', name: 'actual_profit'},
	           // {data: 'action', name: 'action', orderable: false, searchable: false},
	        ]
	    });
	    
	    
    })
</script>

</body>

</html>