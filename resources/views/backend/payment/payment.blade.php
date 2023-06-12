@extends('../../layouts.app')

@section('title', 'payment')

@section('content')
    <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/payment/payment_add_edit')}}';" style="margin-bottom: 10px;">Add</button>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
					<th>Order No</th>
                    <th>Amount</th>
					<th>Name Surname</th>
					<th>Date</th>
					<th>Time</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>                             
    </div>
@endsection

@section('script_footer')
    <script>
        $(document).ready(function() {
		    App.init();
			//TableManageDefault.init();
    		
			var TableList = $('#data-table').dataTable({
            	"ordering": true,
				"stateSave": true,
				"pageLength": 10,
				lengthMenu: [
					[ 10, 25, 50, 100, -1],
					[ '10', '25', '50', '100', 'All']
				],
				dom: 'Bfrtip',
					"ajax": {
						"type": "POST",
						"url": "{{url('backend/payment/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "payment_id"},
						{"data" : "order_no"},
						{"data" : "payment_amount"},
						{"data" : "payment_name_surname"},
						{"data" : "payment_date"},
						{"data" : "payment_time"},
					],
				});
            
		    
		    $("#page-loader").addClass('hide');
		    $("#page-container").addClass('in');
		    
		    // start search
		    $('input.global_filter').on( 'keyup click', function () {
		        filterGlobal();
		    } );
		 
		    $('input.column_filter').on( 'keyup click', function () {
		        filterColumn( $(this).parents('td').attr('data-column') );
		    } );
		    // end search
		});
		
		function filterGlobal () {
		    $('#data-table').DataTable().search(
		        $('#global_filter').val()
		    ).draw();
		}
		 
		function filterColumn ( i ) {
		    $('#data-table').DataTable().columns( i ).search(
		        $('#col' + i + '_filter').val()
		    ).draw();
		}

		$(document).ready(function() {
			//$(".sub_menu_2").css("display", "block");

			$(".menu_payment").prop('class', 'active');
		});
	</script>
@endsection
