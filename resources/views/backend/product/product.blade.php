@extends('../../layouts.app')

@section('title', 'product')

@section('content')
    <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/product/product_add_edit')}}';" style="margin-bottom: 10px;">Add</button>
	<form action="{{ url('backend/deleteProductAll') }}" method="post">
	@csrf
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
					<th><input type="checkbox" id="checkAll" onclick="checkProductAll();"></th>
                    <th>ID</th>
					<th>ID หมวดหมู่</th>
                    <th>Category 1</th>
					<th>Category 2</th>
					<th>Category 3</th>
					<th>Image</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>                             
    </div>
	<input type="submit" name="submit" value="Delete"> <input type="button" name="delete_all" value="Delete All" onclick="deleteAll();">
	</form>
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
						"url": "{{url('backend/product/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "category3_checkbox_id"},
						{"data" : "product_id"},
						{"data" : "category3_id"},
						{"data" : "category1_name"},
						{"data" : "category2_name"},
						{"data" : "category3_name"},
						{"data" : "product_image"},
						{"data" : "product_name"},
						{"data" : "product_price"},
						{"data" : "product_code"},
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
			$(".sub_menu_2").css("display", "block");

			$(".sub_menu_product").prop('class', 'active');
		});

		function checkProductAll() {
			if($("#checkAll").is(":checked") == true) {
				$(".check_all").attr('checked', true);
			} else if($("#checkAll").is(":checked") == false) {
				$(".check_all").attr('checked', false);
			}
		}

		function deleteAll() {
			if(confirm('Confirm Delete') == true) {
				window.location.href = '{{ url('delete_all') }}';
			}
		}
	</script>
@endsection
