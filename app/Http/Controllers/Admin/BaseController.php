<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class BaseController extends Controller
{
    public function change_status(Request $request){
        $status = DB::table($request->table)->where('id', $request->id)->value('status');
        if($request->action == "active_inactive"){
            $status = $status == "active" ? "inactive" : "active";
        } else {
            $status = "delete";
        }
        $data = DB::table($request->table)->where('id', $request->id)->update([
            'status' => $status,
            'modified_by' => Auth::user()->id,
            'modified_ip_address' => $_SERVER['REMOTE_ADDR']
        ]);
        return response()->json(['status' => true, 'message' => $request->flash, 'user_status' => $status], 200);
    }
}
