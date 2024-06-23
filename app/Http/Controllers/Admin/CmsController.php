<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms\Cms;
use Illuminate\Support\Facades\Auth;

class CmsController extends Controller
{
    public function index(){
        return view('Admin.CMS.cms');
    }

    public function store(Request $request){
        $request->validate([
            'page_name' => 'required',
        ]);

        $input['page_name'] = $request->page_name;
        $input['page_content'] = $request->page_content;

        if(!empty($request->id)){
            $input['modified_by'] = Auth::user()->id;
            $input['modified_ip_address'] = $request->ip();
            Cms::find($request->id)->update($input);
            return redirect('admin/cms')->with('success', 'CMS Updated Successfully');
        } else {
            $input['created_by'] = Auth::user()->id;
            $input['created_ip_address'] = $request->ip();
            Cms::create($input);
            return redirect('admin/cms')->with('success', 'CMS Created Successfully');
        }
    }

    public function get_page_content(Request $request){
        if(!empty($request->page_name)){
            $cms = Cms::where('status', 'active')->where('page_name', $request->page_name)->first();
            if(!empty($cms)){
                return response()->json(['cms' => $cms, 'status' => 'true']);
            }
            return response()->json(['status' => 'empty']);
        }
        return response()->json(['status' => 'empty']);
    }
}
