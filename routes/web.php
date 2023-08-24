<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', function() {
    return redirect('index');
});

// Frontend
Route::get('/index', 'FrontendController@index');

Route::get('/about', 'FrontendController@about');

Route::get('/account_address_list', 'FrontendController@account_address_list');

Route::get('/account_address', 'FrontendController@account_address');

Route::get('/account_order', 'FrontendController@account_order');

Route::get('/account_profile', 'FrontendController@account_profile');

Route::get('/account_wishlist', 'FrontendController@account_wishlist');

Route::post('/ajaxSaveAddressData', 'FrontendController@ajaxSaveAddressData');

Route::get('/brands', 'FrontendController@brands');

Route::get('/cart_success/{order_id}', 'FrontendController@cart_success');

Route::get('/cart', 'FrontendController@cart');

Route::get('/contact', 'FrontendController@contact');

Route::get('/forget_password/{member_token}', 'FrontendController@forget_password');

Route::get('/m_acct', 'FrontendController@m_acct');

Route::get('/news_detail/{news_promotion_id}', 'FrontendController@news_detail');

Route::get('/news', 'FrontendController@news');

Route::get('/payment_confirm', 'FrontendController@payment_confirm');

Route::get('/policy', 'FrontendController@policy');

Route::get('/product_detail/{product_id}', 'FrontendController@product_detail');

Route::get('/product_index', 'FrontendController@product_index');

Route::get('/product_sub/{category3_id}', 'FrontendController@product_sub');

Route::get('/product/{category2_id}', 'FrontendController@product');

Route::get('/service', 'FrontendController@service');

Route::get('/terms', 'FrontendController@terms');

Route::get('/test', 'FrontendController@test');

Route::post('/saveMember', 'FrontendController@saveMember');

Route::post('/ajaxCheckEmail', 'FrontendController@ajaxCheckEmail');

Route::post('/login/frontend', 'FrontendController@loginFrontend');

Route::get('/logout/frontend', 'FrontendController@logoutFrontend');

Route::post('/saveMemberProfile', 'FrontendController@saveMemberProfile');

Route::post('/saveUpdatePassword', 'FrontendController@saveUpdatePassword');

Route::post('/saveMemberAddress', 'FrontendController@saveMemberAddress');

Route::post('/ajaxChangeProvince', 'FrontendController@ajaxChangeProvince');

Route::post('/ajaxChangeAmphur', 'FrontendController@ajaxChangeAmphur');

Route::get('/setMemberShippingStatus/{member_id}', 'FrontendController@setMemberShippingStatus');

Route::post('/ajaxRemoveAddress', 'FrontendController@ajaxRemoveAddress');

Route::post('/ajaxInsertWishlist', 'FrontendController@ajaxInsertWishlist');

Route::post('/ajaxRemoveWishlist', 'FrontendController@ajaxRemoveWishlist');

Route::post('/ajaxInsertCart', 'FrontendController@ajaxInsertCart');

Route::post('/ajaxUpdateCart', 'FrontendController@ajaxUpdateCart');

Route::post('/ajaxDeleteCart', 'FrontendController@ajaxDeleteCart');

Route::get('/ajaxCart', 'FrontendController@ajaxCart');

Route::post('/ajaxCheckout', 'FrontendController@ajaxCheckout');

Route::get('/genOrderNo', 'FrontendController@genOrderNo');

Route::post('/saveContactUsForm', 'FrontendController@saveContactUsForm');

Route::get('/search/{keyword}', 'FrontendController@search');

Route::post('/savePaymentConfirm', 'FrontendController@savePaymentConfirm');

Route::post('/ajaxFilterProduct', 'FrontendController@ajaxFilterProduct');

Route::post('/ajaxFilterProduct3', 'FrontendController@ajaxFilterProduct3');
Route::post('/ajaxGetFilter', 'FrontendController@ajaxGetFilter');
Route::post('/ajaxGetFilterBrand', 'FrontendController@ajaxGetFilterBrand');
Route::post('/ajaxGetFilterBrandproduct', 'FrontendController@ajaxGetFilterBrandproduct');

