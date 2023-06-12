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

class ContactUsController extends Controller implements HasImagesContract
{
    use HasImages;

    // contact_us
    public function contact_us(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('contact_us')
            ->where('contact_us_id', 1)
            ->first();

        return view('backend.contact_us.contact_us_add_edit', $data);
    }

    public function contact_usSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'contact_us_embed_google_map' => $request->input('contact_us_embed_google_map'),
            'contact_us_datetime_update' => date('Y-m-d H:i:s')
        );

        /*if($request->hasFile('contact_us_image')) {

            $image = $request->file('contact_us_image');
            $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(807, 383);
            $image_resize->save(public_path('uploads/contact_us/'.$filename));

            $data['contact_us_image'] = $filename;
        }*/

        //if($request->input('contact_us_id') != '') {
            // update
            DB::table('contact_us')
                ->where('contact_us_id', 1)
                ->update($data);
        /*} else {
            // insert
            $data['contact_us_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('contact_us')->insert($data);
        }*/
        return redirect('backend/contact_us/');
    }

    // contact_us_form
    public function contact_us_form(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_us.contact_us_form');
    }

    public function contact_us_formServerProcessing() {
        $query = DB::table('contact_us_form')
            ->orderBy('contact_us_form.contact_us_form_id', 'asc');
        
        return \DataTables::of($query)
            ->make(true);
    }
    // end contact_us
}