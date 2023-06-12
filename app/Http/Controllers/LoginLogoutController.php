<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\DataTables;
use Illuminate\Database\Eloquent\Model;

class LoginLogoutController extends Controller {

    public function login() {

        return view('backend.login.login');
    }

    public function ajaxLogin(Request $request) {
        $user = DB::table('user')
            ->join('department', 'user.department_id', '=', 'department.department_id')
            ->where('user.user_username', $request->input('username'))
            ->where('user.user_password', $request->input('password'))
            ->where('user.user_activated', 1)
            ->first();

        if(!empty($user)) {
            session([
                'user_id' => $user->user_id,
                'user_name' => $user->user_name,
                'department_id' => $user->department_id,
                'department_name' => $user->department_name
            ]);

            echo 'true';
        } else {
            echo 'false';
        }
    }

    public function logout(Request $request) {
        $request->session()->forget('user_id');
        $request->session()->forget('user_name');
        $request->session()->forget('department_id');
        $request->session()->forget('department_name');

        $request->session()->forget('agent_id');

        return redirect('backend/login');
    }

    // Test Model
    public function testModel() {
        $department = \App\Models\Department::all();
        
        foreach($department as $r) {
            echo $r->department_name;
        }
    }
    // End Test Model
}