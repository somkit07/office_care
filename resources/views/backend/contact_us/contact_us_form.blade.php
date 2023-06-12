@extends('../../layouts.app')

@section('title', 'Contact Us Form')

@section('content')
    {{-- <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/banner_slide/banner_slide_add_edit')}}';" style="margin-bottom: 10px;">Add</button> --}}
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ชื่อ</th>
					<th>นามสกุล</th>
					<th>เบอร์ติดต่อ</th>
					<th>อีเมล์</th>
					<th>หัวข้อ</th>
					<th>ข้อความ</th>
                    <th>Datetime Create</th>
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
						"url": "{{url('backend/contact_us_form/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "contact_us_form_id"},
						{"data" : "contact_us_form_name"},
						{"data" : "contact_us_form_surname"},
						{"data" : "contact_us_form_mobile"},
						{"data" : "contact_us_form_email"},
						{"data" : "contact_us_form_subject"},
						{"data" : "contact_us_form_message"},
						{"data" : "contact_us_form_datetime_create"},
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
			$(".sub_menu_3").css("display", "block");

			$(".sub_menu_contact_us_form").prop('class', 'active');
		});
	</script>
@endsection
