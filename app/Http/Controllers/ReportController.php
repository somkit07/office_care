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

class ReportController extends Controller implements HasImagesContract
{
    use HasImages;

    // report
    public function sale_report(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['rows'] = DB::table('order')
            ->join('order_detail', 'order.order_id', '=', 'order_detail.order_id')
            ->orderBy('order.order_id', 'asc')
            ->get();

        return view('backend.report.sale_report', $data);
    }

    public function member_report(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['rows'] = DB::table('member')
            ->orderBy('member_id', 'asc')
            ->get();

        return view('backend.report.member_report', $data);
    }
    // end report
}