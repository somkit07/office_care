@extends('../../layouts.app')

@section('title', 'New Activities')

@section('content')

    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/news/news_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="news_promotion_image" id="news_promotion_image" class="form-control"> Recommend 1539 x 781 px
@if(!empty($row) and $row->news_promotion_image != '') 
                    <br><img src="{{asset('public/uploads/news/'.$row->news_promotion_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-9">
                <input type="text" name="news_promotion_name" id="news_promotion_name" class="form-control" value="@if(!empty($row)){{ $row->news_promotion_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Date</label>
            <div class="col-md-9">
                <input type="text" name="news_promotion_date" id="news_promotion_date" class="form-control" value="@if(!empty($row)){{ $row->news_promotion_date }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Description</label>
            <div class="col-md-9">
                <textarea name="news_promotion_description" id="news_promotion_description" class="form-control" rows="4" required>@if(!empty($row)){{ $row->news_promotion_description }}@endif</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Detail</label>
            <div class="col-md-9">
                <textarea name="news_promotion_detail" id="news_promotion_detail" class="form-control" rows="4" required>@if(!empty($row)){{ $row->news_promotion_detail }}@endif</textarea>
                {{-- <textarea cols="80" id="editor1" name="editor1" rows="10">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href=&quot;https://ckeditor.com/&quot;&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;</textarea> --}}

         </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="news_promotion_id" id="news_promotion_id" value="{{ @$row->news_promotion_id }}">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>
@endsection

@section('script_footer')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.22.1/standard-all/ckeditor.js"></script>

<script>
    $(function() {
        $("#news_promotion_date").datepicker({ dateFormat: 'yy-mm-dd' });
    });
    </script>

<script>
    // Don't forget to add CSS for your custom styles.
    // CKEDITOR.addCss('figure[class*=easyimage-gradient]::before { content: ""; position: absolute; top: 0; bottom: 0; left: 0; right: 0; }' +
    //   'figure[class*=easyimage-gradient] figcaption { position: relative; z-index: 2; }' +
    //   '.easyimage-gradient-1::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 66, 174, 234, .72 ) 100% ); }' +
    //   '.easyimage-gradient-2::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 228, 66, 234, .72 ) 100% ); }');

    // CKEDITOR.replace('news_promotion_detail', {
    //   extraPlugins: 'easyimage',
    //   removePlugins: 'image',
    //   removeDialogTabs: 'link:advanced',
    //   toolbar: [{
    //       name: 'document',
    //       items: ['Undo', 'Redo']
    //     },
    //     {
    //       name: 'styles',
    //       items: ['Format']
    //     },
    //     {
    //       name: 'basicstyles',
    //       items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat']
    //     },
    //     {
    //       name: 'paragraph',
    //       items: ['NumberedList', 'BulletedList']
    //     },
    //     {
    //       name: 'links',
    //       items: ['Link', 'Unlink']
    //     },
    //     {
    //       name: 'insert',
    //       items: ['EasyImageUpload']
    //     }
    //   ],
    //   height: 630,
    //   cloudServices_uploadUrl: 'https://33333.cke-cs.com/easyimage/upload/',
    //   // Note: this is a token endpoint to be used for CKEditor 4 samples only. Images uploaded using this token may be deleted automatically at any moment.
    //   // To create your own token URL please visit https://ckeditor.com/ckeditor-cloud-services/.
    //   cloudServices_tokenUrl: 'https://33333.cke-cs.com/token/dev/ijrDsqFix838Gh3wGO3F77FSW94BwcLXprJ4APSp3XQ26xsUHTi0jcb1hoBt',
    //   easyimage_styles: {
    //     gradient1: {
    //       group: 'easyimage-gradients',
    //       attributes: {
    //         'class': 'easyimage-gradient-1'
    //       },
    //       label: 'Blue Gradient',
    //       icon: 'https://ckeditor.com/docs/ckeditor4/4.22.1/examples/assets/easyimage/icons/gradient1.png',
    //       iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.22.1/examples/assets/easyimage/icons/hidpi/gradient1.png'
    //     },
    //     gradient2: {
    //       group: 'easyimage-gradients',
    //       attributes: {
    //         'class': 'easyimage-gradient-2'
    //       },
    //       label: 'Pink Gradient',
    //       icon: 'https://ckeditor.com/docs/ckeditor4/4.22.1/examples/assets/easyimage/icons/gradient2.png',
    //       iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.22.1/examples/assets/easyimage/icons/hidpi/gradient2.png'
    //     },
    //     noGradient: {
    //       group: 'easyimage-gradients',
    //       attributes: {
    //         'class': 'easyimage-no-gradient'
    //       },
    //       label: 'No Gradient',
    //       icon: 'https://ckeditor.com/docs/ckeditor4/4.22.1/examples/assets/easyimage/icons/nogradient.png',
    //       iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.22.1/examples/assets/easyimage/icons/hidpi/nogradient.png'
    //     }
    //   },
    //   easyimage_toolbar: [
    //     'EasyImageFull',
    //     'EasyImageSide',
    //     'EasyImageGradient1',
    //     'EasyImageGradient2',
    //     'EasyImageNoGradient',
    //     'EasyImageAlt'
    //   ],
    //   removeButtons: 'PasteFromWord'
    // });


    CKEDITOR.replace('news_promotion_detail', {
      extraPlugins: 'embed,autoembed,image2',
      height: 500,

      // Load the default contents.css file plus customizations for this sample.
      contentsCss: [
        'http://cdn.ckeditor.com/4.22.1/full-all/contents.css',
        'https://ckeditor.com/docs/ckeditor4/4.22.1/examples/assets/css/widgetstyles.css'
      ],
      // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
      embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

      // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
      // resizer (because image size is controlled by widget styles or the image takes maximum
      // 100% of the editor width).
      image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
      image2_disableResizer: true,
      removeButtons: 'PasteFromWord'
    });
  </script>


    <script>
        ClassicEditor
            .create(document.querySelector('#news_promotion_detail'))
            .then(editor => { console.log(editor); })
            .catch(error => { console.error(error); });
    </script>
    <script>
        $(document).ready(function() {
			App.init();

			$(".menu_news_promotion").prop('class', 'active');
		});
		
		// function resetForm() {
		// 	$(".form-control").val('');
		// 	CKEDITOR.instances.coupon_ckeditor.setData('');
		// }
	</script>
    <script>
        //  $(document).ready(function() {
        // InlineEditor
        //     .create( document.querySelector( '#news_promotion_detail' ) )
        //     .catch( error => {
        //         console.error( error );
        //     } );
        // });
    </script>
@endsection
