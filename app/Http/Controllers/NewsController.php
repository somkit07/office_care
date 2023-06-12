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

class NewsController extends Controller implements HasImagesContract
{
    use HasImages;

    // news
    public function news(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.news.news');
    }

    public function newsServerProcessing() {
        $query = DB::table('news_promotion')
            ->orderBy('news_promotion.news_promotion_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('news_promotion_image', function($r) {
                return '<img src="'.asset('public/uploads/news/'.$r->news_promotion_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/news/news_add_edit/".$r->news_promotion_id).'">Edit</a> / <a href="'.url("backend/news/news_delete/".$r->news_promotion_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['news_promotion_image', 'news_image', 'action'])->make(true);
    }

    public function newsAddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('news_promotion')
            ->where('news_promotion_id', $id)
            ->first();

        return view('backend.news.news_add_edit', $data);
    }

    public function newsSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'news_promotion_name' => $request->input('news_promotion_name'),
            'news_promotion_date' => $request->input('news_promotion_date'),
            'news_promotion_description' => $request->input('news_promotion_description'),
            'news_promotion_detail' => $request->input('news_promotion_detail'),
            'news_promotion_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('news_promotion_image')) {

            $image = $request->file('news_promotion_image');
            $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(1539, 871);
            $image_resize->save(public_path('uploads/news/'.$filename));

            $data['news_promotion_image'] = $filename;
        }

        if($request->input('news_promotion_id') != '') {
            // update
            DB::table('news_promotion')
                ->where('news_promotion_id', $request->input('news_promotion_id'))
                ->update($data);
        } else {
            // insert
            $data['news_promotion_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('news_promotion')->insert($data);
        }
        return redirect('backend/news/');
    }
    // end news
}