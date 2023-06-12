<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\DataTables;
use Illuminate\Database\Eloquent\Model;
use EveryWell\Imagination\Traits\HasImages;
use EveryWell\Imagination\Contracts\HasImages as HasImagesContract;
use Image;

class MemberController extends Controller implements HasImagesContract
{
    use HasImages;

    // member
    public function member(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.member.member');
    }

    public function memberServerProcessing() {
        $query = DB::table('member')
            ->orderBy('member.member_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/member/member_shipping_address/".$r->member_id).'" target="_blank">ที่อยู่จัดส่ง</a> / <a href="'.url("backend/member/member_order/".$r->member_id).'" target="_blank">ประวัติการสั่งซื้อ</a> / <a href="'.url("backend/member/member_wishlist/".$r->member_id).'" target="_blank">รายการโปรด</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function memberShippingAddress(Request $request, $member_id) {
        $data['member'] = DB::table('member_shipping_address')
            ->orderBy('member_shipping_address_id', 'asc')
            ->where('member_id', '=', $member_id)
            ->get();

        return view('backend.member.member_shipping_address', $data);
    }

    public function memberOrder(Request $request, $member_id) {
        $data['member'] = DB::table('order')
            ->where('member_id', '=', $member_id)
            ->orderBy('order_id', 'desc')
            ->get();

        return view('backend.member.member_order', $data);
    }

    public function memberWishlist(Request $request, $member_id) {
        $data['member'] = DB::table('wishlist')
            ->where('wishlist.member_id', '=', $member_id)
            ->join('product', 'wishlist.product_id', '=', 'product.product_id')
            ->orderBy('wishlist_id', 'desc')
            ->get();

        return view('backend.member.member_wishlist', $data);
    }
    // end member
}