Route::get('/savePdf', 'FrontendController@savePdf');

Route::post('/ajaxSavePdf', 'FrontendController@ajaxSavePdf');

Route::post('/saveQuatation', 'FrontendController@saveQuatation');

Route::post('/ajaxDeleteCartProduct', 'FrontendController@ajaxDeleteCart_product');

Route::post('/ajaxUpdateCartProduct', 'FrontendController@ajaxUpdateCartProduct');

Route::post('/ajaxFilterProductFeature', 'FrontendController@ajaxFilterProductFeature');

Route::get('/login_register_mb', 'FrontendController@login_register_mb');

Route::get('/mobile_category', 'FrontendController@mobile_category');

Route::post('/ajaxSaveMember', 'FrontendController@ajaxSaveMember');

Route::post('/ajaxLogin', 'FrontendController@ajaxLogin');

Route::get('/mobile_category/{category1_id}', 'FrontendController@mobile_category');

Route::get('/service1', 'FrontendController@service1');
Route::get('/service2', 'FrontendController@service2');
Route::get('/service3', 'FrontendController@service3');
Route::get('/service4', 'FrontendController@service4');
Route::get('/service5', 'FrontendController@service5');

Route::post('/forgetPassword', 'FrontendController@forgetPassword');

Route::get('/forget_password/{member_token}', 'FrontendController@forget_password');

Route::post('/ajaxForgetPassword', 'FrontendController@ajaxForgetPassword');

Route::get('/testCustomClass', 'FrontendController@testCustomClass');

Route::post('/ajaxCategory3', 'FrontendController@ajaxCategory3');
// End Frontend

// login, logout
Route::get('/backend', 'LoginLogoutController@login');

Route::get('/backend/login', 'LoginLogoutController@login');

Route::post('/backend/ajaxLogin', 'LoginLogoutController@ajaxLogin');

Route::get('/backend/logout', 'LoginLogoutController@logout');
// End login, logout

// user
Route::get('/backend/user', 'AuthenController@user');

Route::post('/backend/user/server_processing', 'AuthenController@userServerProcessing');

Route::get('/backend/user/user_add_edit/{user_id?}', 'AuthenController@userAddEdit');

Route::post('/backend/user/user_save_update', 'AuthenController@userSaveUpdate');

Route::get('/backend/user/user_delete/{user_id}', function($user_id) {
    // $deleted = DB::delete('delete from user where user_id = "'.$user_id.'"');
    DB::table('user')->where('user_id',$user_id)->delete();
    return redirect('backend/user');
});
// End user

// department
Route::get('/backend/department', 'AuthenController@department');

Route::post('/backend/department/server_processing', 'AuthenController@departmentServerProcessing');

Route::get('/backend/department/department_add_edit/{department_id?}', 'AuthenController@departmentAddEdit');

Route::post('/backend/department/department_save_update', 'AuthenController@departmentSaveUpdate');

Route::get('/backend/department/department_delete/{department_id}', function($department_id) {
    // $deleted = DB::delete('delete from department where department_id = "'.$department_id.'"');
    DB::table('department')->where('department_id',$department_id)->delete();
    return redirect('backend/department');
});
// End department

// banner_slide
Route::get('/backend/banner_slide', 'BannerSlideController@banner_slide');

Route::post('/backend/banner_slide/server_processing', 'BannerSlideController@banner_slideServerProcessing');

Route::get('/backend/banner_slide/banner_slide_add_edit/{banner_slide_id?}', 'BannerSlideController@banner_slideAddEdit');

Route::post('/backend/banner_slide/banner_slide_save_update', 'BannerSlideController@banner_slideSaveUpdate');

Route::get('/backend/banner_slide/banner_slide_delete/{banner_slide_id}', function($banner_slide_id) {
    // $deleted = DB::delete('delete from banner_slide where banner_slide_id = "'.$banner_slide_id.'"');
    DB::table('banner_slide')->where('banner_slide_id',$banner_slide_id)->delete();
    return redirect('backend/banner_slide');
});
// End banner_slide

