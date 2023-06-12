<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\DataTables;
use Illuminate\Database\Eloquent\Model;

class AuthenController extends Controller {

    // user
    public function user(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.user.user');
    }

    public function userServerProcessing() {
        $query = DB::table('user')
            ->join('department', 'user.department_id', '=', 'department.department_id')
            ->orderBy('user.user_id', 'asc')
            ->select('department.department_name', 'user.user_email', 'user.user_name', 'user.user_username', 'user.user_password', 'user.user_activated', 'user.user_id');
        
        return \DataTables::of($query)
            ->addColumn('activated', function($r) {
                if($r->user_activated == 1) {
                    return 'Enable';
                } else {
                    return 'Disable';
                }
            }) 
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/user/user_add_edit/".$r->user_id).'">Edit</a> / <a href="'.url("backend/user/user_delete/".$r->user_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->make(true);
    }

    public function userAddEdit(Request $request, $user_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $user = DB::table('user')
            ->where('user_id', $user_id)
            ->first();

        $department = DB::table('department')
            ->get();

        return view('backend.user.user_add_edit', ['row' => $user, 'department' => $department]);
    }

    public function userSaveUpdate(Request $request) {
        if($request->input('user_id') != '') {
            // update
            DB::table('user')
                ->where('user_id', $request->input('user_id'))
                ->update(array(
                    'department_id' => $request->input('department_id'), 
                    'user_email' => $request->input('user_email'),
                    'user_name' => $request->input('user_name'),
                    'user_username' => $request->input('user_username'),
                    'user_password' => $request->input('user_password'),
                    'user_activated' => $request->input('user_activated'),
                    'user_datetime_update' => date('Y-m-d H:i:s'),
                    'user_ip_update' => $_SERVER['REMOTE_ADDR']
                ));
        } else {
            // insert
            DB::table('user')->insert(
                array(
                    'department_id' => $request->input('department_id'), 
                    'user_email' => $request->input('user_email'),
                    'user_name' => $request->input('user_name'),
                    'user_username' => $request->input('user_username'),
                    'user_password' => $request->input('user_password'),
                    'user_activated' => $request->input('user_activated'),
                    'user_datetime_create' => date('Y-m-d H:i:s'),
                    'user_ip_create' => $_SERVER['REMOTE_ADDR'],
                    'user_datetime_update' => date('Y-m-d H:i:s'),
                    'user_ip_update' => $_SERVER['REMOTE_ADDR']
                )
            );
        }
        return view('backend/user/user');
    }
    // end user

    // department
    public function department(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.department.department');
    }

    public function departmentServerProcessing() {
        $query = DB::table('department')
            ->orderBy('department.department_id', 'asc')
            ->get();
        
        return \DataTables::of($query)
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/department/department_add_edit/".$r->department_id).'">Edit</a> / <a href="'.url("backend/department/department_delete/".$r->department_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->make(true);
    }

    public function departmentAddEdit(Request $request, $department_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $department = DB::table('department')
            ->where('department_id', $department_id)
            ->first();

        return view('backend.department.department_add_edit', ['row' => $department, 'department' => $department]);
    }

    public function departmentSaveUpdate(Request $request) {
        if($request->input('department_id') != '') {
            // update
            DB::table('department')
                ->where('department_id', $request->input('department_id'))
                ->update(array(
                    //'department_id' => $request->input('department_id'), 
                    'department_name' => $request->input('department_name'),
                    //'department_datetime_update' => date('Y-m-d H:i:s'),
                    //'department_ip_update' => $_SERVER['REMOTE_ADDR']
                ));
        } else {
            // insert
            DB::table('department')->insert(
                array(
                    //'department_id' => $request->input('department_id'), 
                    'department_name' => $request->input('department_name'),
                    //'department_datetime_create' => date('Y-m-d H:i:s'),
                    //'department_ip_create' => $_SERVER['REMOTE_ADDR'],
                    //'department_datetime_update' => date('Y-m-d H:i:s'),
                    //'department_ip_update' => $_SERVER['REMOTE_ADDR']
                )
            );
        }
        return view('backend/department/department');
    }
    // end department
}