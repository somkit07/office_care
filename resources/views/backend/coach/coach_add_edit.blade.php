@extends('../../layouts.app')

@section('title', 'Coach')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/coach/coach_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="coach_image" id="coach_image"> Recommend 76 x 76 px
@if(!empty($row) and $row->coach_image != '') 
                    <br><img src="{{asset('public/uploads/coach/'.$row->coach_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(Th)</label>
            <div class="col-md-9">
                <input type="text" name="coach_name_th" id="coach_name_th" class="form-control" value="@if(!empty($row)) {{$row->coach_name_th}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(En)</label>
            <div class="col-md-9">
                <input type="text" name="coach_name_en" id="coach_name_en" class="form-control" value="@if(!empty($row)) {{$row->coach_name_en}} @endif" required>  
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="coach_name_ch" id="coach_name_ch" class="form-control" value="@if(!empty($row)) {{$row->coach_name_ch}} @endif" required>  
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Nick Name(Th)</label>
            <div class="col-md-9">
                <input type="text" name="coach_nickname_th" id="coach_nickname_th" class="form-control" value="@if(!empty($row)) {{$row->coach_nickname_th}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Nick Name(En)</label>
            <div class="col-md-9">
                <input type="text" name="coach_nickname_en" id="coach_nickname_en" class="form-control" value="@if(!empty($row)) {{$row->coach_nickname_en}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Nick Name(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="coach_nickname_ch" id="coach_nickname_ch" class="form-control" value="@if(!empty($row)) {{$row->coach_nickname_ch}} @endif" required>
            </div>
        </div>
        <legend>Coach Description</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Description</label>
            <div class="col-md-9">
                <input type="button" value=" + " onclick="addCoachDescription();"> <input type="button" value=" - " onclick="deleteCoachDescription();">
            </div>
        </div>
        <span id="spanCoachDesciption">
@if(!empty($row))
    @php
        $description_th = explode('!@#$%^&*()', $row->coach_description_th);
        $description_en = explode('!@#$%^&*()', $row->coach_description_en);
        $description_ch = explode('!@#$%^&*()', $row->coach_description_ch);
    @endphp

    @if(!empty($description_th))
        @php $i = 0 @endphp
        @foreach($description_th as $data_)
            @if($data_ != '' and $description_en[$i] != '' and $description_ch[$i] != '')
        <div class="form-group description_1">
            <label class="col-md-3 control-label">&nbsp;</label>
            <div class="col-md-3">
                <input type="text" name="coach_description_th[]" class="form-control" placeholder="Coach Description(Th)" value="{{$data_}}" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="coach_description_en[]" class="form-control" placeholder="Coach Description(En)" value="{{$description_en[$i]}}" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="coach_description_ch[]" class="form-control" placeholder="Coach Description(Ch)" value="{{$description_ch[$i]}}" required>
            </div>
        </div>
            @php $i++ @endphp
            @endif
        @endforeach
    @endif
@else
        <div class="form-group description_1">
            <label class="col-md-3 control-label">&nbsp;</label>
            <div class="col-md-3">
                <input type="text" name="coach_description_th[]" class="form-control" placeholder="Coach Description(Th)" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="coach_description_en[]" class="form-control" placeholder="Coach Description(En)" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="coach_description_ch[]" class="form-control" placeholder="Coach Description(Ch)" required>
            </div>
        </div>
@endif
        </span>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="coach_id" id="coach_id" value="{{ @$row->coach_id }}">
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

			$(".sub_menu_2").css("display", "block");

			$(".sub_menu_coach").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}

        i = 1;

        function addCoachDescription() {
            i++;

            $('<div class="form-group description_' + i + '"><label class="col-md-3 control-label">&nbsp;</label><div class="col-md-3"><input type="text" name="coach_description_th[]" class="form-control" placeholder="Coach Description(Th)" required></div><div class="col-md-3"><input type="text" name="coach_description_en[]" class="form-control" placeholder="Coach Description(En)" required></div><div class="col-md-3"><input type="text" name="coach_description_ch[]" class="form-control" placeholder="Coach Description(Ch)" required></div></div>').clone().appendTo("#spanCoachDesciption");
        }

        function deleteCoachDescription() {
            $(".description_" + i).remove();

            i--;

            //alert(i);
        }
	</script>
@endsection
