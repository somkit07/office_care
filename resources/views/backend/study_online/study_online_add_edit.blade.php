@extends('../../layouts.app')

@section('title', 'Study Online')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/study_online/study_online_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Coach</label>
            <div class="col-md-9">
                <select name="coach_id" id="coach_id" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($coach))
    @foreach($coach as $r) 
                    <option value="{{$r->coach_id}}" @if(!empty($row) and $row->coach_id == $r->coach_id) selected @endif>{{$r->coach_name_en}}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Chapter</label>
            <div class="col-md-9">
                <select name="chapter_id" id="chapter_id" class="form-control">
                    <option value="บทนำ" @if(!empty($row) and $row->chapter_id == 'บทนำ') selected @endif>บทนำ</option>
@for($i = 1; $i <= 30; $i++)
                    <option value="{{$i}}" @if(!empty($row) and $row->chapter_id == $i) selected @endif>{{$i}}</option>
@endfor
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Topic</label>
            <div class="col-md-9">
                <input type="text" name="study_online_chapter" id="study_online_chapter" class="form-control" value="@if(!empty($row)) {{$row->study_online_chapter}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Course Name(Th)</label>
            <div class="col-md-9">
                <input type="text" name="study_online_course_name_th" id="study_online_course_name_th" class="form-control" value="@if(!empty($row)) {{$row->study_online_course_name_th}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Course Name(En)</label>
            <div class="col-md-9">
                <input type="text" name="study_online_course_name_en" id="study_online_course_name_en" class="form-control" value="@if(!empty($row)) {{$row->study_online_course_name_en}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Course Name(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="study_online_course_name_ch" id="study_online_course_name_ch" class="form-control" value="@if(!empty($row)) {{$row->study_online_course_name_ch}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Embed Youtube Or Video MP4</label>
            <div class="col-md-9">
                <input type="radio" name="study_online_embed_youtube_or_mp4" id="study_online_embed_youtube_or_mp4" value="Embed Youtube" onclick="clickEmbedYoutube();" @if(!empty($row) and $row->study_online_embed_youtube_or_mp4 == 'Embed Youtube') checked @endif required> Embed Youtube
                <input type="radio" name="study_online_embed_youtube_or_mp4" id="study_online_embed_youtube_or_mp4" value="MP4" onclick="clickEmbedMP4Video();" @if(!empty($row) and $row->study_online_embed_youtube_or_mp4 == 'MP4') checked @endif required> Video MP4
            </div>
        </div>
        <div class="form-group div_youtube" style="display: @if(!empty($row) and $row->study_online_embed_youtube_or_mp4 == 'Embed Youtube')block @else none @endif;">
            <label class="col-md-3 control-label">Youtube(Th)</label>
            <div class="col-md-9">
                <input type="text" name="study_online_embed_youtube_th" id="study_online_embed_youtube_th" class="form-control" value="@if(!empty($row)) {{$row->study_online_embed_youtube_th}} @endif">
            </div>
        </div>
        <div class="form-group div_youtube" style="display: @if(!empty($row) and $row->study_online_embed_youtube_or_mp4 == 'Embed Youtube')block @else none @endif;">
            <label class="col-md-3 control-label">Youtube(En)</label>
            <div class="col-md-9">
                <input type="text" name="study_online_embed_youtube_en" id="study_online_embed_youtube_en" class="form-control" value="@if(!empty($row)) {{$row->study_online_embed_youtube_en}} @endif">
            </div>
        </div>
        <div class="form-group div_youtube" style="display: @if(!empty($row) and $row->study_online_embed_youtube_or_mp4 == 'Embed Youtube')block @else none @endif;">
            <label class="col-md-3 control-label">Youtube(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="study_online_embed_youtube_ch" id="study_online_embed_youtube_ch" class="form-control" value="@if(!empty($row)) {{$row->study_online_embed_youtube_ch}} @endif">
            </div>
        </div>
        <div class="form-group div_mp4" style="display: @if(!empty($row) and $row->study_online_embed_youtube_or_mp4 == 'MP4') block @else none @endif;">
            <label class="col-md-3 control-label">Video(Th)</label>
            <div class="col-md-9">
                <input type="file" name="study_online_mp4_th" id="study_online_mp4_th" class="form-control"> Recommend Extension mp4
                <br>
                @if(!empty($row) and $row->study_online_mp4_th != '')
                <video width="320" height="240" controls>
                    <source src="{{asset('public/uploads/study_online/'.$row->study_online_mp4_th)}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                @endif
            </div>
        </div>
        <div class="form-group div_mp4" style="display: @if(!empty($row) and $row->study_online_embed_youtube_or_mp4 == 'MP4') block @else none @endif;">
            <label class="col-md-3 control-label">Video(En)</label>
            <div class="col-md-9">
                <input type="file" name="study_online_mp4_en" id="study_online_mp4_en" class="form-control"> Recommend Extension mp4
                <br>
                @if(!empty($row) and $row->study_online_mp4_en != '')
                <video width="320" height="240" controls>
                    <source src="{{asset('public/uploads/study_online/'.$row->study_online_mp4_en)}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                @endif
            </div>
        </div>
        <div class="form-group div_mp4" style="display: @if(!empty($row) and $row->study_online_embed_youtube_or_mp4 == 'MP4') block @else none @endif;">
            <label class="col-md-3 control-label">Video(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="study_online_mp4_ch" id="study_online_mp4_ch" class="form-control"> Recommend Extension mp4
                <br>
                @if(!empty($row) and $row->study_online_mp4_ch != '')
                <video width="320" height="240" controls>
                    <source src="{{asset('public/uploads/study_online/'.$row->study_online_mp4_ch)}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Time</label>
            <div class="col-md-9">
                <input type="text" name="study_online_time" id="study_online_time" class="form-control" value="@if(!empty($row)) {{$row->study_online_time}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ดูตัวอย่างงาน</label>
            <div class="col-md-9">
                <input type="checkbox" name="study_online_sample" id="study_online_sample" value="Yes" @if(!empty($row) and $row->study_online_sample == 'Yes') checked @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Description(Th)</label>
            <div class="col-md-9">
                <textarea name="study_online_description_th" id="study_online_description_th">@php if(!empty($row)) echo $row->study_online_description_th @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("study_online_description_th", {
                        filebrowserBrowseUrl : '{{asset("public/ckfinder/ckfinder.html")}}',
                        filebrowserImageBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Images")}}',
                        filebrowserFlashBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Flash")}}',
                        filebrowserUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                        filebrowserImageUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                        filebrowserFlashUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}'
				    });
                </script>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Description(En)</label>
            <div class="col-md-9">
                <textarea name="study_online_description_en" id="study_online_description_en">@php if(!empty($row)) echo $row->study_online_description_en @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("study_online_description_en", {
                        filebrowserBrowseUrl : '{{asset("public/ckfinder/ckfinder.html")}}',
                        filebrowserImageBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Images")}}',
                        filebrowserFlashBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Flash")}}',
                        filebrowserUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                        filebrowserImageUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                        filebrowserFlashUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}'
				    });
                </script>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Description(Ch)</label>
            <div class="col-md-9">
                <textarea name="study_online_description_ch" id="study_online_description_ch">@php if(!empty($row)) echo $row->study_online_description_ch @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("study_online_description_ch", {
                        filebrowserBrowseUrl : '{{asset("public/ckfinder/ckfinder.html")}}',
                        filebrowserImageBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Images")}}',
                        filebrowserFlashBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Flash")}}',
                        filebrowserUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                        filebrowserImageUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                        filebrowserFlashUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}'
				    });
                </script>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="study_online_id" id="study_online_id" value="{{ @$row->study_online_id }}">
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

			$(".sub_menu_study_online").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
		}

        function clickEmbedYoutube() {
            $(".div_youtube").show();
            $(".div_mp4").hide();
        }

        function clickEmbedMP4Video() {
            $(".div_youtube").hide();
            $(".div_mp4").show();
        }
	</script>
@endsection
