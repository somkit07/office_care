@extends('../../layouts.app')

@section('title', 'Product')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/about_us/about_us_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">เกี่ยวกับบริษัท(Th)</label>
            <div class="col-md-9">
                <textarea name="about_us_detail1_th" id="about_us_detail1_th">@php if(!empty($row)) echo $row->about_us_detail1_th @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("about_us_detail1_th", {
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
            <label class="col-md-3 control-label">เกี่ยวกับบริษัท(En)</label>
            <div class="col-md-9">
                <textarea name="about_us_detail1_en" id="about_us_detail1_en">@php if(!empty($row)) echo $row->about_us_detail1_en @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("about_us_detail1_en", {
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
            <label class="col-md-3 control-label">เกี่ยวกับบริษัท(Ch)</label>
            <div class="col-md-9">
                <textarea name="about_us_detail1_ch" id="about_us_detail1_ch">@php if(!empty($row)) echo $row->about_us_detail1_ch @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("about_us_detail1_ch", {
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
            <label class="col-md-3 control-label">ความเป็นมาและจุดเด่นผลิตภัณฑ์(Th)</label>
            <div class="col-md-9">
                <textarea name="about_us_detail2_th" id="about_us_detail2_th">@php if(!empty($row)) echo $row->about_us_detail2_th @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("about_us_detail2_th", {
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
            <label class="col-md-3 control-label">ความเป็นมาและจุดเด่นผลิตภัณฑ์(En)</label>
            <div class="col-md-9">
                <textarea name="about_us_detail2_en" id="about_us_detail2_en">@php if(!empty($row)) echo $row->about_us_detail2_en @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("about_us_detail2_en", {
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
            <label class="col-md-3 control-label">ความเป็นมาและจุดเด่นผลิตภัณฑ์(Ch)</label>
            <div class="col-md-9">
                <textarea name="about_us_detail2_ch" id="about_us_detail2_ch">@php if(!empty($row)) echo $row->about_us_detail2_ch @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("about_us_detail2_ch", {
                        filebrowserBrowseUrl : '{{asset("public/ckfinder/ckfinder.html")}}',
                        filebrowserImageBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Images")}}',
                        filebrowserFlashBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Flash")}}',
                        filebrowserUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                        filebrowserImageUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                        filebrowserFlashUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}'
				    });
                </script>
            </div>
        </div><div class="form-group">
            <label class="col-md-3 control-label">แนะนำผู้บริหาร(CEO)(Th)</label>
            <div class="col-md-9">
                <textarea name="about_us_detail3_th" id="about_us_detail3_th">@php if(!empty($row)) echo $row->about_us_detail3_th @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("about_us_detail3_th", {
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
            <label class="col-md-3 control-label">แนะนำผู้บริหาร(CEO)(En)</label>
            <div class="col-md-9">
                <textarea name="about_us_detail3_en" id="about_us_detail3_en">@php if(!empty($row)) echo $row->about_us_detail3_en @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("about_us_detail3_en", {
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
            <label class="col-md-3 control-label">แนะนำผู้บริหาร(CEO)(Ch)</label>
            <div class="col-md-9">
                <textarea name="about_us_detail3_ch" id="about_us_detail3_ch">@php if(!empty($row)) echo $row->about_us_detail3_ch @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("about_us_detail3_ch", {
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
                <input type="hidden" name="product_id" id="product_id" value="{{ @$row->product_id }}">
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

			$(".about_us").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.product_feature_th.setData('');
            CKEDITOR.instances.product_feature_en.setData('');
            CKEDITOR.instances.product_feature_ch.setData('');

            CKEDITOR.instances.product_addition_th.setData('');
            CKEDITOR.instances.product_addition_en.setData('');
            CKEDITOR.instances.product_addition_ch.setData('');
		}
	</script>
@endsection
