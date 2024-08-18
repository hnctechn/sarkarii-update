<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Latest_job;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Str;

class LatestJobController extends Controller
{
    public function index(){
        return view('Admin.Latest-jobs.latest-job');
    }
    
    public function create(){
        return view('Admin.Latest-jobs.add-latest-job');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $input['title'] = $request->title;
        $input['slug_url'] = Str::slug($request->title , "-");
        $input['description'] = $request->description;

        if(!empty($request->id)){
            $input['modified_by'] = Auth::user()->id;
            $input['modified_ip_address'] = $request->ip();
            Latest_job::find($request->id)->update($input);
            return redirect('admin/latest-job')->with('success', 'Job Updated Successfully!');
        } else {
            $input['created_by'] = Auth::user()->id;
            $input['created_ip_address'] = $request->ip();
            Latest_job::create($input);
            return redirect('admin/latest-job')->with('success', 'Job Created Successfully!');
        }
    }

    public function data_table(Request $request){
        $jobs = Latest_job::where('status', '!=', 'delete')->get();

        if ($request->ajax()) {
            return DataTables::of($jobs)
                ->addIndexColumn()
                ->addColumn('title', function ($row) {
                    return !empty($row->title) ? $row->title : '';
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == 'active') {
                        $status = '<a href="javascript:void(0);"  data-id="'.$row->id.'" data-action="active_inactive" data-table="latest_jobs" data-flash="Status Changed Successfully!"  class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title=""></i></a>';
                    } else {
                        $status = '<a href="javascript:void(0);"  data-id="'.$row->id.'" data-action="active_inactive" data-table="latest_jobs" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title=""></></a>';
                    }
                    return $status;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<div><a href="' . url('admin/latest-job/edit/' . $row->id) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn btn-success" title="Edit"><i class="mdi mdi-pencil"></i></button></a>
                                <a href="javascript:void(0);" data-id="'.$row->id.'" data-action="delete" data-table="latest_jobs" data-flash="Job Deleted Successfully !" class="tabledit-delete-button btn btn-danger delete-record" title="Delete"><i class="mdi mdi-trash-can"></i></a></div>';
                    
                    return $actionBtn;
                })

                ->rawColumns(['action', 'status'])
                ->make(true);
        }
    }

    public function edit($id){
        $job = Latest_job::where('status', '!=', 'delete')->where('id', $id)->first();
        if(empty($job)){
            return redirect('admin/404');
        }
        return view('Admin.Latest-jobs.add-latest-job', compact('job'));
    }
}
