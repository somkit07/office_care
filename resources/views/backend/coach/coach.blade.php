@extends('../../layouts.app')

@section('title', 'Coach')

@section('content')
    <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/coach/coach_add_edit')}}';" style="margin-bottom: 10px;">Add</button>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
					<th>Name</th>
					<th>Nick Name</th>
                    <th>Action</th>
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
						"url": "{{url('backend/coach/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "coach_id"},
						{"data" : "coach_image"},
						{"data" : "name"},
						{"data" : "nick_name"},
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

			$(".sub_menu_coach").prop('class', 'active');
		});
	</script>
@endsection