// category1
Route::get('/backend/category1', 'ProductController@category1');

Route::post('/backend/category1/server_processing', 'ProductController@category1ServerProcessing');

Route::get('/backend/category1/category1_add_edit/{category1_id?}', 'ProductController@category1AddEdit');

Route::post('/backend/category1/category1_save_update', 'ProductController@category1SaveUpdate');

Route::get('/backend/category1/category1_delete/{category1_id}', function($category1_id) {
    // $deleted = DB::delete('delete from category1 where category1_id = "'.$category1_id.'"');
    DB::table('category1')->where('category1_id',$category1_id)->delete();
    return redirect('backend/category1');
});
// End category1

// category2
Route::get('/backend/category2', 'ProductController@category2');

Route::post('/backend/category2/server_processing', 'ProductController@category2ServerProcessing');

Route::get('/backend/category2/category2_add_edit/{category2_id?}', 'ProductController@category2AddEdit');

Route::post('/backend/category2/category2_save_update', 'ProductController@category2SaveUpdate');

Route::get('/backend/category2/category2_delete/{category2_id}', function($category2_id) {
    // $deleted = DB::delete('delete from category2 where category2_id = "'.$category2_id.'"');
    DB::table('category2')->where('category2_id',$category2_id)->delete();
    return redirect('backend/category2');
});
// End category2

// category3
Route::get('/backend/category3', 'ProductController@category3');

Route::post('/backend/category3/server_processing', 'ProductController@category3ServerProcessing');

Route::get('/backend/category3/category3_add_edit/{category3_id?}', 'ProductController@category3AddEdit');

Route::post('/backend/category3/category3_save_update', 'ProductController@category3SaveUpdate');

Route::post('/backend/category3/ajaxChangeCategory1', 'ProductController@ajaxChangeCategory1');

Route::post('/backend/category3/ajaxChangeCategory2', 'ProductController@ajaxChangeCategory2');

Route::post('/backend/category3/ajaxChangeCategory3', 'ProductController@ajaxChangeCategory3');

Route::get('/backend/category3/category3_delete/{category3_id}', function($category3_id) {
    // $deleted = DB::delete('delete from category3 where category3_id = "'.$category3_id.'"');
    DB::table('category3')->where('category3_id',$category3_id)->delete();
    return redirect('backend/category3');
});
// End category3

// color
Route::get('/backend/color', 'ProductController@color');

Route::post('/backend/color/server_processing', 'ProductController@colorServerProcessing');

Route::get('/backend/color/color_add_edit/{color_id?}', 'ProductController@colorAddEdit');

Route::post('/backend/color/color_save_update', 'ProductController@colorSaveUpdate');

Route::post('/backend/color/ajaxChangeCategory1', 'ProductController@ajaxChangeCategory1');

Route::get('/backend/color/color_delete/{color_id}', function($color_id) {
    // $deleted = DB::delete('delete from color where color_id = "'.$color_id.'"');
    DB::table('color')->where('color_id',$color_id)->delete();
    return redirect('backend/color');
});
// End color

// brand
Route::get('/backend/brand', 'ProductController@brand');

Route::post('/backend/brand/server_processing', 'ProductController@brandServerProcessing');

Route::get('/backend/brand/brand_add_edit/{brand_id?}', 'ProductController@brandAddEdit');

Route::post('/backend/brand/brand_save_update', 'ProductController@brandSaveUpdate');

Route::get('/backend/brand/brand_delete/{brand_id}', function($brand_id) {
    // $deleted = DB::delete('delete from brand where brand_id = "'.$brand_id.'"');
    DB::table('brand')->where('brand_id',$brand_id)->delete();
    return redirect('backend/brand');
});
// End brand

// group_color
Route::get('/backend/group_color', 'ProductController@group_color');

Route::post('/backend/group_color/server_processing', 'ProductController@group_colorServerProcessing');

Route::get('/backend/group_color/group_color_add_edit/{group_color_id?}', 'ProductController@group_colorAddEdit');

