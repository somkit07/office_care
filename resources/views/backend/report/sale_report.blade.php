@extends('../../layouts.app')

@section('title', 'Sale Report')

@section('content')
    {{-- <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/banner_slide/banner_slide_add_edit')}}';" style="margin-bottom: 10px;">Add</button> --}}
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order No</th>
					<th>Name - Surname</th>
					<th>Mobile</th>
                    {{-- <th>Address</th> --}}
					<th>Product</th>
					<th>Image</th>
					<th>Color</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Datetime Create</th>
					<th>Datetime Update</th>
                </tr>
            </thead>
            <tbody>
@if(!empty($rows))
	@php
	$i = 1;	
	@endphp
	@endphp
	@foreach($rows as $r)
				<tr>
					<td>{{ $i }}</td>
					<td>{{ $r->order_no }}</td>
					<td>{{ $r->order_shipping_address_name_surname }}</td>
					<td>{{ $r->order_shipping_address_mobile }}</td>
					{{-- <td>{{Address}}</td> --}}
					<td>{{ $r->order_detail_name }}</td>
					<td><img src="{{ asset('public/uploads/product/'.$r->order_detail_image) }}" width="150"></td>
					<td>{{ $r->order_detail_color }}</td>
					<td>{{ $r->order_detail_qty }}</td>
					<td>{{ $r->order_detail_price }}</td>
					<td>{{ $r->order_datetime_create }}</td>
					<td>{{ $r->order_datetime_update }}</td>
				</tr>

		@php
		$i++;
		@endphp
	@endforeach
@endif
            </tbody>
        </table>                             
    </div>
@endsection

@section('script_footer')
    <script>
        $(document).ready(function() {
		    App.init();
			//TableManageDefault.init();
    		
			/*var TableList = $('#data-table').dataTable({
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
						"url": "{{url('backend/banner_slide/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "banner_slide_id"},
						{"data" : "banner_slide_image"},
						{"data" : "banner_slide_text1"},
						{"data" : "banner_slide_text2"},
						{"data" : "action"},
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
			*/
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
			$(".sub_menu_4").css("display", "block");

			$(".sub_menu_sale_report").prop('class', 'active');
		});
	</script>
@endsection
