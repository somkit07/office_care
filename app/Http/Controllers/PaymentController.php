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

class PaymentController extends Controller implements HasImagesContract
{
    use HasImages;

    // payment
    public function payment(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.payment.payment');
    }

    public function paymentServerProcessing() {
        $query = DB::table('payment')
            ->orderBy('payment.payment_id', 'asc');
        
        return \DataTables::of($query)
            ->make(true);
    }
    // end payment
}