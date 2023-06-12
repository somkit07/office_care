<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DataTables;

class FeatureController extends Controller
{
    public function feature()
    {
        $data['category3'] = DB::table('category3')
            ->orderBy('category2_id')
            ->orderBy('category3_name')
            ->get();

        return view('backend.feature.feature_index', $data);
    }

    public function featureSectionsServerProcessing() 
    {
        $query = DB::table('feature_selections')
            ->leftJoin('category3', 'category3.category3_id', 'feature_selections.category3_id')
            ->select('feature_selections.id as id', 'category3_name as category3_name', 'feature_selections.name as name')
            ->where('feature_selections.is_active', 1)
            ->orderBy('feature_selections.id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/feature/featuresections/".$r->id).'">Edit</a> / 
                        <button type="button" class="btn btn-link btn_delete" rel="'.$r->id.'">Delete</button>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function featureSections($id)
    {
        $data['feature_selection'] = DB::table('feature_selections')
            ->where([
                ['id', $id],
                ['is_active', 1]
            ])
            ->first();

        $data['category3'] = DB::table('category3')
            ->orderBy('category2_id')
            ->orderBy('category3_name')
            ->get();

        return view('backend.feature.feature_section', $data);
    }

    public function featureSections_edit($id)
    { 
        DB::beginTransaction();
        try {
            $feature_selection = DB::table('feature_selections')
                ->where([
                    ['id', $id],
                    ['is_active', 1]
                ])
                ->first();

            DB::commit();
            $status = 200;
        } catch (\Exception $e) {
            $status = 500;
            DB::rollback();
        }

        return response()->json([
            'status' => $status,
            'feature_selection' => $feature_selection,
        ]);
    }

    public function featureSections_update(Request $request)
    {
        DB::beginTransaction();
        try {
            $cat3 = DB::table('category3')->where('category3_id', $request->category3_id)->first(); // หา id Categrory 2
            if(!empty($request->fselection_id)){
                DB::table('feature_selections')->where('id', $request->fselection_id)
                    ->update([
                        'name' => $request->featuresection_name,
                        'category2_id' => $cat3->category2_id,
                        'category3_id' => $request->category3_id,
                        'updated_by' => $request->session()->has('user_id'),
                        'updated_at' => date("Y-m-d H:i:s")
                    ]);
            }else{
                DB::table('feature_selections')
                    ->insert([
                        'name' => $request->featuresection_name,
                        'category2_id' => $cat3->category2_id,
                        'category3_id' => $request->category3_id,
                        'created_by' => $request->session()->has('user_id'),
                        'created_at' => date("Y-m-d H:i:s"),
                        'updated_at' => date("Y-m-d H:i:s")
                    ]);
            }

            DB::commit();
            $status = 200;
        } catch (\Exception $e) {
            $status = 500;
            DB::rollback();
        }

        return response()->json([
            'status' => $status,
            'message' => "Success",
        ]);
    }

    public function featureSections_delete(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $feature_selection = DB::table('feature_selections')
                ->where('id', $id)
                ->update([
                    'is_active' => 0, //-- เปลี่ยนเป็นสถานะไม่แสดง (ลบ)
                    'updated_by' => $request->session()->has('user_id'),
                    'updated_at' => date("Y-m-d H:i:s")
                ]);

            DB::commit();
            $status = 200;
            $message = "Success";
        } catch (\Exception $e) {
            $status = 500;
            $message = "Error";
            DB::rollback();
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
        ]);
    }

    public function featureServerProcessing($id) 
    {
        $query = DB::table('features')
            ->leftJoin('feature_selections', 'feature_selections.id', 'features.feature_selection_id')
            ->select('features.id as id', 'features.name as name')
            ->where([
                ['features.feature_selection_id', $id],
                ['features.is_active', 1]
            ])
            ->orderBy('feature_selections.id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('action', function($r) {
                return '<button type="button" class="btn btn-link btn_edit" rel="'.$r->id.'">Edit</button> / 
                        <button type="button" class="btn btn-link btn_delete" rel="'.$r->id.'">Delete</button>';
            })
            ->rawColumns(['action'])->make(true);
    }


    public function feature_edit($id)
    {
        DB::beginTransaction();
        try {
            $feature = DB::table('features')
                ->where([
                    ['id', $id],
                    ['is_active', 1]
                ])
                ->first();

            DB::commit();
            $status = 200;
        } catch (\Exception $e) {
            $status = 500;
            DB::rollback();
        }

        return response()->json([
            'status' => $status,
            'feature' => $feature,
        ]);
    }

    public function feature_update(Request $request)
    {
        DB::beginTransaction();
        try {
            if(!empty($request->feature_id)){
                DB::table('features')->where('id', $request->feature_id)
                    ->update([
                        'name' => $request->feature_name,
                        'updated_by' => $request->session()->has('user_id'),
                        'updated_at' => date("Y-m-d H:i:s")
                    ]);
            }else{
                DB::table('features')
                    ->insert([
                        'feature_selection_id' => $request->feature_selection_id,
                        'name' => $request->feature_name,
                        'created_by' => $request->session()->has('user_id'),
                        'created_at' => date("Y-m-d H:i:s"),
                        'updated_at' => date("Y-m-d H:i:s")
                    ]);
            }
            DB::commit();
            $status = 200;
        } catch (\Exception $e) {
            $status = 500;
            DB::rollback();
        }

        return response()->json([
            'status' => $status,
            'message' => "Success",
        ]);
    }

    public function feature_delete(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $feature_selection = DB::table('features')
                ->where('id', $id)
                ->update([
                    'is_active' => 0, //-- เปลี่ยนเป็นสถานะไม่แสดง (ลบ)
                    'updated_by' => $request->session()->has('user_id'),
                    'updated_at' => date("Y-m-d H:i:s")
                ]);

            DB::commit();
            $status = 200;
            $message = "Success";
        } catch (\Exception $e) {
            $status = 500;
            $message = "Error";
            DB::rollback();
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
        ]);
    }

}