Route::post('/backend/group_color/group_color_save_update', 'ProductController@group_colorSaveUpdate');

Route::get('/backend/group_color/group_color_delete/{group_color_id}', function($group_color_id) {
    // $deleted = DB::delete('delete from group_color where group_color_id = "'.$group_color_id.'"');
    DB::table('group_color')->where('group_color_id',$group_color_id)->delete();
    return redirect('backend/group_color');
});
// End group_color

// product
Route::get('/backend/product', 'ProductController@product');

Route::post('/backend/product/server_processing', 'ProductController@productServerProcessing');

Route::get('/backend/product/product_add_edit/{product_id?}', 'ProductController@productAddEdit');

Route::post('/backend/product/product_save_update', 'ProductController@productSaveUpdate');

Route::get('/backend/product/product_delete/{product_id}', function($product_id) {
    // $deleted = DB::delete('delete from product where product_id = "'.$product_id.'"');
    DB::table('product')->where('product_id',$product_id)->delete();
    return redirect('backend/product');
});

Route::get('/backend/product/product_image_delete/{product_photo_id}/{product_id}', function($product_photo_id, $product_id) {
    // $deleted = DB::delete('delete from product where product_id = "'.$product_id.'"');
    DB::table('product_photo')->where('product_photo_id', $product_photo_id)->delete();
    return redirect('backend/product/product_add_edit/'.$product_id);
});

Route::post('/backend/deleteProductAll', 'ProductController@deleteProductAll');
// End product

// product_photo
Route::get('/backend/product_photo', 'ProductController@product_photo');

Route::post('/backend/product_photo/server_processing', 'ProductController@product_photoServerProcessing');

Route::get('/backend/product_photo/product_photo_add_edit/{product_id}', 'ProductController@product_photoAddEdit');

Route::post('/backend/product_photo/product_photo_save_update', 'ProductController@product_photoSaveUpdate');

Route::get('/backend/product_photo/product_photo_delete/{product_photo_id}/{product_id}', function($product_photo_id, $product_id) {
    // $deleted = DB::delete('delete from product_photo where product_photo_id = "'.$product_photo_id.'"');
    DB::table('product_photo')->where('product_photo_id',$product_photo_id)->delete();
    return redirect('backend/product_photo/product_photo_add_edit/'.$product_id);
});
// End product_photo

Route::get('/delete_all', 'ProductController@delete_all');

// Feature --OAT

Route::get('/backend/feature', 'FeatureController@feature');
Route::post('/backend/feature/featuresections/server_processing', 'FeatureController@featureSectionsServerProcessing');
Route::get('/backend/feature/featuresections/{id}', 'FeatureController@featureSections');
Route::get('/backend/feature/featureSections/edit/{id}', 'FeatureController@featureSections_edit');
Route::post('/backend/feature/featuresections/update', 'FeatureController@featureSections_update');
Route::get('/backend/feature/featuresections/delete/{id}', 'FeatureController@featureSections_delete');

Route::get('/backend/feature/feature/server_processing/{id}', 'FeatureController@featureServerProcessing');
Route::get('/backend/feature/feature/edit/{id}', 'FeatureController@feature_edit');
Route::post('/backend/feature/feature/update', 'FeatureController@feature_update');
Route::get('/backend/feature/feature/delete/{id}', 'FeatureController@feature_delete');


// End Feature --OAT


// keyword_product
Route::get('/backend/keyword_product', 'ProductController@keyword_product');

Route::post('/backend/keyword_product/server_processing', 'ProductController@keyword_productServerProcessing');

Route::get('/backend/keyword_product/keyword_product_add_edit/{keyword_product_id?}', 'ProductController@keyword_productAddEdit');

Route::post('/backend/keyword_product/keyword_product_save_update', 'ProductController@keyword_productSaveUpdate');

Route::get('/backend/keyword_product/keyword_product_delete/{keyword_product_id}', function($keyword_product_id) {
    // $deleted = DB::delete('delete from keyword_product where keyword_product_id = "'.$keyword_product_id.'"');
    DB::table('keyword_product')->where('keyword_product_id',$keyword_product_id)->delete();
    return redirect('backend/keyword_product');
});
// End keyword_product

