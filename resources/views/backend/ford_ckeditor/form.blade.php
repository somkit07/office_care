@extends('../../layouts.app')

@section('title', 'Ford CKEditor')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/ford_ckeditor/ford_ckeditor_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="ford_ckeditor_image" id="ford_ckeditor_image"> 
@if(!empty($row) and $row->ford_ckeditor_image != '')
                    <br><img src="{{asset('public/uploads/ford_ckeditor/'.$row->ford_ckeditor_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-9">
                <textarea name="ford_ckeditor_name" id="ford_ckeditor_name">@php if(!empty($row)) echo $row->ford_ckeditor_name @endphp</textarea> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>
@endsection

@section('script_footer')
<script src="{{ asset('public/ckeditor/ckeditor.js') }}" type="text/javascript"></script> 
<script src="{{ asset('public/ckfinder/ckfinder.js') }}" type="text/javascript"></script>

<textarea cols="80" id="page_detail" name="page_detail" rows="10" ></textarea>

<script type="text/javascript">

    //<![CDATA[
        CKEDITOR.replace( 'page_detail',{

        skin            : 'kama',
        language        : 'th',
        extraPlugins    : 'uicolor',
        uiColor         : '#BDE31E',
        height          : 600,
        width           : 680,
        toolbar :
            [

                ['NewPage', 'Preview', '-', 'Source','-','Templates'],
                ['Format','Font','FontSize'],
                ['Bold','Italic','Underline','Strike','-','Subscript','Superscript', 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
                ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
                ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
                ['TextColor','BGColor','Smiley'],
                ['Image','Link','Unlink','Flash','Table','HorizontalRule','SpecialChar','PageBreak'],

            ],
        filebrowserBrowseUrl : '{{ asset("public/ckfinder/ckfinder.html") }}',
        filebrowserImageBrowseUrl : '{{ asset("ckfinder/ckfinder.html?Type=Images") }}',
        filebrowserFlashBrowseUrl : '{{ asset("ckfinder/ckfinder.html?Type=Flash") }}',
        filebrowserUploadUrl : '{{ asset("ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files") }}',
        filebrowserImageUploadUrl : '{{ asset("ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images") }}',
        filebrowserFlashUploadUrl : '{{ asset("ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash") }}'

        } );
    //]]>

    $(document).ready(function() {
		App.init();
    });
</script>
@endsection
