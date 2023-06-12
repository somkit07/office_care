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

class OrderController extends Controller implements HasImagesContract
{
    use HasImages;

    // order
    public function order(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.order.order');
    }

    public function orderServerProcessing() {
        $query = DB::table('order')
            ->orderBy('order.order_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/order/order_add_edit/".$r->order_id).'">View & Update Status</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function orderAddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('order')
            ->where('order_id', $id)
            ->first();

        return view('backend.order.order_add_edit', $data);
    }

    public function orderSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'order_status' => $request->input('order_status'),
            'order_tracking_no' => $request->input('order_tracking_no'),
            'order_datetime_update' => date('Y-m-d H:i:s')
        );

        /*if($request->hasFile('order_image')) {

            $image = $request->file('order_image');
            $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(807, 383);
            $image_resize->save(public_path('uploads/order/'.$filename));

            $data['order_image'] = $filename;
        }*/

        //dd($request->input('order_id'));

        if($request->input('order_id') != '') {
            // update
            DB::table('order')
                ->where('order_id', $request->input('order_id'))
                ->update($data);
        }/* else {
            // insert
            $data['order_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('order')->insert($data);
        }*/
        return redirect('backend/order/');
    }
    // end order
}