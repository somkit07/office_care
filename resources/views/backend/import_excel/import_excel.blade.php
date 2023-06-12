@extends('../../layouts.app')

@section('title', 'Import Excel')

@section('content')
    {{-- <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/department/department_add_edit')}}';" style="margin-bottom: 10px;">Add</button> --}}
	<legend>Category 3</legend>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category 1</th>
					<th>Category 2</th>
					<th>Category 3</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>                             
    </div>
	<br><br>
	<legend>Brand</legend>
	<div class="table-responsive">
        <table id="data-table_brand" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
					<th>Brand</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>                             
    </div>
	<br><br>
	<legend>Color</legend>
	<div class="table-responsive">
        <table id="data-table_color" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Color</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>                             
    </div>
	<br><br>
	<legend>Import Excel</legend>
	<form action="{{ url('backend/import_excel/saveUpdate') }}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label class="col-md-3 control-label">Import Excel</label>
		<div class="col-md-9">
			<input type="file" name="import_excel_product" id="import_excel_product" class="form-control"> Reccommend Extension .xlsx <p>&nbsp;</p><a href="{{ asset('public/backend/Import_Excel_Example.xlsx') }}">Example Import Excel</a><p>&nbsp;</p>
		</div>
	</div>
	<div class="form-group" style="margin-top: 75px;">
		<label class="col-md-3 control-label"> </label>
		<div class="col-md-9">
			<input type="hidden" name="category3_id" id="category3_id" value="{{ @$row->category3_id }}">
			<button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
			<button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
		</div>
	</div>
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
						"url": "{{url('backend/category3/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "category3_id"},
						{"data" : "category1_name"},
						{"data" : "category2_name"},
						{"data" : "category3_name"},
						// {"data" : "action"},
					],
				});

			var TableList = $('#data-table_brand').dataTable({
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
						"url": "{{url('backend/brand/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "brand_id"},
						{"data" : "brand_image"},
						{"data" : "brand_name"},
						// {"data" : "action"},
					],
				});
            
			var TableList = $('#data-table_color').dataTable({
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
						"url": "{{url('backend/color/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "color_id"},
						{"data" : "color_name"},
						// {"data" : "action"},
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

			$(".sub_menu_import_excel").prop('class', 'active');
		});
	</script>
@endsection
