<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\DataTables;
use Illuminate\Database\Eloquent\Model;
use EveryWell\Imagination\Traits\HasImages;
use EveryWell\Imagination\Contracts\HasImages as HasImagesContract;
use Image;
use Session;
use ShoppingCart;

use Illuminate\Support\Facades\Mail;

use PDF;

use RealRashid\SweetAlert\Facades\Alert;

use App\CustomClass\First;

class FrontendController extends Controller implements HasImagesContract
{
    use HasImages;

    // ford
    public function index(Request $request) {
        //dd(Session::all());

        $data['banner_slide'] = DB::table('banner_slide')
            ->orderBy('banner_slide_sort', 'asc')
            ->get();

        $data['product_best_seller'] = DB::table('product')
            ->orderBy('product_sort', 'asc')
            ->where('product_best_seller', '=', 'Yes')
            ->limit(8)
            ->get();

        $data['product_brand'] = DB::table('brand')
            ->orderBy('brand_id', 'desc')
            ->where('brand_show', '=', 'Yes')
            ->limit(4)
            ->get();

        $data['category1'] = DB::table('category1')
            ->orderBy('category1_id', 'asc')
            ->where('category1_menu_home', '=', 'Yes')
            ->get();

        $data['category2'] = DB::table('category2')
            ->orderBy('category2_id', 'asc')
            ->get();

        $data['news_promotion'] = DB::table('news_promotion')
            ->orderBy('news_promotion_date', 'desc')
            ->get();

        $data['image_right_index'] = DB::table('image_right_index')
            ->where('image_right_index_id', '=', 1)
            ->first();

        return view('frontend/index', $data);
    }

