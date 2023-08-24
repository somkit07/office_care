@extends('../../layouts.app')

@section('title', 'Feature')

@section('content')
    
    <button id="btn_create" class="btn btn-sm btn-primary m-r-5" type="button" style="margin-bottom: 10px;">Add</button>
    
    <div class="card">
        <div class="card-body">
            <input type="hidden" id="feature_selection_id" name="feature_selection_id" value="{{ $feature_selection->id }}">
            <h3><span id="feature_selection_header">{{ $feature_selection->name }}</span>
                <small><button id="btn_edit_featuresuttion" type="button" class="btn btn-warning">แก้ไข</button></small>
            </h3> 
        </div>
    </div>
    
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
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
                    <input type="hidden" id="fselection_id" name="fselection_id">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category 3</label>
                        <select name="category3_id" id="category3_id" class="form-select select2cate" required>
                            <option value="">Please Select</option>
                            @if(!empty($category3))
                                @foreach($category3 as $r)
                                    <option value="{{ $r->category3_id }}" @if(!empty($feature_selection) and $feature_selection->category3_id == $r->category3_id){{ 'selected' }}@endif>{{ $r->category3_name }}</option>
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

<!-- Modal Edit Feature -->
<div class="modal fade" id="featureModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formedit_feature">
                    <input type="hidden" id="feature_selection_id" name="feature_selection_id" value="{{ $feature_selection->id }}">
                    <input type="hidden" id="feature_id" name="feature_id">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="feature_name" name="feature_name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="formedit_feature" class="btn btn-primary">Save</button>
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

        let feature_selection_id = $('#feature_selection_id').val();
        
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
                    "type": "GET",
                    "url": "{{url('backend/feature/feature/server_processing')}}/" + feature_selection_id,
                },
                "columns": [
                    {"data" : "id"},
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


    //-----------

    $(document).on('click', '#btn_edit_featuresuttion', function(e){
        // e.preventdefault();
        let feature_selection_id = $('#feature_selection_id').val();
        $.ajax({
            type:'GET',
            url: '{{ url("/backend/feature/featureSections/edit") }}/'+ feature_selection_id,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response);
                if(response.status == 200){ 
                    $('#fselection_id').val(response.feature_selection['id']);
                    $('#featuresection_name').val(response.feature_selection['name']);
                    $('#featureSectionModal').modal('show');
                }
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });         
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
                    let feature_selection_id = $('#feature_selection_id').val();
                    $.ajax({
                        type:'GET',
                        url: '{{ url("/backend/feature/featureSections/edit") }}/'+ feature_selection_id,
                        cache:false,
                        contentType: false,
                        processData: false,
                        success:function(response){
                            console.log(response);
                            if(response.status == 200){ 
                                $('#feature_selection_header').text(response.feature_selection['name']);
                                $('#featureSectionModal').modal('hide');
                            }
                        },
                        error: function(response){
                            console.log("error");
                            console.log(response);
                        }
                    });    
                }
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });      
    });

    $(document).on('click', '#btn_create', function(e){
        e.preventDefault();
        $('#feature_id').val('');
        $('#feature_name').val('');
        $('#featureModal').modal('show');
    });

    $(document).on('click', '.btn_edit', function(e){
        e.preventDefault();
        let feature_id = $(this).attr('rel');
        $.ajax({
            type:'GET',
            url: '{{ url("/backend/feature/feature/edit") }}/'+ feature_id,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response);
                if(response.status == 200){ 
                    $('#feature_id').val(response.feature['id']);
                    $('#feature_name').val(response.feature['name']);
                    $('#featureModal').modal('show');
                }
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });       
    });

    $("#formedit_feature").on("submit", function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: '{{ url("/backend/feature/feature/update") }}',
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
        let feature_id = $(this).attr('rel');
		if (confirm("Confirm Delete")) {
			$.ajax({
				type:'GET',
				url: '{{ url("/backend/feature/feature/delete") }}/'+ feature_id,
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

 
    $(document).on('click', '.btn-warning', function(e){
        e.preventDefault();
        $("#category3_id").select2({
            dropdownParent: $('#featureSectionModal .modal-content')
        });

        // $('.select2cate').select2();
    });

    // In your Javascript (external .js resource or <script> tag)
    // $(document).ready(function() {
        // $('#category3_id').select2();
    // });

</script>



@endsection
