@extends('../../layouts.app')

@section('title', 'Agent')

@section('content')
    {{-- <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/agent/agent_add_edit')}}';" style="margin-bottom: 10px;">Add</button> --}}
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
					<th width="15%">ค่าสมัครสมาชิก @if(!empty($first_fee)){{ $first_fee->first_fee_amount }}@endif บาท</th>
                    <th>ID</th>
					<th>Type</th>
					<th>Wait</th>
                    <th>Agent</th>
					<th>Email</th>
					<th>Password</th>
					<th>Point</th>
					<th>First Buy</th>
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
						"url": "{{url('backend/agent/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "agent_register_500"},
						{"data" : "agent_id"},
						{"data" : "agent_type"},
						{"data" : "agent_wait"},
						{"data" : "name_surname"},
						{"data" : "agent_email"},
						{"data" : "agent_password"},
						{"data" : "agent_point"},
						{"data" : "order_detail_datetime_create"},
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
			$(".sub_menu_4").css("display", "block");

			$(".sub_menu_agent").prop('class', 'active');
		});

		function setRegister500(agent_id) {
			if($("#agent_id_" + agent_id).is(":checked") == true) {
				var agent_register_500 = "Yes";
				var agent_wait = "No";
			} else if($("#agent_id_" + agent_id).is(":checked") == false) {
				var agent_register_500 = "No";
				var agent_wait = "Yes";
			}

			$.post('{{ url("backend/agent/ajaxRegister500") }}', { agent_id: agent_id, agent_register_500: agent_register_500, agent_wait: agent_wait, "_token": "{{ csrf_token() }}" }, function(data) {
				alert('เซ็ทค่าสมัครสมากชิก 500 บาทสำเร็จแล้ว');

				location.reload();
			});
		}

		function setPoint(agent_id, agent_point_real) {
			if(confirm('Comfirm Change Point') == true) {
				$.post('{{ url("ajaxSetPoint") }}', { agent_id: agent_id, agent_point_real: agent_point_real, "_token": "{{ csrf_token() }}" }, function(data) {

});
			}
		}
	</script>
@endsection
