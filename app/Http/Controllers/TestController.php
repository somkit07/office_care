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

class TestController extends Controller implements HasImagesContract
{
    use HasImages;

    // ford
    public function test_function(Request $request) {
        require_once ROOT . '/helpers.php';

        dd(abc());
    }
}