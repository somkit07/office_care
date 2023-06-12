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

class BannerSlideController extends Controller implements HasImagesContract
{
    use HasImages;

    // banner_slide
    public function banner_slide(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.banner_slide.banner_slide');
    }

    public function banner_slideServerProcessing() {
        $query = DB::table('banner_slide')
            ->orderBy('banner_slide.banner_slide_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('banner_slide_image', function($r) {
                return '<img src="'.asset('public/uploads/banner_slide/'.$r->banner_slide_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/banner_slide/banner_slide_add_edit/".$r->banner_slide_id).'">Edit</a> / <a href="'.url("backend/banner_slide/banner_slide_delete/".$r->banner_slide_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['banner_slide_image', 'action'])->make(true);
    }

    public function banner_slideAddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('banner_slide')
            ->where('banner_slide_id', $id)
            ->first();

        return view('backend.banner_slide.banner_slide_add_edit', $data);
    }

    public function banner_slideSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'banner_slide_text1' => $request->input('banner_slide_text1'),
            'banner_slide_text2' => $request->input('banner_slide_text2'),
            'banner_slide_link' => $request->input('banner_slide_link'),
            'banner_slide_sort' => $request->input('banner_slide_sort'),
            'banner_slide_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('banner_slide_image')) {

            $image = $request->file('banner_slide_image');
            $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            // $image_resize->resize(807, 383);
            $image_resize->save(public_path('uploads/banner_slide/'.$filename));

            $data['banner_slide_image'] = $filename;
        }

        if($request->input('banner_slide_id') != '') {
            // update
            DB::table('banner_slide')
                ->where('banner_slide_id', $request->input('banner_slide_id'))
                ->update($data);
        } else {
            // insert
            $data['banner_slide_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('banner_slide')->insert($data);
        }
        return redirect('backend/banner_slide/');
    }
    // end banner_slide
}