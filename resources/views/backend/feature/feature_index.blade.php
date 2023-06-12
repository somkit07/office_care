@extends('../../layouts.app')

@section('title', 'Feature')

@section('content')

	<button id="btn_create" class="btn btn-sm btn-primary m-r-5" type="button" style="margin-bottom: 10px;">Add</button>

	<div class="table-responsive">
		<table id="data-table" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Category 3</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
		</table>                             
	</div>


<!-- Modal Edit Feature Section -->
<div class="modal fade" id="featureSectionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Feature Section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formedit_featuresection">
                    <input type="hidden" id="fselection_id" name="fselection_id" value="">
					<div class="form-group">
						<label for="exampleInputEmail1">Category 3</label>
						<select name="category3_id" id="category3_id" class="form-control" required>
							<option value="">Please Select</option>
							@if(!empty($category3))
								@foreach($category3 as $r)
												<option value="{{ $r->category3_id }}" @if(!empty($row) and $row->category3_id == $r->category3_id){{ 'selected' }}@endif>{{ $r->category3_name }}</option>
								@endforeach
							@endif
						</select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="featuresection_name" name="featuresection_name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="formedit_featuresection" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
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
					"url": "{{url('backend/feature/featuresections/server_processing')}}",
					"data": function (d) {},
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				},
				"columns": [
					{"data" : "id"},
					{"data" : "category3_name"},
					{"data" : "name"},
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

		$(".sub_menu_feature").prop('class', 'active');
	});


	//------

	$(document).on('click', '#btn_create', function(e){
        e.preventDefault();
        $('#featureSectionModal').modal('show');
    });

	$("#formedit_featuresection").on("submit", function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: '{{ url("/backend/feature/featuresections/update") }}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success:function(response){
                console.log(response);
                if(response.status == 200){ 
					window.location.reload();
                }
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });      
    });

    $(document).on('click', '.btn_delete', function(e){
        e.preventDefault();
        let featruesection_id = $(this).attr('rel');
		if (confirm("Confirm Delete")) {
			$.ajax({
				type:'GET',
				url: '{{ url("/backend/feature/featuresections/delete") }}/'+ featruesection_id,
				cache:false,
				contentType: false,
				processData: false,
				success:function(response){
					console.log(response);
					if(response.status == 200){ 
						window.location.reload();
					}
				},
				error: function(response){
					console.log("error");
					console.log(response);
				}
			});   
		}
		return false;
    });

</script>
@endsection
