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
use Excel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class ImportExcelController extends Controller implements HasImagesContract
{
    use HasImages;

    // import_excel
    public function import_excel(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.import_excel.import_excel');
    }

    public function import_excelSaveUpdate(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_product']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_product']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();


                $i = 0;

                $error = false;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
                					'product.product_sort' => $val_
                				);
                			}

                			if($j == 1) {
                                $check_category3_id = DB::table('category3')
                                    ->where('category3_id', '=', $val_)
                                    ->first();

                                // dd($check_category3_id);

                                if(!empty($check_category3_id)) {
                                    $data_excel['product.category3_id'] = $val_;
                                } else {
                                    if($val_ != '') {
                                        $error = true;

                                        echo 'Error: ไม่มีรหัสหมวดหมู่ Id: '.$val_;
                                        exit;
                                    }
                                }
                			}

                			if($j == 2) {
                                $check_brand_id = DB::table('brand')
                                    ->where('brand_id', '=', $val_)
                                    ->first();

                                if(!empty($check_brand_id)) {
                                    $data_excel['product.brand_id'] = $val_;
                                } else {
                                    if($val_ != '') {
                                        $error = true;

                                        echo 'Error: ไม่มีรหัส Brand Id: '.$val_;
                                        exit;
                                    }
                                }
                			}

                			if($j == 3) {
                                $check_color_id = DB::table('color')
                                    ->where('color_id', '=', $val_)
                                    ->first();

                                if(!empty($check_color_id)) {
                                    $data_excel['product.color_id'] = $val_;
                                } else {
                                    if($val_ != '') {
                                        $error = true;

                                        echo 'Error: ไม่มีรหัส Color Id: '.$val_;
                                        exit;
                                    }
                                }
                				
                			}

                			if($j == 4) {
                				$data_excel['product.product_name'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['product.product_detail'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['product.product_specificial'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['product.product_best_seller'] = $val_;
                			}

                			if($j == 8) {
                				$data_excel['product.product_before_discount'] = $val_;
                			}

                            if($j == 9) {
                				$data_excel['product.product_price'] = $val_;
                			}

                			if($j == 10) {
                				$data_excel['product.product_code'] = $val_;
                                $data_excel['product_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['product_datetime_update'] = date('Y-m-d H:i:s');

                                if($val_ != '') {
                                    DB::table('product')
                                        ->insert($data_excel);
                                }
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }
            }
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel').'";</script>';
        }

        if($error == false) {
            return redirect(url('backend/import_excel'));
        }
    }
    // end import_excel
}