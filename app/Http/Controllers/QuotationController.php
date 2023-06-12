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

class QuotationController extends Controller implements HasImagesContract
{
    use HasImages;

    // quotation
    public function quotation(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.quotation.quotation');
    }

    public function quotationServerProcessing() {
        $query = DB::table('quotation')
            ->orderBy('quotation.quotation_id', 'asc');
        
        return \DataTables::of($query)
            ->make(true);
    }
    // end quotation
}