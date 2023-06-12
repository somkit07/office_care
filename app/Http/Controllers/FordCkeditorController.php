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

class FordCkeditorController extends Controller implements HasImagesContract
{
    use HasImages;

    // ford_ckeditor
    public function fordCkeditor(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $ford_ckeditor = DB::table('lv_ford_ckeditor')
            ->where('ford_ckeditor_id', 1)
            ->first();

        return view('backend.ford_ckeditor.form', ['row' => $ford_ckeditor]);
    }

    public function fordCkeditorSaveUpdate(Request $request) {
        $data = array(
            'ford_ckeditor_name' => $request->input('ford_ckeditor_name'),
            'ford_ckeditor_datetime_update' => date('Y-m-d H:i:s'),
            'ford_ckeditor_ip_update' => $_SERVER['REMOTE_ADDR']
        );

        if($request->hasFile('ford_ckeditor_image')) {

            $image = $request->file('ford_ckeditor_image');
            $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(474, 510);
            $image_resize->save(public_path('uploads/ford_ckeditor/'.$filename));

            $data['ford_ckeditor_image'] = $filename;
        }

        // update
        DB::table('lv_ford_ckeditor')
            ->where('ford_ckeditor_id', 1)
            ->update($data);
        
        return redirect(url('backend/ford_ckeditor'));
    }
    // end promotion

}