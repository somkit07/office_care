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

class ProductController extends Controller implements HasImagesContract
{
    use HasImages;

    // category1
    public function category1(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.category1.category1');
    }

    public function category1ServerProcessing() {
        $query = DB::table('category1')
            ->orderBy('category1.category1_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/category1/category1_add_edit/".$r->category1_id).'">Edit</a> / <a href="'.url("backend/category1/category1_delete/".$r->category1_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function category1AddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('category1')
            ->where('category1_id', $id)
            ->first();

        return view('backend.category1.category1_add_edit', $data);
    }

    public function category1SaveUpdate(Request $request) {
        // upload file
        $data = array(
            'category1_name' => $request->input('category1_name'),
            'category1_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->input('category1_menu_home') == 'Yes') {
            $data['category1_menu_home'] = 'Yes';
        } else {
            $data['category1_menu_home'] = 'No';
        }

        // if($request->hasFile('category1_image')) {

        //     $image = $request->file('category1_image');
        //     $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(807, 383);
        //     $image_resize->save(public_path('uploads/category1/'.$filename));

        //     $data['category1_image'] = $filename;
        // }

        if($request->input('category1_id') != '') {
            // update
            DB::table('category1')
                ->where('category1_id', $request->input('category1_id'))
                ->update($data);
        } else {
            // insert
            $data['category1_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('category1')->insert($data);
        }
        return redirect('backend/category1/');
    }
    // end category1

    // category2
    public function category2(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.category2.category2');
    }

    public function category2ServerProcessing() {
        $query = DB::table('category2')
            ->select('category2_id', 'category2_image', 'category1_name', 'category2_name', 'category2_max_price')
            ->join('category1', 'category1.category1_id', '=', 'category2.category1_id')
            ->orderBy('category2.category2_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('category2_image', function($r) {
                return '<img src="'.asset("public/uploads/category2/".$r->category2_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/category2/category2_add_edit/".$r->category2_id).'">Edit</a> / <a href="'.url("backend/category2/category2_delete/".$r->category2_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['category2_image', 'action'])->make(true);
    }

    public function category2AddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['category1'] = DB::table('category1')
            ->orderBy('category1_id', 'asc')
            ->get();

        $data['row'] = DB::table('category2')
            ->where('category2_id', $id)
            ->first();

        return view('backend.category2.category2_add_edit', $data);
    }

    public function category2SaveUpdate(Request $request) {
        // upload file
        $data = array(
            'category1_id' => $request->input('category1_id'),
            'category2_name' => $request->input('category2_name'),
            'category2_max_price' => $request->input('category2_max_price'),
            'category2_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('category2_image')) {

            $image = $request->file('category2_image');
            $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(333, 333);
            $image_resize->save(public_path('uploads/category2/'.$filename));

            $data['category2_image'] = $filename;
        }

        if($request->input('category2_id') != '') {
            // update
            DB::table('category2')
                ->where('category2_id', $request->input('category2_id'))
                ->update($data);
        } else {
            // insert
            $data['category2_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('category2')->insert($data);
        }
        return redirect('backend/category2/');
    }
    // end category2

    // category3
    public function category3(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.category3.category3');
    }

    public function category3ServerProcessing() {
        $query = DB::table('category3')
            ->select('category3.category3_id', 'category1.category1_name', 'category2.category2_name', 'category3.category3_name', 'category3.category3_max_price')
            ->join('category2', 'category3.category2_id', '=', 'category2.category2_id')
            ->join('category1', 'category2.category1_id', '=', 'category1.category1_id')
            ->select('category3.category3_image', 'category3.category3_id', 'category1.category1_name', 'category2.category2_name', 'category3.category3_name', 'category3.category3_max_price')
            ->orderBy('category3.category3_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('category3_image', function($r) {
                if($r->category3_image != '') {
                    return '<img src="'.asset('public/uploads/product/'.$r->category3_image).'" width="150">';
                } else {
                    return '';
                }
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/category3/category3_add_edit/".$r->category3_id).'">Edit</a> / <a href="'.url("backend/category3/category3_delete/".$r->category3_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['category3_image', 'action'])->make(true);
    }

    public function category3AddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('category3')
            ->where('category3.category3_id', '=', $id)
            ->join('category2', 'category3.category2_id', '=', 'category2.category2_id')
            ->join('category1', 'category2.category1_id', '=', 'category1.category1_id')
            ->first();

        $data['category1'] = DB::table('category1')
            ->orderBy('category1_id', 'asc')
            ->get();

        if(!empty($data['row'])) {
            $data['category2'] = DB::table('category2')
                ->orderBy('category2_id', 'asc')
                ->where('category1_id', '=', $data['row']->category1_id)
                ->get();
        }

        return view('backend.category3.category3_add_edit', $data);
    }

    public function category3SaveUpdate(Request $request) {
        // upload file
        $data = array(
            'category2_id' => $request->input('category2_id'),
            'category3_name' => $request->input('category3_name'),
            'category3_max_price' => $request->input('category3_max_price'),
            'category3_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('category3_image')) {

            $image = $request->file('category3_image');
            $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(100, 100);
            $image_resize->save(public_path('uploads/product/'.$filename));

            $data['category3_image'] = $filename;
        }

        if($request->input('category3_id') != '') {
            // update
            DB::table('category3')
                ->where('category3_id', $request->input('category3_id'))
                ->update($data);
        } else {
            // insert
            $data['category3_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('category3')->insert($data);
        }
        return redirect('backend/category3/');
    }

    public function ajaxChangeCategory1(Request $request) {
        $rows = DB::table('category2')
            ->orderBy('category2.category2_id', 'asc')
            ->where('category2.category1_id', '=', $request->input('category1_id'))
            ->get();

        if(!empty($rows)) {
?>
            <option value="">Please Select</option>
<?php
            foreach($rows as $r) {
?>
                <option value="<?php echo $r->category2_id;?>"><?php echo $r->category2_name;?></option>
<?php
            }
        }
    }
    // end category3

    // color
    public function color(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.color.color');
    }

    public function colorServerProcessing() {
        $query = DB::table('color')
            ->orderBy('color.color_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/color/color_add_edit/".$r->color_id).'">Edit</a> / <a href="'.url("backend/color/color_delete/".$r->color_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function colorAddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('color')
            ->where('color_id', $id)
            ->first();

        return view('backend.color.color_add_edit', $data);
    }

    public function colorSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'color_name' => $request->input('color_name'),
            'color_code' => $request->input('color_code'),
            'color_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('color_image')) {

        //     $image = $request->file('color_image');
        //     $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(807, 383);
        //     $image_resize->save(public_path('uploads/color/'.$filename));

        //     $data['color_image'] = $filename;
        // }

        if($request->input('color_id') != '') {
            // update
            DB::table('color')
                ->where('color_id', $request->input('color_id'))
                ->update($data);
        } else {
            // insert
            $data['color_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('color')->insert($data);
        }
        return redirect('backend/color/');
    }
    // end color

    // brand
    public function brand(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.brand.brand');
    }

    public function brandServerProcessing() {
        $query = DB::table('brand')
            ->orderBy('brand.brand_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('brand_show', function($r) {
                $brand_show = $r->brand_show;

                if($brand_show == 'Yes') {
                    return '<input type="checkbox" id="brand_show_'.$r->brand_id.'" onclick="checkBrandShow('.$r->brand_id.');" checked>';
                } else {
                    return '<input type="checkbox" id="brand_show_'.$r->brand_id.'" onclick="checkBrandShow('.$r->brand_id.');">';
                }
            })
            ->addColumn('brand_image', function($r) {
                return '<img src="'.asset('public/uploads/product/'.$r->brand_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/brand/brand_add_edit/".$r->brand_id).'">Edit</a> / <a href="'.url("backend/brand/brand_delete/".$r->brand_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['brand_show', 'brand_image', 'action'])->make(true);
    }

    public function brandAddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('brand')
            ->where('brand_id', $id)
            ->first();

        return view('backend.brand.brand_add_edit', $data);
    }

    public function brandSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'brand_name' => $request->input('brand_name'),
            'brand_datetime_update' => date('Y-m-d H:i:s')
        );

        $i = 1;

        if($request->hasFile('brand_image')) {

            $image = $request->file('brand_image');
            $filename = date('YmdHis').$i.'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(275, 183);
            $image_resize->save(public_path('uploads/product/'.$filename));

            $data['brand_image'] = $filename;
        }

        $i++;

        if($request->hasFile('brand_image2')) {

            $image = $request->file('brand_image2');
            $filename = date('YmdHis').$i.'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(120, 30);
            $image_resize->save(public_path('uploads/product/'.$filename));

            $data['brand_image2'] = $filename;
        }

        if($request->input('brand_id') != '') {
            // update
            DB::table('brand')
                ->where('brand_id', $request->input('brand_id'))
                ->update($data);
        } else {
            // insert
            $data['brand_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('brand')->insert($data);
        }
        return redirect('backend/brand/');
    }

    public function ajaxCheckBrand(Request $request) {
        if($request->input('brand_show') == 'checked') {
            $data_check = array(
                'brand_show' => 'Yes'
            );
        } else {
            $data_check = array(
                'brand_show' => 'No'
            );
        }

        DB::table('brand')
            ->where('brand_id', '=', $request->input('brand_id'))
            ->update($data_check);
    }
    // end brand

    // product
    public function product(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.product.product');
    }

    public function productServerProcessing() {
        $query = DB::table('product')
            ->join('category3', 'product.category3_id', '=', 'category3.category3_id')
            ->join('category2', 'category3.category2_id', '=', 'category2.category2_id')
            ->join('category1', 'category2.category1_id', '=', 'category1.category1_id')
            ->join('color', 'product.color_id', '=', 'color.color_id')
            ->select('product.product_id', 'category1.category1_name', 'category2.category2_name', 'category3.category3_name', 'product.product_image', 'product.product_name', 'product.product_price', 'product.product_code', 'category3.category3_id')
            ->orderBy('product.product_sort', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('category3_checkbox_id', function($r) {
                return '<input type="checkbox" class="check_all" name="delete_product[]" value="'.$r->product_id.'">';
            })
            ->addColumn('product_image', function($r) {
                return '<img src="'.asset('public/uploads/product/'.$r->product_image).'" width="50">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/product/product_add_edit/".$r->product_id).'">Edit</a> / <a href="'.url("backend/product/product_delete/".$r->product_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a> / <a href="'.url("backend/product_photo/product_photo_add_edit/".$r->product_id).'">Photo</a>';
            })
            ->rawColumns(['category3_checkbox_id', 'product_image', 'action'])->make(true);
    }

    public function productAddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['product_id'] = $id;

        $data['row'] = DB::table('product')
            ->join('category3', 'product.category3_id', '=', 'category3.category3_id')
            ->join('category2', 'category3.category2_id', '=', 'category2.category2_id')
            ->join('category1', 'category2.category1_id', '=', 'category1.category1_id')
            ->where('product.product_id', $id)
            ->first();

        $data['category1'] = DB::table('category1')
            ->orderBy('category1_id', 'asc')
            ->get();

        if(!empty($data['row'])) {
            $data['category2'] = DB::table('category2')
                ->orderBy('category1_id', 'asc')
                ->where('category1_id', '=', $data['row']->category1_id)
                ->get();

            $data['category3'] = DB::table('category3')
                ->orderBy('category2_id', 'asc')
                ->where('category2_id', '=', $data['row']->category2_id)
                ->get();
        }

        $data['brand'] = DB::table('brand')
            ->orderBy('brand_id', 'asc')
            ->get();

        $data['photo'] = DB::table('product_photo')
            ->where('product_id', $id)
            ->orderBy('product_photo_id', 'asc')
            ->get();

        $data['color'] = DB::table('color')
            ->orderBy('color_id', 'asc')
            ->get();

        $data['group_color'] = DB::table('group_color')
            ->orderBy('group_color_id', 'asc')
            ->get();

        // -- OAT
        $data['feature_selections'] = null;
        $data['product_to_feature'] = null;
        if(!is_null($data['row'])){
            $data['feature_selections'] = DB::table('feature_selections')
                ->where([
                    ['feature_selections.category3_id', $data['row']->category3_id],
                    ['feature_selections.is_active', 1],
                ])
                ->orderBy('feature_selections.category3_id')
                ->orderBy('feature_selections.name')
                ->get();

            $data['product_to_feature'] = DB::table('product_to_feature')->where('product_id', $data['row']->product_id)->get();
        }
       
        // -- จบ OAT
        return view('backend.product.product_add_edit', $data);
    }

    public function deleteProductAll(Request $request) {
        //dd($request->input('delete_product'));

        DB::table('product')
            ->whereIn('product_id', $request->input('delete_product'))
            ->delete();

        return redirect('backend/product');
    }

    public function productSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'category3_id' => $request->input('category3_id'),
            'color_id' => $request->input('color_id'),
            'product_name' => $request->input('product_name'),
            'product_before_discount' => $request->input('product_before_discount'),
            'product_price' => $request->input('product_price'),
            'brand_id' => $request->input('brand_id'),
            'product_detail' => $request->input('product_detail'),
            'product_specificial' => $request->input('product_specificial'),
            'product_code' => $request->input('product_code'),
            'product_sort' => $request->input('product_sort'),
            'product_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->input('group_color_id') != '') {
            $data['group_color_id'] = $request->input('group_color_id');
        } else {
            $data['group_color_id'] = 0;
        }

        if($request->input('product_best_seller') == 'Yes') {
            $data['product_best_seller'] = 'Yes';
        } else {
            $data['product_best_seller'] = 'No';
        }

        if($request->hasFile('product_image')) {

            $image = $request->file('product_image');
            $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
            $image_resize = Image::make($image->getRealPath());              
            //$image_resize->resize(169, 226);
            $image_resize->save(public_path('uploads/product/'.$filename));

            $image_resize = Image::make($image->getRealPath());              
            // $image_resize->resize(434, 577);
            $image_resize->save(public_path('uploads/product_cover/'.$filename));

            $data['product_image'] = $filename;
        }

        if($request->input('product_id') != '') {
            // update
            DB::table('product')
                ->where('product_id', $request->input('product_id'))
                ->update($data);
        } else {
            // insert
            $data['product_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('product')->insert($data);
        }

        if(!empty($request->input('product_id'))) {
            $product_id = $request->input('product_id');
        } else {
            $product = DB::table('product')
                ->orderBy('product_id', 'desc')
                ->first();
            
            if(!empty($product)) {
                $product_id = $product->product_id;
            }
        }

        if(!empty($request->file('product_photo_image'))) {
            for($i=0; $i < count($request->file('product_photo_image')); $i++){
                $image = $request->file('product_photo_image')[$i];
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(419, 557);
                $img_name = date('YmdHis').$i . '.' . $image->getClientOriginalExtension();
                $image_resize->save(public_path('uploads/product/'.$img_name));

                $data_photo = array(
                    'product_id' => $product_id,
                    'product_photo_image' => $img_name,
                    'product_photo_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('product_photo')
                    ->insert($data_photo);
            }
        }

        // --OAT Product to Feature
        if(!empty($request->feature_id) && (count($request->feature_id) > 0)) {
            if($request->input('product_id') != '') {
                $product_id = $request->input('product_id');
            }else{
                $product = DB::table('product')->orderby('product_id', 'desc')->first();
                $product_id = $product->product_id;
            }
            DB::table('product_to_feature')->where('product_id', $product_id)->delete(); // ลบข้อมูลออกให้หมดแล้วเพิ่มใหม่
            for($i=0; $i < count($request->feature_id); $i++){
                if(!is_null($request->feature_id[$i])){
                    DB::table('product_to_feature')
                        ->insert([
                            'product_id' => $product_id,
                            'feature_id' => $request->feature_id[$i]
                        ]);
                }
            }
        }
        //-- จบ OAT Product to Feature

        $color_id = $request->input('color_id');

        return redirect('backend/product/');
    }

    public function ajaxChangeCategory2(Request $request) {
        $rows = DB::table('category3')
            ->orderBy('category3.category3_id', 'asc')
            ->where('category3.category2_id', '=', $request->input('category2_id'))
            ->get();

        if(!empty($rows)) {
?>
            <option value="">Please Select</option>
<?php
            foreach($rows as $r) {
?>
                <option value="<?php echo $r->category3_id;?>"><?php echo $r->category3_name;?></option>
<?php
            }
        }
    }

    //-- OAT เพิ่ม
    public function ajaxChangeCategory3(Request $request) 
    {
        $feature_selections = DB::table('feature_selections')
            ->where([
                ['feature_selections.category3_id', $request->category3_id],
                ['feature_selections.is_active', 1],
            ])
            ->orderBy('feature_selections.category3_id')
            ->orderBy('feature_selections.name')
            ->get();

        $html = '
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Feature
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">';

                foreach($feature_selections as $key_selection => $feature_selection){  
                    $feature = DB::table('features')
                        ->where([
                            ['feature_selection_id', $feature_selection->id],
                            ['is_active', 1]
                        ])
                        ->orderBy('name')
                        ->get();
                    $html .=  '
                                <div class="form-group">
                                    <label class="col-md-3 control-label">'.$feature_selection->name.'</label>
                                    <div class="col-md-3">
                                        <select name="feature_id[]" class="form-control">
                                            <option value="">Please Select</option>';
                                            foreach($feature as $feature){
                                                $html .=  '<option value="'.$feature->id.'">'.$feature->name.'</option>';
                                            }
                    $html .=    '       
                                        </select>
                                    </div>
                                </div>';
                }
                    
        $html .= '
                </div>
            </div>
        ';
        
        return $html;
        
    }
    //-- จบ OAT เพิ่ม


    // end product

    // keyword_product
    public function keyword_product(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.keyword_product.keyword_product');
    }

    public function keyword_productServerProcessing() {
        $query = DB::table('keyword_product')
            ->orderBy('keyword_product.keyword_product_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/keyword_product/keyword_product_add_edit/".$r->keyword_product_id).'">Edit</a> / <a href="'.url("backend/keyword_product/keyword_product_delete/".$r->keyword_product_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function keyword_productAddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('keyword_product')
            ->where('keyword_product_id', $id)
            ->first();

        return view('backend.keyword_product.keyword_product_add_edit', $data);
    }

    public function keyword_productSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'keyword_product_keyword' => $request->input('keyword_product_keyword'),
            'keyword_product_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('keyword_product_image')) {

        //     $image = $request->file('keyword_product_image');
        //     $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(807, 383);
        //     $image_resize->save(public_path('uploads/keyword_product/'.$filename));

        //     $data['keyword_product_image'] = $filename;
        // }

        if($request->input('keyword_product_id') != '') {
            // update
            DB::table('keyword_product')
                ->where('keyword_product_id', $request->input('keyword_product_id'))
                ->update($data);
        } else {
            // insert
            $data['keyword_product_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('keyword_product')->insert($data);
        }
        return redirect('backend/keyword_product/');
    }
    // end keyword_product

    // product_photo
    public function product_photo(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.product_photo.product_photo');
    }

    public function product_photoServerProcessing() {
        $query = DB::table('product')
            ->join('color', 'product.color_id', '=', 'color.color_id')
            ->orderBy('product.product_id', 'asc')
            ->get();
        
        return \DataTables::of($query)
            ->addColumn('action', function($r) {
                $checkPhoto = DB::table('product_photo')
                    ->where('product_id', '=', $r->product_id)
                    ->get();
                if(!empty($checkPhoto) and count($checkPhoto) > 0) {
                    return '<a href="'.url("backend/product_photo/product_photo_add_edit/".$r->product_id).'">Edit</a> -> <span style="color: red;">Update Photo ('.count($checkPhoto).')</span>';
                } else {
                    return '<a href="'.url("backend/product_photo/product_photo_add_edit/".$r->product_id).'">Edit</a>';   
                }
            })
            ->rawColumns(['action'])->make(true);
    }

    public function product_photoAddEdit(Request $request, $product_id) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['product_id'] = $product_id;

        $data['rows'] = DB::table('product_photo')
            ->where('product_id', $product_id)
            ->orderBy('product_photo_id', 'asc')
            ->get();

        return view('backend.product_photo.product_photo_add_edit', $data);
        // return view('backend.product_photo.product_photo_add_edit', $data);
    }

    public function product_photoSaveUpdate(Request $request) {
        // upload file
        if(!empty($request->file('product_photo_image'))) {
            for($i=0; $i < count($request->file('product_photo_image')); $i++){
                $image = $request->file('product_photo_image')[$i];
                $image_resize = Image::make($image->getRealPath());              
                // $image_resize->resize(434, 577);
                $img_name = date('YmdHis').$i . '.' . $image->getClientOriginalExtension();
                $image_resize->save(public_path('uploads/product/'.$img_name));

                $data_photo = array(
                    'product_id' => $request->input('product_id'),
                    'product_photo_image' => $img_name,
                    'product_photo_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('product_photo')
                    ->insert($data_photo);
            }
        }

        // return redirect('backend/product_photo/');

        return redirect('backend/product/');
    }
    // end product_photo

    // group_color
    public function group_color(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.group_color.group_color');
    }

    public function group_colorServerProcessing() {
        $query = DB::table('group_color')
            ->orderBy('group_color.group_color_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/group_color/group_color_add_edit/".$r->group_color_id).'">Edit</a> / <a href="'.url("backend/group_color/group_color_delete/".$r->group_color_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function group_colorAddEdit(Request $request, $id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('group_color')
            ->where('group_color_id', $id)
            ->first();

        return view('backend.group_color.group_color_add_edit', $data);
    }

    public function group_colorSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'group_color_name' => $request->input('group_color_name'),
            'group_color_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('group_color_image')) {

        //     $image = $request->file('group_color_image');
        //     $filename = date('YmdHis').'.'.$image->getClientOriginalExtension();
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(807, 383);
        //     $image_resize->save(public_path('uploads/group_color/'.$filename));

        //     $data['group_color_image'] = $filename;
        // }

        if($request->input('group_color_id') != '') {
            // update
            DB::table('group_color')
                ->where('group_color_id', $request->input('group_color_id'))
                ->update($data);
        } else {
            // insert
            $data['group_color_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('group_color')->insert($data);
        }
        return redirect('backend/group_color/');
    }
    // end group_color

    public function delete_all() {
        DB::table('product')->truncate();

        return redirect('backend/product');
    }
}