// member
Route::get('/backend/member', 'MemberController@member');

Route::post('/backend/member/server_processing', 'MemberController@memberServerProcessing');

Route::get('/backend/member/member_shipping_address/{member_id}', 'MemberController@memberShippingAddress');
Route::get('/backend/member/member_order/{member_id}', 'MemberController@memberOrder');
Route::get('/backend/member/member_wishlist/{member_id}', 'MemberController@memberWishlist');
// end member

// news
Route::get('/backend/news', 'NewsController@news');

Route::post('/backend/news/server_processing', 'NewsController@newsServerProcessing');

Route::get('/backend/news/news_add_edit/{news_promotion_id?}', 'NewsController@newsAddEdit');

Route::post('/backend/news/news_save_update', 'NewsController@newsSaveUpdate');

Route::get('/backend/news/news_delete/{news_promotion_id}', function($news_promotion_id) {
    // $deleted = DB::delete('delete from news where news_id = "'.$news_id.'"');
    DB::table('news_promotion')->where('news_promotion_id',$news_promotion_id)->delete();
    return redirect('backend/news');
});
// End news

// order
Route::get('/backend/order', 'OrderController@order');

Route::post('/backend/order/server_processing', 'OrderController@orderServerProcessing');

Route::get('/backend/order/order_add_edit/{order_id?}', 'OrderController@orderAddEdit');

Route::post('/backend/order/order_save_update', 'OrderController@orderSaveUpdate');
// End order

// contact_us
Route::get('/backend/contact_us', 'ContactUsController@contact_us');

Route::post('/backend/contact_us/contact_us_save_update', 'ContactUsController@contact_usSaveUpdate');

Route::get('/backend/contact_us_form', 'ContactUsController@contact_us_form');

Route::post('/backend/contact_us_form/server_processing', 'ContactUsController@contact_us_formServerProcessing');
// End contact_us

// shipping
Route::get('/backend/shipping', 'ShippingController@shipping');

Route::post('/backend/shipping/shipping_save_update', 'ShippingController@shippingSaveUpdate');
// End shipping

// report
Route::get('/backend/sale_report', 'ReportController@sale_report');

Route::get('/backend/member_report', 'ReportController@member_report');
// End report

// import_excel
Route::get('/backend/import_excel', 'ImportExcelController@import_excel');

Route::post('/backend/import_excel/saveUpdate', 'ImportExcelController@import_excelSaveUpdate');
// End import_excel

// payment
Route::get('/backend/payment', 'PaymentController@payment');

Route::post('/backend/payment/server_processing', 'PaymentController@paymentServerProcessing');
// End payment

// quotation
Route::get('/backend/quotation', 'QuotationController@quotation');

Route::post('/backend/quotation/server_processing', 'QuotationController@quotationServerProcessing');
// End quotation_us

// test
Route::get('test/function', 'TestController@test_function');
// end test

// image_right_index
Route::get('/backend/image_right_index', 'ImageRightIndexController@image_right_index');

Route::post('/backend/image_right_index/server_processing', 'ImageRightIndexController@image_right_indexServerProcessing');

Route::get('/backend/image_right_index/image_right_index_add_edit/{image_right_index_id?}', 'ImageRightIndexController@image_right_indexAddEdit');

Route::post('/backend/image_right_index/image_right_index_save_update', 'ImageRightIndexController@image_right_indexSaveUpdate');

Route::get('/backend/image_right_index/image_right_index_delete/{image_right_index_id}', function($image_right_index_id) {
    // $deleted = DB::delete('delete from image_right_index where image_right_index_id = "'.$image_right_index_id.'"');
    DB::table('image_right_index')->where('image_right_index_id',$image_right_index_id)->delete();
    return redirect('backend/image_right_index');
});
// End image_right_index

Route::post('/ajaxCheckBrand', 'ProductController@ajaxCheckBrand');
