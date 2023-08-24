<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Officecare :: @yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="csrf-token" content="{{csrf_token()}}">

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="{{asset('public/backend/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet')}}" />
	<link href="{{asset('public/backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/backend/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/backend/css/animate.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/backend/css/style.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/backend/css/style-responsive.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/backend/css/theme/default.css')}}" rel="stylesheet" id="theme" />

	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{asset('public/backend/plugins/DataTables/css/data-table.css')}}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('public/backend/plugins/pace/pace.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="#" class="navbar-brand"><span class="navbar-logo"></span> Officecare</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{asset('public/backend/img/user-13.jpg')}}" alt="" />
							<span class="hidden-xs"><?php if(!empty($row_user)) echo $row_user->user_name;?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
@if(Session::get('department_id') == '1')
							<li><a href="{{url('backend/user/user_add_edit/'.Session::get('user_id'))}}">Edit User</a></li>
							<li class="divider"></li>
@endif
							<li><a href="{{url('backend/logout')}}">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
        		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="{{asset('public/backend/img/user-13.jpg')}}" alt="" /></a>
						</div>
						<div class="info">
							{{ Session::get('user_name') }}
							<small>{{ Session::get('department_name') }}</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-th"></i>
						    <span>Data</span>
						</a>
@if(Session::get('user_id') != '')
						<ul class="sub-menu">
							<li class="has-sub menu_sub_authen"><a href="javascript:check_menu(1);">Authen</a>
								<ul class="sub-menu sub_menu_1">
									<li class="sub_sub_menu_department"><a href="{{url('backend/department/')}}">Department</a></li>
									<li class="sub_sub_menu_user"><a href="{{url('backend/user/')}}">User</a></li>
								</ul>
							</li>
							<li class="menu_banner_slide"><a href="{{url('backend/banner_slide/')}}">Banner Slide</a></li>
							<li class="menu_image_right_index"><a href="{{url('backend/image_right_index/')}}">รูปภาพหน้าแรก ด้านขวามือ และตรงกลาง</a></li>
							<li class="has-sub menu_sub_authen"><a href="javascript:check_menu(2);">Product</a>
								<ul class="sub-menu sub_menu_2">
									<li class="sub_menu_category1"><a href="{{url('backend/category1/')}}">Category 1</a></li>
									<li class="sub_menu_category2"><a href="{{url('backend/category2/')}}">Category 2</a></li>
									<li class="sub_menu_category3"><a href="{{url('backend/category3/')}}">Category 3</a></li>
									<li class="sub_menu_color"><a href="{{url('backend/color/')}}">Color</a></li>
									<li class="sub_menu_brand"><a href="{{url('backend/brand/')}}">Brand</a></li>
									<li class="sub_menu_group_color"><a href="{{url('backend/group_color/')}}">Group Color</a></li>
									<li class="sub_menu_product"><a href="{{url('backend/product/')}}">Product</a></li>
									{{-- <li class="sub_menu_product_photo"><a href="{{url('backend/product_photo/')}}">Product Photo</a></li> --}}
									<li class="sub_menu_feature"><a href="{{url('backend/feature/')}}">Feature</a></li>
									<li class="sub_menu_keyword_product"><a href="{{url('backend/keyword_product/')}}">Keyword</a></li>
									<li class="sub_menu_import_excel"><a href="{{url('backend/import_excel/')}}">Import Excel</a></li>
								</ul>
							</li>
							<li class="menu_news_promotion"><a href="{{url('backend/news/')}}">News</a></li>
							<li class="menu_member"><a href="{{url('backend/member/')}}">Member</a></li>
							<li class="menu_order"><a href="{{url('backend/order/')}}">Order</a></li>
							<li class="menu_payment"><a href="{{url('backend/payment/')}}">Payment</a></li>
							<li class="has-sub menu_sub_contact_us"><a href="javascript:check_menu(3);">Contact Us</a>
								<ul class="sub-menu sub_menu_3">
									<li class="sub_menu_contact_us"><a href="{{url('backend/contact_us/')}}">Contact Us</a></li>
									<li class="sub_menu_contact_us_form"><a href="{{url('backend/contact_us_form/')}}">Contact Us(Form)</a></li>
								</ul>
							</li>
							<li class="menu_quotation"><a href="{{url('backend/quotation/')}}">Quotation</a></li>
							<li class="menu_shipping"><a href="{{url('backend/shipping/')}}">Shipping</a></li>
							<li class="has-sub menu_sub_report"><a href="javascript:check_menu(4);">Report</a>
								<ul class="sub-menu sub_menu_4">
									<li class="sub_menu_sale_report"><a href="{{url('backend/sale_report/')}}">ยอดขายรายวัน</a></li>
									<li class="sub_menu_member_report"><a href="{{url('backend/member_report/')}}">รายสมาชิก</a></li>
								</ul>
							</li>
						</ul>
@endif
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
			<!-- begin page-header -->
			<h1 class="page-header">Managed Tables <small>@yield('title')</small></h1>
			<!-- end page-header -->

			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">@yield('title')</h4>
                        </div>
                        <div class="panel-body">
                        	@yield('content')
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('public/backend/jquery-1.12.3.js')}}"></script>
	{{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> --}}
	<script src="{{asset('public/backend/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
	<script src="{{asset('public/backend/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
	<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--[if lt IE 9]>
		<script src="{{asset('public/backend/crossbrowserjs/html5shiv.js')}}"></script>
		<script src="{{asset('public/backend/crossbrowserjs/respond.min.js')}}"></script>
		<script src="{{asset('public/backend/crossbrowserjs/excanvas.min.js')}}"></script>
	<![endif]-->
	<script src="{{asset('public/backend/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('public/backend/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset('public/backend/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('public/backend/js/table-manage-default.demo.min.js')}}"></script>
	<script src="{{asset('public/backend/js/apps.min.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

    @yield('script_footer')

	

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>
</html>