    public function ajaxInsertWishlist(Request $request) {
        if($request->session()->get('member_id') == '') {
            echo 'กรุณาเข้าสู่ระบบ';
        } else {
            $wishlist = DB::table('wishlist')
                ->where('member_id', '=', $request->session()->get('member_id'))
                ->where('product_id', '=', $request->input('product_id'))
                ->first();

            if(empty($wishlist)) {
                $data = array(
                    'member_id' => $request->session()->get('member_id'),
                    'product_id' => $request->input('product_id'),
                    'wishlist_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('wishlist')
                    ->insert($data);
            }

            echo 'นำสินค้าเข้ารายการโปรดแล้ว';
        }
    }

    public function about(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/about', $data);
    }

    public function account_address_list(Request $request) {
        if($request->session()->get('member_id') == '') {
            return redirect('index');
        }

        $data['province'] = DB::table('provinces')
            ->orderBy('id', 'asc')
            ->get();

        $data['addressShipping'] = DB::table('member_shipping_address')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->first();

        $data['addressShipping_'] = DB::table('member_shipping_address')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->orderBy('member_shipping_address_id', 'asc')
            ->get();

        return view('frontend/account_address_list', $data);
    }

    public function setMemberShippingStatus(Request $request, $member_shipping_address_id) {
        $data_set_status = array(
            'member_shipping_address_status' => 'ตั้งเป็นค่าเริ่มต้น',
            'member_shipping_address_datetime_update' => date('Y-m-d H:i:s')
        );

        DB::table('member_shipping_address')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->update($data_set_status);

        $data_set = array(
            'member_shipping_address_status' => 'ค่าเริ่มต้น',
            'member_shipping_address_datetime_update' => date('Y-m-d H:i:s')
        );

        DB::table('member_shipping_address')
            ->where('member_shipping_address_id', '=', $member_shipping_address_id)
            ->update($data_set);

        return redirect('account_address_list');
    }

    public function ajaxRemoveAddress(Request $request) {
        DB::table('member_shipping_address')
            ->where('member_shipping_address_id', '=', $request->input('member_shipping_address_id'))
            ->delete();
    }

    /*public function account_address(Request $request) {
        if($request->session()->get('member_id') == '') {
            return redirect('index');
        }

        $data['province'] = DB::table('provinces')
            ->orderBy('id', 'asc')
            ->get();

        $data['addressShipping'] = DB::table('member_shipping_address')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->first();

        $data['addressShipping_'] = DB::table('member_shipping_address')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->orderBy('member_shipping_address_id', 'asc')
            ->get();


        return view('frontend/account_address', $data);
    }*/

    public function ajaxChangeProvince(Request $request) {
        $amphur = DB::table('districts')
            ->orderBy('id', 'asc')
            ->where('province_id', '=', $request->input('province_id'))
            ->get();

        if(!empty($amphur)) {
?>
                <option value="">อำเภอ/เขต</option>
<?php
            foreach($amphur as $r) {
?>
                <option value="<?php echo $r->id;?>"><?php echo $r->name_in_thai;?></option>
<?php
            }
        }
    }

    public function ajaxChangeAmphur(Request $request) {
        $tumbol = DB::table('subdistricts')
            ->orderBy('id', 'asc')
            ->where('district_id', '=', $request->input('amphur_id'))
            ->get();

        if(!empty($tumbol)) {
?>
                <option value="">ตำบล/แขวง</option>
<?php
            foreach($tumbol as $r) {
?>
                <option value="<?php echo $r->id;?>"><?php echo $r->name_in_thai;?></option>
<?php
            }
        }

        echo '!@#$%^&*()_+';

        $postcode = DB::table('subdistricts')
            ->orderBy('id', 'asc')
            ->where('district_id', '=', $request->input('amphur_id'))
            ->groupBy('zip_code')
            ->get();

        if(!empty($postcode)) {
?>
                <option value="">รหัสไปรษณีย์</option>
<?php
            foreach($postcode as $r) {
?>
                <option value="<?php echo $r->zip_code;?>"><?php echo $r->zip_code;?></option>
<?php
            }
        }
    }

    public function account_order(Request $request) {
        if($request->session()->get('member_id') == '') {
            return redirect('index');
        }

        $data['order'] = DB::table('order')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->orderBy('order_id', 'asc')
            ->get();

        return view('frontend/account_order', $data);
    }

    public function account_profile(Request $request) {
        if($request->session()->get('member_id') == '') {
            return redirect('index');
        }

        $data['member'] = DB::table('member')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->first();

        return view('frontend/account_profile', $data);
    }

    public function saveMemberProfile(Request $request) {
        $data_post = array(
            'member_name' => $request->input('member_name'),
            'member_surname' => $request->input('member_surname'),
            'member_email' => $request->input('member_email'),
            'member_mobile' => $request->input('member_mobile'),
            'member_datetime_update' => date('Y-m-d H:i:s')
        );

        DB::table('member')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->update($data_post);

        echo '<script>alert("แก้ไขข้อมูลส่วนตัวสำเร็จ");window.location.href="'.url('account_profile').'";</script>';
    }

    public function saveUpdatePassword(Request $request) {
        $password = DB::table('member')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->where('member_password', '=', $request->input('member_password'))
            ->first();

        if(empty($password)) {
            echo '<script>alert("รหัสผ่านปัจจุบันไม่ถูกต้อง");window.location.href="'.url('account_profile').'";</script>';
        } else {
            $data_password = array(
                'member_password' => $request->input('member_new_password'),
                'member_datetime_update' => date('Y-m-d H:i:s')
            );

            DB::table('member')
                ->where('member_id', '=', $request->session()->get('member_id'))
                ->update($data_password);

            echo '<script>alert("เปลี่ยนรหัสผ่านสำเร็จ");window.location.href="'.url('account_profile').'";</script>';
        }
    }

    public function saveMemberAddress(Request $request) {
        $data_address = array(
            'member_id' => $request->session()->get('member_id'),
            'member_shipping_address_name_surname' => $request->input('member_shipping_address_name_surname'),
            'member_shipping_address_mobile' => $request->input('member_shipping_address_mobile'),
            'member_shipping_address_address' => $request->input('member_shipping_address_address'),
            'province_id' => $request->input('province_id'),
            'amphur_id' => $request->input('amphur_id'),
            'tumbol_id' => $request->input('tumbol_id'),
            'member_shipping_address_postcode' => $request->input('member_shipping_address_postcode'),
            'member_shipping_address_datetime_create' => date('Y-m-d H:i:s'),
            'member_shipping_address_datetime_update' => date('Y-m-d H:i:s')
        );

        DB::table('member_shipping_address')
            ->insert($data_address);

        echo '<script>alert("เพิ่มที่อยู่ใหม่สำเร็จ");window.location.href="'.url('account_address_list').'";</script>';
    }

    public function account_wishlist(Request $request) {
        if($request->session()->get('member_id') == '') {
            return redirect('index');
        }

        $data['wishlist'] = DB::table('wishlist')
            ->where('wishlist.member_id', '=', $request->session()->get('member_id'))
            ->join('product', 'wishlist.product_id', '=', 'product.product_id')
            ->get();

        $data['count_wishlist'] = count($data['wishlist']);

        return view('frontend/account_wishlist', $data);
    }

    public function ajaxRemoveWishlist(Request $request) {
        DB::table('wishlist')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->where('product_id', '=', $request->input('product_id'))
            ->delete();
    }

    public function brands(Request $request) {
        $data['brands'] = DB::table('brand')
            ->orderBy('brand_id', 'asc')
            ->get();

        // dd(chr(97));

        return view('frontend/brands', $data);
    }

    public function cart_success(Request $request, $order_id) {
        $data['order_id'] = $order_id;

        $data['order'] = DB::table('order')
            ->where('order_id', '=', $order_id)
            ->first();

        return view('frontend/cart_success', $data);
    }

    public function cart(Request $request) {
        if(ShoppingCart::isEmpty()) {
            redirect('index');
        }

        //dd(Session::all());

        Alert::success('Success Title', 'Success Message');

        $qty = 0;
        $sub_total = 0;
        foreach(ShoppingCart::all() as $r) {
            $qty += $r->qty;

            $price = $r->qty * $r->price;

            $sub_total += $price;
        }

        $shipping_price = DB::table('shipping')
            ->where('shipping_id', '=', 1)
            ->first();

        if(!empty($shipping_price)) {
            if($shipping_price->shipping_condition >= $sub_total) {
                $data['shipping_price'] = $shipping_price->shipping_price;
            } else {
                $data['shipping_price'] = 0;
            }
        }

        $data['count_basket'] = $qty;

        $data['shippingAddress'] = DB::table('member_shipping_address')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->where('member_shipping_address_status', '=', 'ค่าเริ่มต้น')
            ->first();

        if(!empty($data['shippingAddress'])) {
            $data['tumbol'] = DB::table('subdistricts')
                ->where('id', '=', $data['shippingAddress']->tumbol_id)
                ->first();

            $data['amphur'] = DB::table('districts')
                ->where('id', '=', $data['shippingAddress']->amphur_id)
                ->first();

            $data['province'] = DB::table('provinces')
                ->where('id', '=', $data['shippingAddress']->province_id)
                ->first();
        }

        $data['provinces'] = DB::table('provinces')
            ->orderBy('id', 'asc')
            ->get();

        $data['row'] = DB::table('member')
            ->where('member_id', '=', Session::get('member_id'))
            ->first();

        // dd(Session::get('member_id'));

        return view('frontend/cart', $data);
    }

    public function saveQuatation(Request $request) {
        $data_post = array(
            'quotation_company' => $request->input('quotation_company'),
            'quotation_contact' => $request->input('quotation_contact'),
            'quotation_tel' => $request->input('quotation_tel'),
            'quotation_email' => $request->input('quotation_email'),
            'quotation_message' => $request->input('quotation_message'),
            'quotation_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('quotation')
            ->insert($data_post);

        // quotation email
        $quotation = DB::table('quotation')
            ->orderBy('quotation_id', 'desc')
            ->first();

        if(!empty($quotation)) {
            $sender = array('sitiporn@orange-thailand.com');
            $subject = 'Officecare Quotation';

            $from_email = 'noreply.officecare@gmail.com';
            $from_name = 'NoReply Officecare';

            $data['quotation'] = $quotation;

            Mail::send('mail.quotation', $data, function($message)use($sender, $subject) {
                $message->to($sender[0])
                        ->subject($subject);
            });
        }

        echo '<script>alert("ส่งใบเสนอราคาเรียบร้อย");window.location.href="'.url('cart').'";</script>';
        // end quotation email
    }

    public function contact(Request $request) {
        $data['contact'] = DB::table('contact_us')
            ->where('contact_us_id', '=', 1)
            ->first();

        return view('frontend/contact', $data);
    }

    public function saveContactUsForm(Request $request) {
        $data_post = array(
            'contact_us_form_name' => $request->input('contact_us_form_name'),
            'contact_us_form_surname' => $request->input('contact_us_form_surname'),
            'contact_us_form_mobile' => $request->input('contact_us_form_mobile'),
            'contact_us_form_email' => $request->input('contact_us_form_email'),
            'contact_us_form_subject' => $request->input('contact_us_form_subject'),
            'contact_us_form_message' => $request->input('contact_us_form_message'),
            'contact_us_form_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_us_form')
            ->insert($data_post);

        $sender = array('sitiporn@orange-thailand.com');
        $subject = $request->input('contact_us_form_subject');

        $from_email = 'noreply.officecare@gmail.com';
        $from_name = 'NoReply Officecare';

        $data['contact_us_form_name'] = $request->input('contact_us_form_name');
        $data['contact_us_form_surname'] = $request->input('contact_us_form_surname');
        $data['contact_us_form_email'] = $request->input('contact_us_form_email');
        $data['contact_us_form_subject'] = $request->input('contact_us_form_subject');
        $data['contact_us_form_message'] = $request->input('contact_us_form_message');

        Mail::send('mail.contact_us_form_officecare', $data, function($message)use($sender, $subject) {
            $message->to($sender[0])
                    ->subject($subject);
        });

        echo '<script>alert("บันทึกข้อมูลเรียบร้อย");window.location.href="'.url('contact').'";</script>';
    }

    public function m_acct(Request $request) {
        if(Session::get('member_id') == '') {
            redirect('index');
        }

        $data['test'] = 'Test';

        return view('frontend/m_acct', $data);
    }

    public function mobile_category($category1_id) {
        $data['category1'] = DB::table('category1')
            ->where('category1_id', '=', $category1_id)
            ->first();

        return view('frontend/mobile_category', $data);
    }

    public function news_detail(Request $request, $news_promotion_id) {
        $data['row'] = DB::table('news_promotion')
            ->where('news_promotion_id', '=', $news_promotion_id)
            ->first();

        return view('frontend/news_detail', $data);
    }

    public function news(Request $request) {
        $data['rows_cover'] = DB::table('news_promotion')
            ->orderBy('news_promotion_id', 'desc')
            ->skip(0)
            ->take(3)
            ->get();

        $data['rows_detail'] = DB::table('news_promotion')
            ->orderBy('news_promotion_id', 'desc')
            ->skip(3)
            ->take(20)
            ->get();

        return view('frontend/news', $data);
    }

    public function payment_confirm(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/payment_confirm', $data);
    }

    public function savePaymentConfirm(Request $request) {
        $data = array(
            'order_no' => $request->input('order_no'),
            'payment_amount' => $request->input('payment_amount'),
            'payment_name_surname' => $request->input('payment_name_surname'),
            'payment_date' => $request->input('payment_date'),
            'payment_time' => $request->input('payment_time'),
            'payment_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('payment')
            ->insert($data);

        $sender = array('sitiporn@orange-thailand.com');
        $subject = 'แจ้งชำระเงิน';

        $from_email = 'noreply.officecare@gmail.com';
        $from_name = 'NoReply Officecare';

        $data['order_no'] = $request->input('order_no');
        $data['payment_amount'] = $request->input('payment_amount');
        $data['payment_name_surname'] = $request->input('payment_name_surname');
        $data['payment_date'] = $request->input('payment_date');
        $data['payment_time'] = $request->input('payment_time');

        Mail::send('mail.payment', $data, function($message)use($sender, $subject) {
            $message->to($sender[0])
                    ->subject($subject);
        });

        echo '<script>alert("บันทึกข้อมูลสำเร็จ");window.location.href="'.url('index').'";</script>';
    }

    public function ajaxSaveMember(Request $request) {
        $data_post = array(
            'member_email' => $request->input('member_email'),
            'member_name' => $request->input('member_name'),
            'member_surname' => $request->input('member_surname'),
            'member_mobile' => $request->input('member_mobile'),
            'member_password' => $request->input('member_password'),
            'member_datetime_create' => date('Y-m-d H:i:s'),
            'member_datetime_update' => date('Y-m-d H:i:s')
        );

        DB::table('member')
            ->insert($data_post);
    }

    public function ajaxLogin(Request $request) {
        $checkLogin = DB::table('member')
            ->where('member_email', '=', $request->input('member_email_login'))
            ->where('member_password', '=', $request->input('member_password_login'))
            ->first();

        if(!empty($checkLogin)) {
            Session::put('member_id', $checkLogin->member_id);

            echo 'true';
        } else {
            Session::forget('member_id');

            echo 'false';
        }
    }

    public function policy(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/policy', $data);
    }

    public function login_register_mb(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/login_register_mb', $data);
    }

    public function product_detail(Request $request, $product_id) {
        $data['product_id'] = $product_id;

        $data['category_txt'] = DB::table('category1')
            ->join('category2', 'category1.category1_id', '=', 'category2.category1_id')
            ->join('category3', 'category2.category2_id', '=', 'category3.category2_id')
            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
            ->where('product.product_id', '=', $product_id)
            ->first();

        $data['row'] = DB::table('product')
            ->where('product.product_id', '=', $product_id)
            ->leftjoin('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->leftjoin('color', 'product.color_id', '=', 'color.color_id')
            ->first();

        if(!empty($data['row'])) {
            $data['products'] = DB::table('product')
                ->where('product.category3_id', '=', $data['row']->category3_id)
                ->where('product.product_id', '!=', $product_id)
                ->take(8)
                ->get();

            $data['feature_selections'] = DB::table('category3')
                ->where('category3.category3_id', '=', $data['row']->category3_id)
                ->where('feature_selections.is_active', '=', '1')
                ->join('feature_selections', 'category3.category3_id', '=', 'feature_selections.category3_id')
                ->get();
        }

        $data['product_map'] = DB::table('product_photo')
            ->where('product_photo.product_id', '=', $product_id)
            ->join('product', 'product_photo.product_id', '=', 'product.product_id')
            ->join('color', 'product.color_id', '=', 'color.color_id')
            ->orderBy('product_photo.product_photo_id', 'asc')
            ->get();

        $data['wishlist'] = DB::table('wishlist')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->where('product_id', '=', $request->input('product_id'))
            ->first();

        // dd(ShoppingCart::all());

        return view('frontend/product_detail', $data);
    }

    public function ajaxInsertCart(Request $request) {

        $product = DB::table('product')
            ->leftjoin('color', 'product.color_id', '=', 'color.color_id')
            ->where('product.product_id', '=', $request->input('product_id'))
            ->groupBy('product.product_id')
            ->first();

        if(!empty($product)) {
            $row = ShoppingCart::add($product->product_id, $product->product_name, $request->input('qty'), $product->product_price,
                [
                    'color' => $product->color_name,
                    'product_before_discount' => $product->product_before_discount,
                    'product_code' => $product->product_code,
                    'image' => $product->product_image
                ]
            );
        }

        $this->ajaxCart();
    }

    public function ajaxUpdateCart(Request $request) {
        ShoppingCart::update($request->input('rawId'), $request->input('qty'));

        $this->ajaxCart();
    }

    public function ajaxUpdateCartProduct(Request $request) {
        // ShoppingCart::update($request->input('rawId'), $request->input('qty'));

        $item = ShoppingCart::search(['id' => $request->product_id]);
        if(!empty($item)) {
            foreach($item as $r) {
                //echo $r->rawId();
                ShoppingCart::update($r->rawId(), $request->input('qty'));
            }
        }

        $this->ajaxCart();
    }

    ///--- OAT
    public function ajaxDeleteCart_product(Request $request) {
        // ShoppingCart::remove($request->input('rawId'));
        $item = ShoppingCart::search(['id' => $request->product_id]);
        if(!empty($item)) {
            foreach($item as $r) {
                //echo $r->rawId();
                ShoppingCart::remove($r->rawId());
            }
        }

        $this->ajaxCart();
    }
    ///---OAT

    public function ajaxDeleteCart(Request $request) {
        ShoppingCart::remove($request->input('rawId'));

        $this->ajaxCart();
    }

    public function ajaxCart() {
        // [0] class=basket_cart
        $qty = 0;
        $sub_total = 0;
        foreach(ShoppingCart::all() as $r) {
            $qty += $r->qty;

            $price = $r->qty * $r->price;

            $sub_total += $price;
        }

        echo number_format($qty, 0, '.', ',');

        echo '!@#$%^&*()_+';
        // [1] class=cart_sub_total

        echo number_format($sub_total, 0, '.', ',');

        echo '!@#$%^&*()_+';
        // [2] class=cart_discount

        $discount = 0;

        echo number_format($discount, 0, '.', ',');

        echo '!@#$%^&*()_+';
        // [3] class=cart_shipping

        if($qty > 0) {
            $shipping_price = DB::table('shipping')
                ->where('shipping_id', '=', 1)
                ->first();

            if(!empty($shipping_price)) {
                if($shipping_price->shipping_condition >= $sub_total) {
                    $shipping_price_ = $shipping_price->shipping_price;

                    Session::put('shippping_price', $shipping_price_);
                } else {
                    Session::put('shippping_price', 0);
                }
            }
        } else {
            Session::put('shippping_price', 0);
        }

        $shipping = Session::get('shippping_price');

        echo number_format($shipping, 0, '.', ',');

        echo '!@#$%^&*()_+';
        // [4] class=cart_total

        // if($qty > 0) {
        //     $total = $sub_total - $discount + $shipping;
        // } else {
        //     $total = $sub_total - $discount;
        // }

        $total = $sub_total - $discount + $shipping;

        echo number_format($total, 0, '.', ',');

        echo '!@#$%^&*()_+';
        // [5] class=cart_pc_mobile
        foreach(ShoppingCart::all() as $r) {
?>
                                <div class="accordion-item remove_cart_<?php echo $r->rawId();?>">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            <?php echo number_format($r->qty, 0, '.', ',');?> ชิ้น
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <div class="groupcartprd">
                                                <div class="row mt-3">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <img src="<?php echo asset('public/uploads/product/'.$r->image);?>" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="col-lg-8 contentbl">
                                                                <?php echo $r->name;?>
                                                                <br>
                                                                สี <?php echo $r->color;?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 text-lg-end">
                                                        <div class="price pt-3">
                                                            ฿ <?php echo number_format($r->price, 0, '.', ',');?> <br>
                                                            <span>฿ <?php echo number_format($r->product_before_discount, 0, '.', ',');?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row text-end">
                                                    <div class="col-lg-2 offset-lg-8">
                                                    <a href="javascript:removeCart('<?php echo $r->rawId();?>');" onclick="return confirm('Confirm Delete');" class="smlink">Remove</a>
                                                    </div>
                                                    <div class="col-lg-2">
                                                    <div class="qtyCart">
                                                            <div class="qty_group_cart mb-2">
                                                                <div class="input-group"> <span class="input-group-btn">
                                                                        <button id="qty-minus" type="button"
                                                                            class="btn btn-default btn-number minus_<?php echo $r->rawId();?>"
                                                                            data-field="quant[1]" onclick="minus('<?php echo $r->rawId();?>');">
                                                                            <i class="fi fi-rr-minus"></i>
                                                                        </button>
                                                                    </span>
                                                                    <input id="CC-prodDetails-quantity_<?php echo $r->rawId();?>" type="text"
                                                                        name="quant[1]"
                                                                        class="form-control input-number" value="<?php echo $r->qty;?>"
                                                                        min="1" max="100">
                                                                    <span class="input-group-btn">
                                                                        <button id="qty-plus" type="button"
                                                                            class="btn btn-default btn-number plus_<?php echo $r->rawId();?>"
                                                                            data-type="plus" data-field="quant[1]" onclick="plus('<?php echo $r->rawId();?>');">
                                                                            <i class="fi fi-rr-plus"></i>
                                                                        </button>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
<?php
        }
    }

    public function product_index(Request $request) {
        $data['category1'] = DB::table('category1')
            ->orderBy('category1_id', 'asc')
            ->get();

        $data['category2'] = DB::table('category2')
            ->orderBy('category2_id', 'asc')
            ->get();

        return view('frontend/product_index', $data);
    }

    public function product_sub(Request $request, $category3_id) {
        $data['category3_id'] = $category3_id;

        $data['category_txt'] = DB::table('category1')
            ->join('category2', 'category1.category1_id', '=', 'category2.category1_id')
            ->join('category3', 'category2.category2_id', '=', 'category3.category2_id')
            ->where('category3.category3_id', '=', $category3_id)
            ->first();

        // $data['brand'] = DB::table('brand')
        //     ->orderBy('brand_id', 'asc')
        //     ->get();

        $data['brand'] = DB::table('category1')
            ->join('category2', 'category1.category1_id', '=', 'category2.category1_id')
            ->join('category3', 'category2.category2_id', '=', 'category3.category2_id')
            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
            ->join('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->where('category3.category3_id', '=', $category3_id)
            ->groupBy('product.brand_id')
            ->orderBy('brand.brand_id', 'asc')
            ->skip(0)
            ->take(4)
            ->get();

        $data['feature_inc'] = DB::table('category1')
            ->join('category2', 'category1.category1_id', '=', 'category2.category1_id')
            ->join('category3', 'category2.category2_id', '=', 'category3.category2_id')
            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
            ->join('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->join('feature_selections', 'category3.category3_id', '=', 'feature_selections.category3_id')
            ->where('category3.category3_id', '=', $category3_id)
            ->groupBy('id')
            ->orderBy('id', 'asc')
            ->get();

        // max price
        $data['max_price_inc'] = DB::table('category3')
            ->where('category3_id', '=', $category3_id)
            ->first();

        $data['category'] = DB::table('category1')
            ->orderBy('category1_id', 'asc')
            ->get();

        // product
        $perpage = 36;

        $data['perpage'] = $perpage;

        if(!empty($data['category_txt'])) {
            $data['product_show'] = DB::table('category3')
                ->join('product', 'category3.category3_id', '=', 'product.category3_id')
                ->where('category3.category3_id', '=', $category3_id)
                ->orderBy('product.product_sort', 'asc')
                ->paginate($perpage);

            $data['product_all'] = DB::table('category3')
                ->join('product', 'category3.category3_id', '=', 'product.category3_id')
                ->where('category3.category3_id', '=', $category3_id)
                ->orderBy('product.product_sort', 'asc')
                ->get();
        } else {
            $data['product_show'] = DB::table('brand')
                ->join('product', 'brand.brand_id', '=', 'product.brand_id')
                ->where('brand.brand_id', '=', $_GET['brand'])
                ->orderBy('product.product_sort', 'asc')
                ->paginate($perpage);

            $data['product_all'] = DB::table('brand')
                ->join('product', 'brand.brand_id', '=', 'product.brand_id')
                ->where('brand.brand_id', '=', $_GET['brand'])
                ->orderBy('product.product_sort', 'asc')
                ->get();
        }

        if(count($data['product_all']) != 0) {
            $count_product_all = count($data['product_all']);

            if(!empty($_GET['page'])) {

                $pages_last = ceil($count_product_all / $perpage);

                if($pages_last == $_GET['page']) {
                    $mod_product = $count_product_all % $perpage;

                    if($mod_product == 0) {
                        $data['no_show_product2'] = ($_GET['page'] * $perpage);
                    } else {
                        $data['no_show_product2'] = ($_GET['page'] * $perpage) - $perpage + $mod_product;
                    }
                } else {
                    $data['no_show_product2'] = $_GET['page'] * $perpage;
                }
            } else {
                $mod_product = $count_product_all % $perpage;

                if($count_product_all >= $perpage) {
                    $data['no_show_product2'] = $perpage;
                } elseif($mod_product == 0) {
                    $data['no_show_product2'] = $perpage;
                } else {
                    $data['no_show_product2'] = $mod_product;
                }
            }
        } else {
            $data['no_show_product2'] = '0';
        }

        if(empty($_GET['page']) and count($data['product_all']) != 0) {
            $data['no_show_product1'] = 1;
        } elseif(empty($_GET['page']) and count($data['product_all']) == 0) {
            $data['no_show_product1'] = 0;
        } elseif($_GET['page'] == '1') {
            $data['no_show_product1'] = 1;
        } else {
            $data['no_show_product1'] = ($_GET['page'] * $perpage) - ($perpage) + 1;
        }
        // End product

        $data['keyword'] = DB::table('keyword_product')
            ->orderBy('keyword_product_id', 'asc')
            ->get();

        $data['brand_row'] = DB::table('brand')
            ->where('brand_id', '=', @$_GET['brand'])
            ->first();

        return view('frontend.product_sub', $data);
    }

    public function product(Request $request, $category2_id) {
        $data['category2_id'] = $category2_id;

        $data['category_txt'] = DB::table('category1')
            ->join('category2', 'category1.category1_id', '=', 'category2.category1_id')
            ->where('category2.category2_id', '=', $category2_id)
            ->first();

        // $data['brand'] = DB::table('brand')
        //     ->orderBy('brand_id', 'asc')
        //     ->get();

        $data['brand_inc'] = DB::table('category1')
            ->join('category2', 'category1.category1_id', '=', 'category2.category1_id')
            ->join('category3', 'category2.category2_id', '=', 'category3.category2_id')
            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
            ->join('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->where('category2.category2_id', '=', $category2_id)
            ->groupBy('product.brand_id')
            ->orderBy('brand.brand_id', 'asc')
            ->skip(0)
            ->take(4)
            ->get();

        $data['category'] = DB::table('category1')
            ->orderBy('category1_id', 'asc')
            ->get();

        $data['category2'] = DB::table('category2')
            ->orderBy('category2_id', 'asc')
            ->get();

        $category2_first = DB::table('category2')
            ->where('category2_id', '=', $category2_id)
            ->orderBy('category2_id', 'asc')
            ->first();

        if(!empty($category2_first)) {
            $data['category3'] = DB::table('category3')
                ->orderBy('category3.category3_id', 'asc')
                ->where('category3.category2_id', '=', $category2_first->category2_id)
                ->get();
        }

        // max price
        $data['max_price_inc'] = DB::table('category2')
            ->where('category2_id', '=', $category2_id)
            ->first();

        $data['feature_inc'] = DB::table('category1')
            ->join('category2', 'category1.category1_id', '=', 'category2.category1_id')
            ->join('category3', 'category2.category2_id', '=', 'category3.category2_id')
            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
            ->join('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->join('feature_selections', 'category3.category3_id', '=', 'feature_selections.category3_id')
            ->where('category2.category2_id', '=', $category2_id)
            ->groupBy('id')
            ->orderBy('id', 'asc')
            ->get();

        // product
        $perpage = 36;

        $data['perpage'] = $perpage;

        if(!empty($data['category_txt'])) {
            $data['product_show'] = DB::table('category3')
                ->join('product', 'category3.category3_id', '=', 'product.category3_id')
                ->where('category3.category2_id', '=', $data['category_txt']->category2_id)
                ->orderBy('product.product_sort', 'asc')
                ->paginate($perpage);
        }

        if(!empty($data['category_txt'])) {
            $data['product_all'] = DB::table('category3')
                ->join('product', 'category3.category3_id', '=', 'product.category3_id')
                ->where('category3.category2_id', '=', $data['category_txt']->category2_id)
                ->orderBy('product.product_sort', 'asc')
                ->get();
        }

        // dd($data['product_all']);

        if(!empty($data['product_all'])) {
            if(count($data['product_all']) != 0) {
                $count_product_all = count($data['product_all']);

                if(!empty($_GET['page'])) {

                    $pages_last = ceil($count_product_all / $perpage);

                    if($pages_last == $_GET['page']) {
                        $mod_product = $count_product_all % $perpage;

                        if($mod_product == 0) {
                            $data['no_show_product2'] = ($_GET['page'] * $perpage);
                        } else {
                            $data['no_show_product2'] = ($_GET['page'] * $perpage) - $perpage + $mod_product;
                        }
                    } else {
                        $data['no_show_product2'] = $_GET['page'] * $perpage;
                    }
                } else {
                    $mod_product = $count_product_all % $perpage;

                    if($count_product_all >= $perpage) {
                        $data['no_show_product2'] = $perpage;
                    } elseif($mod_product == 0) {
                        $data['no_show_product2'] = $perpage;
                    } else {
                        $data['no_show_product2'] = $mod_product;
                    }
                }
            } else {
                $data['no_show_product2'] = '0';
            }
        }

        if(empty($_GET['page']) and !empty($data['product_all']) and count($data['product_all']) != 0) {
            $data['no_show_product1'] = 1;
        } elseif(empty($_GET['page']) and !empty($data['product_all']) and count($data['product_all']) == 0) {
            $data['no_show_product1'] = 0;
        } elseif(!empty($_GET['page']) and $_GET['page'] == '1') {
            $data['no_show_product1'] = 1;
        } elseif(!empty($_GET['page'])) {
            $data['no_show_product1'] = ($_GET['page'] * $perpage) - ($perpage) + 1;
        }

        // $count_product_all = count($data['product_all']);
        // end product

        $data['keyword'] = DB::table('keyword_product')
            ->orderBy('keyword_product_id', 'asc')
            ->get();

        return view('frontend/product', $data);
    }

    public function ajaxCategory3(Request $request) {
        $category3 = DB::table('category3')
            ->where('category2_id', '=', $request->input('category2_id'))
            ->get();

        if(!empty($category3)) {
            foreach($category3 as $r) {
?>
                <div class="item">
                    <img src="<?php echo asset('public/uploads/product/'.$r->category3_image);?>" alt="">
                    <?php echo $r->category3_name;?>
                </div>
<?php
            }
        }
    }

    public function service(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/service', $data);
    }

    public function terms(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/terms', $data);
    }

    public function test(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/test', $data);
    }

    public function service1(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/service1');
    }

    public function service2(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/service2');
    }

    public function service3(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/service3');
    }

    public function service4(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/service4');
    }

    public function service5(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/service5');
    }

    public function forgetPassword(Request $request) {
        $checkEmail = DB::table('member')
            ->where('member_email', '=', $request->input('member_email'))
            ->first();

        if(empty($checkEmail)) {
            echo 'ไม่มีอีเมล์นี้ในระบบ';
        } else {
            if(!empty($checkEmail->member_password)) {
                $sender = array($request->input('member_email'));
                $subject = 'Forget Password :: Officecare';

                $from_email = 'noreply.officecare@gmail.com';
                $from_name = 'NoReply Officecare';

                $data['member_password'] = $checkEmail->member_password;

                Mail::send('mail.forget_password', $data, function($message)use($sender, $subject) {
                    $message->to($sender[0])
                            ->subject($subject);
                });

                echo 'ส่งรหัสผ่านของคุณเรียบร้อย';
            }
        }
    }

    public function saveMember(Request $request) {
        $data_post = array(
            'member_name' => $request->input('member_name_inc'),
            'member_surname' => $request->input('member_surname_inc'),
            'member_email' => $request->input('member_email_inc'),
            'member_mobile' => $request->input('member_mobile_inc'),
            'member_password' => $request->input('member_password_inc'),
            'member_datetime_create' => date('Y-m-d H:i:s'),
            'member_datetime_update' => date('Y-m-d H:i:s')
        );

        DB::table('member')
            ->insert($data_post);

        if(!empty($request->input('member_email_inc'))) {
            $sender = array($request->input('member_email_inc'));
            $subject = 'บัญชีออฟฟิศแคร์ :: Officecare';

            $from_email = 'noreply.officecare@gmail.com';
            $from_name = 'NoReply Officecare';

            $data['member_name_inc'] = $request->input('member_name_inc');
            $data['member_surname_inc'] = $request->input('member_surname_inc');
            $data['member_email_inc'] = $request->input('member_email_inc');
            $data['member_mobile_inc'] = $request->input('member_mobile_inc');
            $data['member_password_inc'] = $request->input('member_password_inc');

            Mail::send('mail.register', $data, function($message)use($sender, $subject) {
                $message->to($sender[0])
                        ->subject($subject);
            });

            echo '<script>alert("ส่งอีเมล์เรียบร้อย");window.location.href="'.url('index').'";</script>';
        }

        //return redirect('index');
    }

    public function ajaxCheckEmail(Request $request) {
        $email = DB::table('member')
            ->where('member_email', '=', $request->input('member_email'))
            ->first();

        if(!empty($email)) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

    public function loginFrontend(Request $request) {
        $row = DB::table('member')
            ->where('member_email', '=', $request->input('member_email_login_inc'))
            ->where('member_password', '=', $request->input('member_password_login_inc'))
            ->first();

        if(!empty($row)) {

            $request->session()->put('member_id', $row->member_id);

            // $minutes = 60 * 60 * 24 * 365;
            // $response = new Response('Set Cookie');
            // $response->withCookie(cookie('username_cookie', $request->input('member_email_login_inc'), $minutes));
            // $response->withCookie(cookie('password_cookie', $request->input('member_password_login_inc'), $minutes));

            if(ShoppingCart::isEmpty()) {
                return redirect('account_profile');
            } else {
                return redirect('cart');
            }
        } else {
            $request->session()->forget('member_id');

            $redirect = url("index");

            echo '<script>alert("Username And/Or Password Incorrect");window.location.href="'.$redirect.'";</script>';

            //return redirect('index');
        }
    }

    public function logoutFrontend(Request $request) {
        $request->session()->forget('member_id');

        return redirect('index');
    }

    public function genOrderNo() {
        $order = DB::table('order')
            ->orderBy('order_id', 'desc')
            ->first();

        if(!empty($order)) {
            $order_no = $order->order_no;

            $order_no++;

            return $order_no;
        } else {
            return '1';
        }
    }

    public function ajaxCheckout(Request $request) {
        $sub_total = 0;
        foreach(ShoppingCart::all() as $r) {
            $price = $r->qty * $r->price;

            $sub_total += $price;
        }

        $discount = 0;
        if(Session::get('shippping_price') != '') {
            $shipping = Session::get('shippping_price');
        } else {
            $shipping = 0;
        }

        $total = $sub_total - $discount + $shipping;

        $order_no = $this->genOrderNo();
        $data = array(
            'order_no' => $order_no,
            'member_id' => $request->session()->get('member_id'),
            'order_sub_total' => $sub_total,
            'order_discount' => $discount,
            'order_shipping' => $shipping,
            'order_total' => $total
        );

        if($request->input('type') == 'member_address') {
            $member_address = DB::table('member_shipping_address')
                ->where('member_id', '=', $request->session()->get('member_id'))
                ->where('member_shipping_address_status', '=', 'ค่าเริ่มต้น')
                ->first();

            if(!empty($member_address)) {
                $data['order_shipping_address_name_surname'] = $member_address->member_shipping_address_name_surname;
                $data['order_shipping_address_mobile'] = $member_address->member_shipping_address_mobile;
                $data['order_shipping_address_address'] = $member_address->member_shipping_address_address;
                $data['province_id'] = $member_address->province_id;
                $data['amphur_id'] = $member_address->amphur_id;
                $data['tumbol_id'] = $member_address->tumbol_id;
                $data['order_shipping_address_postcode'] = $member_address->member_shipping_address_postcode;
            }
        } elseif($request->input('type') == 'new_address') {
            $data['order_shipping_address_name_surname'] = $request->input('order_shipping_address_name_surname');
            $data['order_shipping_address_mobile'] = $request->input('order_shipping_address_mobile');
            $data['order_shipping_address_address'] = $request->input('order_shipping_address_address');
            $data['province_id'] = $request->input('province_id');
            $data['amphur_id'] = $request->input('amphur_id');
            $data['tumbol_id'] = $request->input('tumbol_id');
            $data['order_shipping_address_postcode'] = $request->input('order_shipping_address_postcode');
        }

        $data['order_status'] = 'Ordering';
        $data['order_tracking_no'] = '';
        $data['order_datetime_create'] = date('Y-m-d H:i:s');
        $data['order_datetime_update'] = date('Y-m-d H:i:s');

        DB::table('order')
            ->insert($data);

        $order = DB::table('order')
            ->orderBy('order_id', 'desc')
            ->first();

        if(!empty($order)) {
            foreach(ShoppingCart::all() as $r) {
                $data_detail = array(
                    'order_id' => $order->order_id,
                    'order_detail_name' => $r->name,
                    'order_detail_image' => $r->image,
                    'order_detail_color' => $r->color,
                    'order_detail_qty' => $r->qty,
                    'order_detail_price' => $r->price,
                    'order_detail_before_discount' => $r->product_before_discount,
                    'order_detail_datetime_create' => date('Y-m-d H:i:s'),
                    'order_detail_datetime_update' => date('Y-m-d H:i:s')
                );

                DB::table('order_detail')
                    ->insert($data_detail);
            }

            // order email
            $order = DB::table('order')
                ->orderBy('order_id', 'desc')
                ->first();

            if(!empty($order)) {
                $sender = array('sitiporn@orange-thailand.com');
                $subject = 'Officecare Order No. '.$order->order_no;

                $from_email = 'noreply.officecare@gmail.com';
                $from_name = 'NoReply Officecare';

                $data['order'] = $order;

                if(!empty($data['order'])) {
                    $data['order_detail'] = DB::table('order_detail')
                        ->where('order_id', '=', $data['order']->order_id)
                        ->get();
                }

                Mail::send('mail.order_officecare', $data, function($message)use($sender, $subject) {
                    $message->to($sender[0])
                            ->subject($subject);
                });
            }
            // end order email

            ShoppingCart::destroy();

            echo $order->order_id;
        }
    }

    public function search(Request $request, $keyword) {
        $data['keyword_'] = $keyword;
        
        $data['product_show'] = DB::table('product')
            ->where(function ($query) use ($keyword) {
                $query->where('product.product_name', 'like', '%'.$keyword.'%')
                ->orWhere('product.product_detail', 'like', '%'.$keyword.'%')
                ->orWhere('product.product_specificial', 'like', '%'.$keyword.'%');
            })
            ->groupBy('product.product_id')
            ->paginate(36);

        $data['brand_inc'] = DB::table('category1')
            ->join('category2', 'category1.category1_id', '=', 'category2.category1_id')
            ->join('category3', 'category2.category2_id', '=', 'category3.category2_id')
            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
            ->join('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->where('category1.category1_name', 'like', '%'.$keyword.'%')
            ->orWhere('category2.category2_name', 'like', '%'.$keyword.'%')
            ->orWhere('category3.category3_name', 'like', '%'.$keyword.'%')
            ->orWhere('product.product_name', 'like', '%'.$keyword.'%')
            ->groupBy('product.brand_id')
            ->orderBy('brand.brand_id', 'asc')
            ->skip(0)
            ->take(4)
            ->get();

        $data['brand_inc2'] = DB::table('category1')
            ->join('category2', 'category1.category1_id', '=', 'category2.category1_id')
            ->join('category3', 'category2.category2_id', '=', 'category3.category2_id')
            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
            ->join('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->where('category1.category1_name', 'like', '%'.$keyword.'%')
            ->orWhere('category2.category2_name', 'like', '%'.$keyword.'%')
            ->orWhere('category3.category3_name', 'like', '%'.$keyword.'%')
            ->orWhere('product.product_name', 'like', '%'.$keyword.'%')
            ->groupBy('product.brand_id')
            ->orderBy('brand.brand_id', 'asc')
            ->skip(4)
            ->take(100)
            ->get();

        $data['feature_inc'] = DB::table('category1')
            ->join('category2', 'category1.category1_id', '=', 'category2.category1_id')
            ->join('category3', 'category2.category2_id', '=', 'category3.category2_id')
            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
            ->join('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->join('feature_selections', 'category3.category3_id', '=', 'feature_selections.category3_id')
            ->where('category1.category1_name', 'like', '%'.$keyword.'%')
            ->orWhere('category2.category2_name', 'like', '%'.$keyword.'%')
            ->orWhere('category3.category3_name', 'like', '%'.$keyword.'%')
            ->orWhere('product.product_name', 'like', '%'.$keyword.'%')
            ->groupBy('id')
            ->orderBy('id', 'asc')
            ->get();

        // เขียนเพิ่ม
        $data['product_all'] = DB::table('product')
            ->where('product_name', 'like', '%'.$keyword.'%')
            ->orWhere('product_detail', 'like', '%'.$keyword.'%')
            ->orWhere('product_specificial', 'like', '%'.$keyword.'%')
            ->get();

        $perpage = 36;

        if(!empty($data['product_show'])) {
            if(count($data['product_show']) != 0) {
                $count_product_all = count($data['product_show']);

                if(!empty($_GET['page'])) {

                    $pages_last = ceil($count_product_all / $perpage);

                    if($pages_last == $_GET['page']) {
                        $mod_product = $count_product_all % $perpage;

                        if($mod_product == 0) {
                            $data['no_show_product2'] = ($_GET['page'] * $perpage);
                        } else {
                            $data['no_show_product2'] = ($_GET['page'] * $perpage) - $perpage + $mod_product;
                        }
                    } else {
                        $data['no_show_product2'] = $_GET['page'] * $perpage;
                    }
                } else {
                    $mod_product = $count_product_all % $perpage;

                    if($count_product_all >= $perpage) {
                        $data['no_show_product2'] = $perpage;
                    } elseif($mod_product == 0) {
                        $data['no_show_product2'] = $perpage;
                    } else {
                        $data['no_show_product2'] = $mod_product;
                    }
                }
            } else {
                $data['no_show_product2'] = '0';
            }
        }

        if(empty($_GET['page']) and !empty($data['product_show']) and count($data['product_show']) != 0) {
            $data['no_show_product1'] = 1;
        } elseif(empty($_GET['page']) and !empty($data['product_show']) and count($data['product_show']) == 0) {
            $data['no_show_product1'] = 0;
        } elseif(!empty($_GET['page']) and $_GET['page'] == '1') {
            $data['no_show_product1'] = 1;
        } elseif(!empty($_GET['page'])) {
            $data['no_show_product1'] = ($_GET['page'] * $perpage) - ($perpage) + 1;
        }
        // End เขียนเพิ่ม

        // dd($data['feature_inc']);

        return view('frontend.search', $data);
    }

    public function ajaxFilterProduct(Request $request) {
        $perpage = 36;

        // product
        $data['perpage'] = $perpage;

        $data['product_all'] = DB::table('category3')
            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
            ->where('category3.category2_id', '=', $request->input('category2_id'))
            ->where('product.product_price', '>=', $request->input('price_min'))
            ->where('product.product_price', '<=', $request->input('price_max'));

            // if(!empty($request->input('order_by')) and $request->input('order_by') != '') {
            //     if($request->input('order_by') == 'price_asc') {
            //         $data['product_all']->orderBy('product.product_price', 'asc');
            //     } elseif($request->input('order_by') == 'price_desc') {
            //         $data['product_all']->orderBy('product.product_price', 'desc');
            //     } elseif($request->input('order_by') == 'id_desc') {
            //         $data['product_all']->orderBy('product.product_id', 'desc');
            //     }
            // } else {
            //     $data['product_all']->orderBy('product.product_sort', 'asc');
            // }

        if(!empty($request->input('brand_id'))) {
            $data['product_all']->whereIn('brand_id', $request->input('brand_id'));
        }

        if(!empty($request->input('feature_id'))) {
            $data['product_all']->join('product_to_feature', 'product.product_id', '=', 'product_to_feature.product_id')
                ->join('features', 'product_to_feature.feature_id', '=', 'features.id')
                ->whereIn('features.id', $request->input('feature_id'));
        }

        $data['product_all']->groupBy('product.product_id');

        $data['product_all'] = $data['product_all']->get();

        if(count($data['product_all']) != 0) {
            $count_product_all = count($data['product_all']);

            if(!empty($_GET['page'])) {
                
                $pages_last = ceil($count_product_all / $perpage);

                if($pages_last == $_GET['page']) {
                    $mod_product = $count_product_all % $perpage;
                    
                    if($mod_product == 0) {
                        $data['no_show_product2'] = ($_GET['page'] * $perpage);
                    } else {
                        $data['no_show_product2'] = ($_GET['page'] * $perpage) - $perpage + $mod_product;
                    }
                } else {
                    $data['no_show_product2'] = $_GET['page'] * $perpage;
                }
            } else {
                $mod_product = $count_product_all % $perpage;

                if($request->input('page') > 1) {
                    $data['no_show_product2'] = $perpage * $request->input('page');
                } elseif($count_product_all >= $perpage) {
                    $data['no_show_product2'] = $perpage;
                } elseif($mod_product == 0) {
                    $data['no_show_product2'] = $perpage;
                } else {
                    $data['no_show_product2'] = $mod_product;
                }
            }
        } else {
            $data['no_show_product2'] = '0';
        }

        if(empty($request->input('page')) and count($data['product_all']) != 0) {
            $data['no_show_product1'] = 1;
        } elseif(empty($request->input('page')) and count($data['product_all']) == 0) {
            $data['no_show_product1'] = 0;
        } elseif($request->input('page') == '1') {
            $data['no_show_product1'] = 1;
        } else {
            $data['no_show_product1'] = ($request->input('page') * $perpage) - ($perpage) + 1;
        }

        $count_product_all = count($data['product_all']);
        // end product

        if($request->input('page') != '') {
            $offset = ($request->input('page') * $perpage) - $perpage;
            $product = DB::table('product')
                ->where('product.product_price', '>=', $request->input('price_min'))
                ->where('product.product_price', '<=', $request->input('price_max'))
                ->skip($offset)
                ->take($perpage);

            if(!empty($request->input('order_by')) and $request->input('order_by') != '') {
                if($request->input('order_by') == 'price_asc') {
                    $product->orderBy('product.product_price', 'asc');
                } elseif($request->input('order_by') == 'price_desc') {
                    $product->orderBy('product.product_price', 'desc');
                } elseif($request->input('order_by') == 'id_desc') {
                    $product->orderBy('product.product_id', 'desc');
                } elseif($request->input('order_by') == 'id_asc') {
                    $product->orderBy('product.product_id', 'asc');
                }
            } else {
                $product->orderBy('product.product_sort', 'asc');
            }

            if(!empty($request->input('brand_id'))) {
                $product->whereIn('brand_id', $request->input('brand_id'));
            }

            if(!empty($request->input('feature_id'))) {
                $product->join('product_to_feature', 'product.product_id', '=', 'product_to_feature.product_id')
                    ->join('features', 'product_to_feature.feature_id', '=', 'features.id')
                    ->whereIn('features.id', $request->input('feature_id'));
            }

            $product = $product->get();

        } else {
            $product = DB::table('product')
                ->where('product.product_price', '>=', $request->input('price_min'))
                ->where('product.product_price', '<=', $request->input('price_max'))
                ->take($perpage);

            if(!empty($request->input('order_by')) and $request->input('order_by') != '') {
                if($request->input('order_by') == 'price_asc') {
                    $product->orderBy('product.product_price', 'asc');
                } elseif($request->input('order_by') == 'price_desc') {
                    $product->orderBy('product.product_price', 'desc');
                } elseif($request->input('order_by') == 'id_desc') {
                    $product->orderBy('product.product_id', 'desc');
                }
            } else {
                $product->orderBy('product.product_sort', 'asc');
            }

            if(!empty($request->input('brand_id'))) {
                $product->whereIn('brand_id', $request->input('brand_id'));
            }

            if(!empty($request->input('feature_id'))) {
                $product->join('product_to_feature', 'product.product_id', '=', 'product_to_feature.product_id')
                    ->join('features', 'product_to_feature.feature_id', '=', 'features.id')
                    ->whereIn('features.id', $request->input('feature_id'));
            }

            $product->groupBy('product.product_id');

            $product = $product->get();
        }

        // product
        if(!empty($product)) {
            foreach($product as $r) {
?>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="productgroup">
                                    <div class="productpic">
                                        <a href="<?php echo url('product_detail/'.$r->product_id);?>"><img src="<?php echo asset('public/uploads/product/'.$r->product_image);?>" alt="">
                                        </a>
                                        <a href="javascript:insertWishlist('<?php echo $r->product_id;?>');" class="wishlist"><i class="fi fi-rr-heart"></i></a>
                                    </div>

                                    <div class="contentProduct pt-3">
                                        <a href="javascript:void(0);" class="btn btn-cart" onclick="insertCart('<?php echo $r->product_id;?>', 1);"><i class="fi fi-rr-plus-small"></i> เพิ่มสินค้า</a>
                                        <div class="qtyAddcart" style="display:none;">
                                            <div class="qty_group_cart">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button id="qty-minus" type="button" class="btn btn-default btn-number qty_<?php echo $r->product_id;?>"
                                                             data-type="minus" data-field="quant[<?php echo $r->product_id;?>]" rel="<?php echo $r->product_id;?>">
                                                            <i class="fi fi-rr-minus"></i>
                                                        </button>
                                                    </span>
                                                    <input id="CC-prodDetails-quantity" type="text" name="quant[<?php echo $r->product_id;?>]" class="form-control input-number qty_<?php echo $r->product_id;?>" value="1" min="0" max="100" rel="<?php echo $r->product_id;?>"/>
                                                    <span class="input-group-btn">
                                                        <button id="qty-plus" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[<?php echo $r->product_id;?>]" rel="<?php echo $r->product_id;?>">
                                                            <i class="fi fi-rr-plus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price pt-3">
                                            ฿ <?php echo number_format($r->product_price, 0, '.', ',');?> <?php echo checkPrice($r->product_before_discount, $r->product_price);?>
                                        </div>
                                        <p>
                                            <?php echo $r->product_name;?>
                                        </p>
                                    </div>
                                </div>
                            </div>
<?php
            }
        }

        echo '!@#$%^&*()_+';

        $page = ceil(count($data['product_all']) / $perpage);

        if($page == 1) {

        } else {
?>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>
<?php
            for($i = 1; $i <= $page; $i++) {
?>
                            <li class="page-item <?php if($i == '1' and empty($request->input('page'))) { echo 'active'; } elseif(!empty($request->input('page')) and $request->input('page') == $i) { echo 'active'; } ?>"><a class="page-link" href="javascript:filterProduct('<?php echo $i;?>');"><?php echo $i;?></a></li>
<?php
            }
?>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
<?php
        }

        echo '!@#$%^&*()_+';

        echo $data['no_show_product1'];

        echo '!@#$%^&*()_+';

        echo $data['no_show_product2'];

        echo '!@#$%^&*()_+';

        echo $count_product_all;
    }

    public function ajaxFilterProductFeature(Request $request) {
        $perpage = 36;
        $keyword = $request->keyword;
        // product
        $data['perpage'] = $perpage;

        $data['product_all'] = DB::table('category3')
            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
            ->where(function ($query) use ($keyword) {
                $query->where('product.product_name', 'like', '%'.$keyword.'%')
                ->orWhere('product.product_detail', 'like', '%'.$keyword.'%')
                ->orWhere('product.product_specificial', 'like', '%'.$keyword.'%');
            })
            ->where('product.product_price', '>=', $request->input('price_min'))
            ->where('product.product_price', '<=', $request->input('price_max'));

        if(!empty($request->input('brand_id'))) {
            $data['product_all']->whereIn('product.brand_id', $request->input('brand_id'));
        }

        if(!empty($request->input('feature_id'))) {
            $data['product_all']->join('product_to_feature', 'product.product_id', '=', 'product_to_feature.product_id')
                ->join('features', 'product_to_feature.feature_id', '=', 'features.id')
                ->whereIn('features.id', $request->input('feature_id'));
        }

        $data['product_all']->groupBy('product.product_id');

        $data['product_all'] = $data['product_all']->get();


        if(count($data['product_all']) != 0) {

            $count_product_all = count($data['product_all']);

            if(!empty($request->input('page'))) {

                $pages_last = ceil($count_product_all / $perpage);

                if($pages_last == $request->input('page')) {
                    $mod_product = $count_product_all % $perpage;

                    if($mod_product == 0) {
                        $data['no_show_product2'] = ($request->input('page') * $perpage);
                    } else {
                        $data['no_show_product2'] = ($request->input('page') * $perpage) - $perpage + $mod_product;
                    }
                } else {
                    $data['no_show_product2'] = $request->input('page') * $perpage;
                }
            } else {
                $mod_product = $count_product_all % $perpage;

                if($request->input('page') > 1) {
                    $data['no_show_product2'] = $perpage * $request->input('page');
                } elseif($count_product_all >= $perpage) {
                    $data['no_show_product2'] = $perpage;
                } elseif($mod_product == 0) {
                    $data['no_show_product2'] = $perpage;
                } else {
                    $data['no_show_product2'] = $mod_product;
                }
            }
        } else {
            $data['no_show_product2'] = '0';
        }

        if(empty($request->input('page')) and count($data['product_all']) != 0) {
            $data['no_show_product1'] = 1;
        } elseif(empty($request->input('page')) and count($data['product_all']) == 0) {
            $data['no_show_product1'] = 0;
        } elseif($request->input('page') == '1') {
            $data['no_show_product1'] = 1;
        } else {
            $data['no_show_product1'] = ($request->input('page') * $perpage) - ($perpage) + 1;
        }

        $count_product_all = count($data['product_all']);

        // dd($request->brand_id);
        // end product

        if($request->input('page') != '') {
            $offset = ($request->input('page') * $perpage) - $perpage;
            $product = DB::table('product')
                ->where(function ($query) use ($keyword) {
                    $query->where('product.product_name', 'like', '%'.$keyword.'%')
                    ->orWhere('product.product_detail', 'like', '%'.$keyword.'%')
                    ->orWhere('product.product_specificial', 'like', '%'.$keyword.'%');
                })
                ->where('product.product_price', '>=', $request->input('price_min'))
                ->where('product.product_price', '<=', $request->input('price_max'))
                ->skip($offset)
                ->take($perpage);

            if(!empty($request->input('order_by')) and $request->input('order_by') != '') {
                if($request->input('order_by') == 'price_asc') {
                    $product->orderBy('product.product_price', 'asc');
                } elseif($request->input('order_by') == 'price_desc') {
                    $product->orderBy('product.product_price', 'desc');
                } elseif($request->input('order_by') == 'id_desc') {
                    $product->orderBy('product.product_id', 'desc');
                }
            } else {
                $product->orderBy('product.product_sort', 'asc');
            }

            if(!empty($request->input('brand_id'))) {
                $product->whereIn('brand_id', $request->input('brand_id'));
            }

            if(!empty($request->input('feature_id'))) {
                $product->join('product_to_feature', 'product.product_id', '=', 'product_to_feature.product_id')
                    ->join('features', 'product_to_feature.feature_id', '=', 'features.id')
                    ->whereIn('features.id', $request->input('feature_id'));
            }

            $product->groupBy('product.product_id');

            $product = $product->get();

        } else {
            $product = DB::table('product')
                ->where(function ($query) use ($keyword) {
                    $query->where('product.product_name', 'like', '%'.$keyword.'%')
                    ->orWhere('product.product_detail', 'like', '%'.$keyword.'%')
                    ->orWhere('product.product_specificial', 'like', '%'.$keyword.'%');
                })
                ->where('product.product_price', '>=', $request->input('price_min'))
                ->where('product.product_price', '<=', $request->input('price_max'))
                ->take($perpage);

            if(!empty($request->input('order_by')) and $request->input('order_by') != '') {
                if($request->input('order_by') == 'price_asc') {
                    $product->orderBy('product.product_price', 'asc');
                } elseif($request->input('order_by') == 'price_desc') {
                    $product->orderBy('product.product_price', 'desc');
                } elseif($request->input('order_by') == 'id_desc') {
                    $product->orderBy('product.product_id', 'desc');
                }
            } else {
                $product->orderBy('product.product_sort', 'asc');
            }

            if(!empty($request->input('brand_id'))) {
                $product->whereIn('brand_id', $request->input('brand_id'));
            }

            if(!empty($request->input('feature_id'))) {
                $product->join('product_to_feature', 'product.product_id', '=', 'product_to_feature.product_id')
                    ->join('features', 'product_to_feature.feature_id', '=', 'features.id')
                    ->whereIn('features.id', $request->input('feature_id'));
            }

            $product->groupBy('product.product_id');

            $product = $product->get();
        }

        // product
        if(!empty($product)) {
            foreach($product as $r) {
?>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="productgroup">
                                    <div class="productpic">
                                        <a href="<?php echo url('product_detail/'.$r->product_id);?>"><img src="<?php echo asset('public/uploads/product/'.$r->product_image);?>" alt="">
                                        </a>
                                        <a href="javascript:insertWishlist('<?php echo $r->product_id;?>');" class="wishlist"><i class="fi fi-rr-heart"></i></a>
                                    </div>

                                    <div class="contentProduct pt-3">
                                        <a href="javascript:void(0);" class="btn btn-cart" onclick="insertCart('<?php echo $r->product_id;?>', 1);"><i class="fi fi-rr-plus-small"></i> เพิ่มสินค้า</a>
                                        <div class="qtyAddcart" style="display:none;">
                                            <div class="qty_group_cart">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button id="qty-minus" type="button" class="btn btn-default btn-number"
                                                             data-type="minus" data-field="quant[<?php echo $r->product_id;?>]" rel="<?php echo $r->product_id;?>">
                                                            <i class="fi fi-rr-minus"></i>
                                                        </button>
                                                    </span>
                                                    
                                                    <input id="CC-prodDetails-quantity" type="text" name="quant[<?php echo $r->product_id;?>]" dataproduct="<?php echo $r->product_id;?>" rel="<?php echo $r->product_id;?>" class="form-control input-number qty_{{ $r->product_id }}" value="1" min="0" max="100"/>
                                                   

                                                    <span class="input-group-btn">
                                                        <button id="qty-plus" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[<?php echo $r->product_id;?>]" rel="<?php echo $r->product_id;?>">
                                                            <i class="fi fi-rr-plus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price pt-3">
                                            ฿ <?php echo number_format($r->product_price, 0, '.', ',');?> <?php echo checkPrice($r->product_before_discount, $r->product_price);?>
                                        </div>
                                        <p>
                                            <?php echo $r->product_name;?>
                                        </p>
                                    </div>
                                </div>
                            </div>
<?php
            }
        }

        echo '!@#$%^&*()_+';

        $page = ceil(count($data['product_all']) / $perpage);

        if($page == 1) {

        } else {
?>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>
<?php
            for($i = 1; $i <= $page; $i++) {
?>
                            <li class="page-item <?php if($i == '1' and empty($request->input('page'))) { echo 'active'; } elseif(!empty($request->input('page')) and $request->input('page') == $i) { echo 'active'; } ?>"><a class="page-link" href="javascript:filterProduct('<?php echo $i;?>');"><?php echo $i;?></a></li>
<?php   
            }
?>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
<?php
        }

        echo '!@#$%^&*()_+';

        echo $data['no_show_product1'];

        echo '!@#$%^&*()_+';

        echo $data['no_show_product2'];

        echo '!@#$%^&*()_+';

        echo $count_product_all;
    }

    public function ajaxFilterProduct3(Request $request) {

        $perpage = 36;
        // dd($request->feature_id);
        // product
        $data['perpage'] = $perpage;

        $data['product_all'] = DB::table('category3')
            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
            // ->leftjoin('product_to_feature' , 'product_to_feature.product_id', 'product.product_id')
            ->where('category3.category3_id', '=', $request->input('category3_id'))
            ->where('product.product_price', '>=', $request->input('price_min'))
            ->where('product.product_price', '<=', $request->input('price_max'))
            ->orderBy('product.product_sort', 'asc');
            //->get();

        if(!empty($request->input('brand_id'))) {
            $data['product_all']->whereIn('brand_id', $request->input('brand_id'));
        }

        if(!empty($request->input('color_id_'))) {
            $data['product_all']->where('product.color_id', '=', $request->input('color_id_'));
        }

        // if(!empty($request->input('feature_id'))) {
        //     $data['product_all']->whereIn('product_to_feature.feature_id', $request->input('feature_id'));
        // }

        if(!empty($request->input('feature_id'))) {
            $data['product_all']->join('product_to_feature', 'product.product_id', '=', 'product_to_feature.product_id')
                ->join('features', 'product_to_feature.feature_id', '=', 'features.id')
                ->whereIn('features.id', $request->input('feature_id'));
        }

        $data['product_all']->groupBy('product.product_id');

        $data['product_all'] = $data['product_all']->get();

        // dd($data['product_all']);
        // dd($request->input('category3_id'), $request->input('price_min'), $request->input('price_max'));

        if(count($data['product_all']) != 0) {
            $count_product_all = count($data['product_all']);

            if(!empty($_GET['page'])) {

                $pages_last = ceil($count_product_all / $perpage);

                if($pages_last == $_GET['page']) {
                    $mod_product = $count_product_all % $perpage;

                    if($mod_product == 0) {
                        $data['no_show_product2'] = ($_GET['page'] * $perpage);
                    } else {
                        $data['no_show_product2'] = ($_GET['page'] * $perpage) - $perpage + $mod_product;
                    }
                } else {
                    $data['no_show_product2'] = $_GET['page'] * $perpage;
                }
            } else {
                $mod_product = $count_product_all % $perpage;

                if($request->input('page') > 1) {
                    $data['no_show_product2'] = $perpage * $request->input('page');
                } elseif($count_product_all >= $perpage) {
                    $data['no_show_product2'] = $perpage;
                } elseif($mod_product == 0) {
                    $data['no_show_product2'] = $perpage;
                } else {
                    $data['no_show_product2'] = $mod_product;
                }
            }
        } else {
            $data['no_show_product2'] = '0';
        }

        if(empty($request->input('page')) and count($data['product_all']) != 0) {
            $data['no_show_product1'] = 1;
        } elseif(empty($request->input('page')) and count($data['product_all']) == 0) {
            $data['no_show_product1'] = 0;
        } elseif($request->input('page') == '1') {
            $data['no_show_product1'] = 1;
        } else {
            $data['no_show_product1'] = ($request->input('page') * $perpage) - ($perpage) + 1;
        }

        $count_product_all = count($data['product_all']);
        // end product

        if($request->input('page') != '') {
            $offset = ($request->input('page') * $perpage) - $perpage;
            $product = DB::table('product')
                // ->leftjoin('product_to_feature' , 'product_to_feature.product_id', 'product.product_id')
                ->where('product.category3_id', $request->input('category3_id'))
                ->where('product.product_price', '>=', $request->input('price_min'))
                ->where('product.product_price', '<=', $request->input('price_max'))
                ->skip($offset)
                ->take($perpage);

                if(!empty($request->input('order_by')) and $request->input('order_by') != '') {
                    if($request->input('order_by') == 'price_asc') {
                        $product->orderBy('product.product_price', 'asc');
                    } elseif($request->input('order_by') == 'price_desc') {
                        $product->orderBy('product.product_price', 'desc');
                    } elseif($request->input('order_by') == 'id_desc') {
                        $product->orderBy('product.product_id', 'desc');
                    }
                } else {
                    $product->orderBy('product.product_sort', 'asc');
                }
            if(!empty($request->input('brand_id'))) {
                $product->whereIn('brand_id', $request->input('brand_id'));
            }

            if(!empty($request->input('color_id_'))) {
                $product->where('product.color_id', '=', $request->input('color_id_'));
            }

            // if(!empty($request->input('feature_id'))) {
            //     $product->whereIn('product_to_feature.feature_id', $request->input('feature_id'));
            // }

            if(!empty($request->input('feature_id'))) {
                $product->join('product_to_feature', 'product.product_id', '=', 'product_to_feature.product_id')
                    ->join('features', 'product_to_feature.feature_id', '=', 'features.id')
                    ->whereIn('features.id', $request->input('feature_id'));
            }
    
            $product->groupBy('product.product_id');

            $product = $product->get();
        } else {
            $product = DB::table('product')
                // ->leftjoin('product_to_feature' , 'product_to_feature.product_id', 'product.product_id')
                ->where('product.category3_id', $request->input('category3_id'))
                ->where('product.product_price', '>=', $request->input('price_min'))
                ->where('product.product_price', '<=', $request->input('price_max'))
                ->select('*', 'product.product_id as product_id')
                ->take($perpage);
            if(!empty($request->input('brand_id'))) {
                $product->whereIn('brand_id', $request->input('brand_id'));
            }

            if(!empty($request->input('color_id_'))) {
                $product->where('product.color_id', '=', $request->input('color_id_'));
            }

            // if(!empty($request->input('feature_id'))) {
            //     $product->whereIn('product_to_feature.feature_id', $request->input('feature_id'));
            // }

            if(!empty($request->input('order_by')) and $request->input('order_by') != '') {
                if($request->input('order_by') == 'price_asc') {
                    $product->orderBy('product.product_price', 'asc');
                } elseif($request->input('order_by') == 'price_desc') {
                    $product->orderBy('product.product_price', 'desc');
                } elseif($request->input('order_by') == 'id_desc') {
                    $product->orderBy('product.product_id', 'desc');
                }
            } else {
                $product->orderBy('product.product_sort', 'asc');
            }

            if(!empty($request->input('feature_id'))) {
                $product->join('product_to_feature', 'product.product_id', '=', 'product_to_feature.product_id')
                    ->join('features', 'product_to_feature.feature_id', '=', 'features.id')
                    ->whereIn('features.id', $request->input('feature_id'));
            }
    
            $product->groupBy('product.product_id');

            $product = $product->get();
        }

        // product
        if(!empty($product)) {
            foreach($product as $r) {
?>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="productgroup">
                                    <div class="productpic">
                                        <a href="<?php echo url('product_detail/'.$r->product_id);?>"><img src="<?php echo asset('public/uploads/product/'.$r->product_image);?>" alt="">
                                        </a>
                                        <a href="javascript:insertWishlist('<?php echo $r->product_id;?>');" class="wishlist"><i class="fi fi-rr-heart"></i></a>
                                    </div>

                                    <div class="contentProduct pt-3">
                                        <a href="javascript:void(0);" class="btn btn-cart" rel="<?php echo $r->product_id;?>" onclick="insertCart('<?php echo $r->product_id;?>', 1);"><i class="fi fi-rr-plus-small"></i> เพิ่มสินค้า</a>
                                        <div class="qtyAddcart" style="display:none;">
                                            <div class="qty_group_cart">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button id="qty-minus" type="button" class="btn btn-default btn-number" data-type="minus" data-field="quant[<?php echo $r->product_id;?>]" rel="<?php echo $r->product_id;?>">
                                                            <i class="fi fi-rr-minus"></i>
                                                        </button>
                                                    </span>
                                                    <input id="CC-prodDetails-quantity_<?php echo $r->product_id;?>" type="text" name="quant[<?php echo $r->product_id;?>]" class="form-control input-number qty_<?php echo $r->product_id;?>" value="1" min="0" max="100" rel="<?php echo $r->product_id;?>" />
                                                    <span class="input-group-btn">
                                                        <button id="qty-plus" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[<?php echo $r->product_id;?>]" rel="<?php echo $r->product_id;?>">
                                                            <i class="fi fi-rr-plus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price pt-3">
                                            ฿ <?php echo number_format($r->product_price, 0, '.', ',');?> <?php echo checkPrice($r->product_before_discount, $r->product_price);?>
                                        </div>
                                        <p>
                                            <?php echo $r->product_name;?>
                                        </p>
                                    </div>
                                </div>
                            </div>
<?php
            }
        }
        echo '!@#$%^&*()_+';

        $page = ceil(count($data['product_all']) / $perpage);

        // echo $data['product_all'].' / '.$perpage;

        if($page > 1) {
?>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>
<?php
            for($i = 1; $i <= $page; $i++) {
?>
                            <li class="page-item <?php if($i == '1' and empty($request->input('page'))) { echo 'active'; } elseif(!empty($request->input('page')) and $request->input('page') == $i) { echo 'active'; } ?>"><a class="page-link" href="javascript:filterProduct('<?php echo $i;?>');"><?php echo $i;?></a></li>
<?php
            }
?>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
<?php
        }

        echo '!@#$%^&*()_+';

        echo $data['no_show_product1'];

        echo '!@#$%^&*()_+';

        echo $data['no_show_product2'];

        echo '!@#$%^&*()_+';

        echo $count_product_all;
    }

    public function ajaxSavePdf(Request $request) {
        $email = DB::table('member')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->first();

        if($request->input('member_address') == 'true') {

            $member = DB::table('member_shipping_address')
                ->where('member_id', '=', $request->session()->get('member_id'))
                ->where('member_shipping_address_status', '=', 'ค่าเริ่มต้น')
                ->first();

            if(!empty($member)) {
                $data_address = array(
                    'member_shipping_address_name_surname' => $member->member_shipping_address_name_surname,
                    'member_shipping_address_mobile' => $member->member_shipping_address_mobile,
                    'member_shipping_address_address' => $member->member_shipping_address_address,
                    'province_id' => $member->province_id,
                    'amphur_id' => $member->amphur_id,
                    'tumbol_id' => $member->tumbol_id,
                    'member_shipping_address_postcode' => $member->member_shipping_address_postcode,
                    'email' => $email->member_email
                );

                $request->session()->put($data_address);
            }
        } else {
            $data_address = array(
                'member_shipping_address_name_surname' => $request->input('member_shipping_address_name_surname'),
                'member_shipping_address_mobile' => $request->input('member_shipping_address_mobile'), 'member_shipping_address_address' => $request->input('member_shipping_address_address'),
                'province_id' => $request->input('province_id'),
                'amphur_id' => $request->input('amphur_id'),
                'tumbol_id' => $request->input('tumbol_id'),
                'member_shipping_address_postcode' => $request->input('member_shipping_address_postcode'),
                'email' => $email->member_email
            );

            $request->session()->put($data_address);
        }
    }

    public function savePdf(Request $request) {

        $order = PDF::loadview('order/order');
        $order->setPaper('A4');
        return $order->stream();
    }

    public function testCustomClass() {
        $new = new First();

        echo $new->test();
    }
}
