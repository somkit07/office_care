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

class ShippingController extends Controller implements HasImagesContract
{
    use HasImages;

    // shipping
    public function shipping(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('shipping')
            ->where('shipping_id', '=', 1)
            ->first(); 

        return view('backend.shipping.shipping', $data);
    }

    // public function shippingServerProcessing() {
    //     $query = DB::table('shipping')
    //         ->orderBy('shipping.shipping_id', 'asc');
        
    //     return \DataTables::of($query)
    //         ->addColumn('shipping_image', function($r) {
    //             return '<img src="'.asset('public/uploads/shipping/'.$r->shipping_image).'" width="150">';
    //         })
    //         ->addColumn('action', function($r) {
    //             return '<a href="'.url("backend/shipping/shipping_add_edit/".$r->shipping_id).'">Edit</a> / <a href="'.url("backend/shipping/shipping_delete/".$r->shipping_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
    //         })
    //         ->rawColumns(['shipping_image', 'action'])->make(true);
    // }

    // public function shippingAddEdit(Request $request, $id = '') {
    //     if(!$request->session()->has('user_id')) {
    //         return redirect('backend/login');
    //     }

    //     $data['row'] = DB::table('shipping')
    //         ->where('shipping_id', $id)
    //         ->first();

    //     return view('backend.shipping.shipping_add_edit', $data);
    // }

    public function shippingSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'shipping_condition' => $request->input('shipping_condition'),
            'shipping_price' => $request->input('shipping_price'),
            'shipping_datetime_update' => date('Y-m-d H:i:s')
        );

        /*if($request->hasFile('shipping_image')) {

            $image = $request->file('shipping_image');
            $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(807, 383);
            $image_resize->save(public_path('uploads/shipping/'.$filename));

            $data['shipping_image'] = $filename;
        }

        if($request->input('shipping_id') != '') {*/
            // update
            DB::table('shipping')
                ->where('shipping_id', $request->input('shipping_id'))
                ->update($data);
        /*} else {
            // insert
            $data['shipping_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('shipping')->insert($data);
        }*/
        return redirect('backend/shipping/');
    }
    // end shipping
}