@extends('../../layouts.app')

@section('title', 'product')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/product/product_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Data</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Category 1</label>
            <div class="col-md-9">
                <select name="category1_id" id="category1_id" class="form-control" onchange="changeCategory1(this.value);" required>
                    <option value="">Please Select</option>
@if(!empty($category1))
    @foreach($category1 as $r)
                    <option value="{{ $r->category1_id }}" @if(!empty($row) and $row->category1_id == $r->category1_id){{ 'selected' }}@endif>{{ $r->category1_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Category 2</label>
            <div class="col-md-9">
@if(!empty($row))
                <select name="category2_id" id="category2_id" class="form-control" onchange="changeCategory2(this.value);" required>
                    <option value="">Please Select</option>
    @if(!empty($category2))
        @foreach($category2 as $r)
            <option value="{{ $r->category2_id }}" @if(!empty($row) and $row->category2_id == $r->category2_id){{ 'selected' }}@endif>{{ $r->category2_name }}</option>
        @endforeach
    @endif
                </select>
@else
                <select name="category2_id" id="category2_id" class="form-control" onchange="changeCategory2(this.value);" required>
                    <option value="">Please Select</option>
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Category 3</label>
            <div class="col-md-9">
@if(!empty($row))
                <select name="category3_id" id="category3_id" class="form-control" onchange="changeCategory3(this.value);" required>
                    <option value="">Please Select</option>
    @if(!empty($category3))
        @foreach($category3 as $r)
            <option value="{{ $r->category3_id }}" @if(!empty($row) and $row->category3_id == $r->category3_id){{ 'selected' }}@endif>{{ $r->category3_name }}</option>
        @endforeach
    @endif
                </select>
@else
                <select name="category3_id" id="category3_id" class="form-control" onchange="changeCategory3(this.value);" required>
                    <option value="">Please Select</option>
                </select>
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Group Color</label>
            <div class="col-md-9">
                <select name="group_color_id" id="group_color_id" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($group_color))
    @foreach($group_color as $r)
                    <option value="{{ $r->group_color_id }}" @if(!empty($row) and $row->group_color_id == $r->group_color_id){{ 'selected' }}@endif>{{ $r->group_color_name }}</option>
    @endforeach
@endif
                </select>
                <span style="color: red;">*** ในกรณีที่ไม่มีสินค้าต่างสีกันไม่ต้องเลือก</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Color</label>
            <div class="col-md-9">
                <select name="color_id" id="color_id" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($color))
    @foreach($color as $r)
                    <option value="{{ $r->color_id }}" @if(!empty($row) and $row->color_id == $r->color_id){{ 'selected' }}@endif>{{ $r->color_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="product_image" id="product_image" class="form-control"> Recommend 434 x 577 px
@if(!empty($row) and $row->product_image != '') 
                    <br><img src="{{asset('public/uploads/product/'.$row->product_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Product</label>
            <div class="col-md-9">
                <input type="text" name="product_name" id="product_name" class="form-control" value="@if(!empty($row)){{ $row->product_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Product Code</label>
            <div class="col-md-9">
                <input type="text" name="product_code" id="product_code" class="form-control" value="@if(!empty($row)){{ $row->product_code }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Before Discount Price</label>
            <div class="col-md-9">
                <input type="number" name="product_before_discount" id="product_before_discount" class="form-control" value="@if(!empty($row)){{ $row->product_before_discount }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Price</label>
            <div class="col-md-9">
                <input type="number" name="product_price" id="product_price" class="form-control" value="@if(!empty($row)){{ $row->product_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Brand</label>
            <div class="col-md-9">
                <select name="brand_id" id="brand_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($brand))
    @foreach($brand as $r)
                    <option value="{{ $r->brand_id }}" @if(!empty($row) and $row->brand_id == $r->brand_id){{ 'selected' }}@endif>{{ $r->brand_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Detail</label>
            <div class="col-md-9">
                <textarea name="product_detail" id="product_detail" class="form-control" rows="4">@if(!empty($row)){{ $row->product_detail }}@endif</textarea>
            </div>
        </div>
        {{-- <div class="form-group">
            <label class="col-md-3 control-label">Specificial</label>
            <div class="col-md-9">
                <textarea name="product_specificial" id="product_specificial" class="form-control" rows="4">@if(!empty($row)){{ $row->product_specificial }}@endif</textarea>
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">Best Seller</label>
            <div class="col-md-9">
                <input type="checkbox" name="product_best_seller" id="product_best_seller" value="Yes" @if(!empty($row) and $row->product_best_seller == 'Yes'){{ 'checked' }}@endif>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Sort</label>
            <div class="col-md-9">
                <input type="number" name="product_sort" id="product_sort" class="form-control" value="@if(!empty($row)){{ $row->product_sort }}@endif" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Feature</label>
            <div class="col-md-9" id="selfeature">
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Feature
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                @if(!is_null($feature_selections))
                    @foreach($feature_selections as $key_selection => $feature_selection)
                        @php
                            $feature = DB::table('features')
                                ->where([
                                    ['feature_selection_id', $feature_selection->id],
                                    ['is_active', 1]
                                ])
                                ->orderBy('name')
                                ->get();
                        @endphp

                        <div class="form-group">
                            <label class="col-md-3 control-label">{{ $feature_selection->name }}</label>
                            <div class="col-md-3">

                                <select name="feature_id[]" class="form-control">
                                    <option value="">Please Select</option>
                                    @php 
                                        $is_selected = "0";
                                        $featureid = "";
                                    @endphp
                                    @foreach($feature as $feature)
                                        @foreach($product_to_feature as $to_feature)
                                            @if($to_feature->feature_id == $feature->id)
                                                @php 
                                                    $is_selected = "1";
                                                    $featureid = $feature->id;
                                                    break;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if($is_selected == "1" && $featureid == $feature->id)
                                            <option value="{{ $feature->id }}" selected>{{ $feature->name }}</option>
                                        @else
                                            <option value="{{ $feature->id }}">{{ $feature->name }}</option>
                                            @php 
                                                $is_selected = "0";
                                                $featureid = "";
                                            @endphp
                                        @endif
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    
                    @endforeach
                @endif
                    
 
                </div>
            </div>

            </div>
        </div>

        {{-- <legend>Photo</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Photo</label>
            <div class="col-md-9">
                <input type="file" name="product_photo_image[]" id="product_photo_image" multiple="true" class="form-control"> Recommend 419 x 557 px
@if(!empty($photo))
    @foreach($photo as $r)
                <br><img src="{{asset('public/uploads/product/'.$r->product_photo_image)}}" width="150"> <a href="{{ url('backend/product/product_image_delete/'.$r->product_photo_id.'/'.$r->product_id) }}" onclick="return confirm('Confirm Delete');">Delete</a><br>
    @endforeach
@endif
            </div>
        </div> --}}
        
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="product_id" id="product_id" value="{{ @$row->product_id }}">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>
@endsection

@section('script_footer')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#news_date").datepicker({ dateFormat: 'yy-mm-dd' });
    });
    </script>
    <script>
        $(document).ready(function() {
			App.init();

			$(".sub_menu_2").css("display", "block");

			$(".sub_menu_product").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}

        function changeCategory1(category1_id) {
            $.post('{{ url("backend/category3/ajaxChangeCategory1") }}', { category1_id: category1_id, "_token": "{{ csrf_token() }}" }, function(data) {
                $("#category2_id").html(data);
            });
        }

        function changeCategory2(category2_id) {
            $.post('{{ url("backend/category3/ajaxChangeCategory2") }}', { category2_id: category2_id, "_token": "{{ csrf_token() }}" }, function(data) {
                $("#category3_id").html(data);
            });
        }

        function changeCategory3(category3_id) {
            $.post('{{ url("backend/category3/ajaxChangeCategory3") }}', { category3_id: category3_id, "_token": "{{ csrf_token() }}" }, function(data) {
                $("#selfeature").html(data);
            });
        }
	</script>

    <script type="text/javascript" src="{{ url('public/ckeditor/ckeditor.js') }}"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('product_detail');
        CKEDITOR.replace('product_specificial');
        function CKupdate() {
            for (instance in CKEDITOR.instances)
                CKEDITOR.instances[instance].updateElement();
        }
    </script>

@endsection
