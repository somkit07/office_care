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

class FordController extends Controller implements HasImagesContract
{
    use HasImages;

    // ford
    public function ford(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.ford.list');
    }

    public function fordServerProcessing() {
        $query = DB::table('lv_ford')
            ->orderBy('lv_ford.id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('image', function($r) {
                return '<img src="'.asset('public/uploads/ford/'.$r->ford_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/ford/ford_add_edit/".$r->id).'">Edit</a> / <a href="'.url("backend/ford/ford_delete/".$r->id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['image', 'action'])->make(true);
    }

    public function fordAddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('lv_ford')
            ->where('id', $id)
            ->first();

        return view('backend.ford.form', $data);
    }

    public function fordSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'ford_name' => $request->input('ford_name'),
            'ford_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('ford_image')) {

            $image = $request->file('ford_image');
            $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(474, 510);
            $image_resize->save(public_path('uploads/ford/'.$filename));

            $data['ford_image'] = $filename;
        }

        if($request->input('id') != '') {
            // update
            DB::table('lv_ford')
                ->where('id', $request->input('id'))
                ->update($data);
        } else {
            // insert
            $data['ford_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('lv_ford')->insert($data);
        }
        return redirect('backend/ford/');
    }
    // end ford
}