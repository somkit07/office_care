@extends('../../layouts.app')

@section('title', 'Member')

@section('content')
    {{-- <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/member/member_add_edit')}}';" style="margin-bottom: 10px;">Add</button> --}}
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>อีเมล์</th>
					<th>ชื่อ</th>
					<th>นามสกุล</th>
					<th>เบอร์ติดต่อ</th>
					<th>รหัสผ่าน</th>
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
						"url": "{{url('backend/member/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "member_id"},
						{"data" : "member_email"},
						{"data" : "member_name"},
						{"data" : "member_surname"},
						{"data" : "member_mobile"},
						{"data" : "member_password"},
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
			$(".menu_member").prop('class', 'active');
		});
	</script>
@endsection
