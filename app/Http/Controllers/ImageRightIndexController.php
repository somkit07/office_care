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

class ImageRightIndexController extends Controller implements HasImagesContract
{
    use HasImages;

    // image_right_index
    // public function image_right_index(Request $request) {
    //     if(!$request->session()->has('user_id')) {
    //         return redirect('backend/login');
    //     }

    //     return view('backend.image_right_index.image_right_index');
    // }

    // public function image_right_indexServerProcessing() {
    //     $query = DB::table('image_right_index')
    //         ->orderBy('image_right_index.image_right_index_id', 'asc');
        
    //     return \DataTables::of($query)
    //         ->addColumn('image_right_index_image', function($r) {
    //             return '<img src="'.asset('public/uploads/image_right_index/'.$r->image_right_index_image).'" width="150">';
    //         })
    //         ->addColumn('action', function($r) {
    //             return '<a href="'.url("backend/image_right_index/image_right_index_add_edit/".$r->image_right_index_id).'">Edit</a> / <a href="'.url("backend/image_right_index/image_right_index_delete/".$r->image_right_index_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
    //         })
    //         ->rawColumns(['image_right_index_image', 'action'])->make(true);
    // }

    public function image_right_index(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('image_right_index')
            ->where('image_right_index_id', '=', 1)
            ->first();

        return view('backend.image_right_index.image_right_index_add_edit', $data);
    }

    public function image_right_indexSaveUpdate(Request $request) {
        // upload file
        $data = array();

        if($request->hasFile('image_right_index_image')) {

            $image = $request->file('image_right_index_image');
            $filename = date('YmdHis').'1.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            //$image_resize->resize(375, 383);
            $image_resize->save(public_path('uploads/image_right_index/'.$filename));

            $data['image_right_index_image'] = $filename;
        }

        if($request->hasFile('image_right_index_center_image')) {

            $image = $request->file('image_right_index_center_image');
            $filename = date('YmdHis').'2.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            //$image_resize->resize(375, 383);
            $image_resize->save(public_path('uploads/image_right_index/'.$filename));

            $data['image_right_index_center_image'] = $filename;
        }

        if($request->input('image_right_index_id') != '') {
            // update
            DB::table('image_right_index')
                ->where('image_right_index_id', $request->input('image_right_index_id'))
                ->update($data);
        } else {
            // insert
            $data['image_right_index_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('image_right_index')->insert($data);
        }
        return redirect('backend/image_right_index/');
    }
    // end image_right_index
}