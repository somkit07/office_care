@extends('../../layouts.app')

@section('title', 'Review')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/review/review_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Type</label>
            <div class="col-md-9">
                <select name="review_type" id="review_type" class="form-control" onchange="checkImageOrVDO(this.value);">
                    <option value="">Please Select</option>
                    <option value="Image" @if(!empty($row) and $row->review_type == 'Image') selected @endif>Image</option>
                    <option value="Video" @if(!empty($row) and $row->review_type == 'Video') selected @endif>Video</option>
                </select>
            </div>
        </div>
@if(empty($row))
    @php 
    $image = 'none';
    $vdo = 'none';
    @endphp
@elseif(!empty($row) and $row->review_type == 'Image')
    @php 
    $image = 'block';
    $vdo = 'none';
    @endphp
@elseif(!empty($row) and $row->review_type == 'Video')
    @php 
    $image = 'none';
    $vdo = 'block';
    @endphp
@endif
        <div class="form-group image" style="display: {{$image}}">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="review_image_th" id="review_image_th" class="form-control"> Recommend 456 x 464 px
                @if(!empty($row) and $row->review_image_th != '')
                    <br><img src="{{asset('public/uploads/review/'.$row->review_image_th)}}" width="150"><br>
                @endif
            </div>
        </div>
        <div class="form-group image" style="display: {{$image}}">
            <label class="col-md-3 control-label">Image(En)</label>
            <div class="col-md-9">
                <input type="file" name="review_image_en" id="review_image_en" class="form-control"> Recommend 456 x 464 px
                @if(!empty($row) and $row->review_image_en != '')
                    <br><img src="{{asset('public/uploads/review/'.$row->review_image_en)}}" width="150"><br>
                @endif
            </div>
        </div>
        <div class="form-group image" style="display: {{$image}}">
            <label class="col-md-3 control-label">Image(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="review_image_ch" id="review_image_ch" class="form-control"> Recommend 456 x 464 px
                @if(!empty($row) and $row->review_image_ch != '')
                    <br><img src="{{asset('public/uploads/review/'.$row->review_image_ch)}}" width="150"><br>
                @endif
            </div>
        </div>
        <div class="form-group vdo" style="display: {{$vdo}}">
            <label class="col-md-3 control-label">Video(Th)</label>
            <div class="col-md-9">
                <input type="text" name="review_vdo_th" id="review_vdo_th" value="@if(!empty($row)) {{$row->review_vdo_th}} @endif" class="form-control"> 
            </div>
        </div>
        <div class="form-group vdo" style="display: {{$vdo}}">
            <label class="col-md-3 control-label">Video(En)</label>
            <div class="col-md-9">
                <input type="text" name="review_vdo_en" id="review_vdo_en" value="@if(!empty($row)) {{$row->review_vdo_en}} @endif" class="form-control"> 
            </div>
        </div>
        <div class="form-group vdo" style="display: {{$vdo}}">
            <label class="col-md-3 control-label">Video(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="review_vdo_ch" id="review_vdo_ch" value="@if(!empty($row)) {{$row->review_vdo_ch}} @endif" class="form-control"> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="review_id" id="review_id" value="{{ @$row->review_id }}">
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

			$(".menu_review").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.review_feature_th.setData('');
            CKEDITOR.instances.review_feature_en.setData('');
            CKEDITOR.instances.review_feature_ch.setData('');

            CKEDITOR.instances.review_addition_th.setData('');
            CKEDITOR.instances.review_addition_en.setData('');
            CKEDITOR.instances.review_addition_ch.setData('');
		}

        function checkImageOrVDO(review_type) {
            if(review_type == 'Image') {
                $(".image").show();
                $(".vdo").hide();
            } else if(review_type == 'Video') {
                $(".image").hide();
                $(".vdo").show();
            }
        }
	</script>
@endsection
