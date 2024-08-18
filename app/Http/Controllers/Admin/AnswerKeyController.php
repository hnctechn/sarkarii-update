<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer_key;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Str;

class AnswerKeyController extends Controller
{
    public function index(){
        return view('Admin.Answer-key.answer-key');
    }
    
    public function create(){
        return view('Admin.Answer-key.add-answer-key');
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
            Answer_key::find($request->id)->update($input);
            return redirect('admin/answer-key')->with('success', 'Answer Key Updated Successfully!');
        } else {
            $input['created_by'] = Auth::user()->id;
            $input['created_ip_address'] = $request->ip();
            Answer_key::create($input);
            return redirect('admin/answer-key')->with('success', 'Answer Key Created Successfully!');
        }
    }

    public function data_table(Request $request){
        $answer_keys = Answer_key::where('status', '!=', 'delete')->get();

        if ($request->ajax()) {
            return DataTables::of($answer_keys)
                ->addIndexColumn()
                ->addColumn('title', function ($row) {
                    return !empty($row->title) ? $row->title : '';
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == 'active') {
                        $status = '<a href="javascript:void(0);"  data-id="'.$row->id.'" data-action="active_inactive" data-table="answer_keys" data-flash="Status Changed Successfully!"  class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title=""></i></a>';
                    } else {
                        $status = '<a href="javascript:void(0);"  data-id="'.$row->id.'" data-action="active_inactive" data-table="answer_keys" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title=""></></a>';
                    }
                    return $status;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<div><a href="' . url('admin/answer-key/edit/' . $row->id) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn btn-success" title="Edit"><i class="mdi mdi-pencil"></i></button></a>
                                <a href="javascript:void(0);" data-id="'.$row->id.'" data-action="delete" data-table="answer_keys" data-flash="Answer Key Deleted Successfully !" class="tabledit-delete-button btn btn-danger delete-record" title="Delete"><i class="mdi mdi-trash-can"></i></a></div>';
                    
                    return $actionBtn;
                })

                ->rawColumns(['action', 'status'])
                ->make(true);
        }
    }

    public function edit($id){
        $answer_key = Answer_key::where('status', '!=', 'delete')->where('id', $id)->first();
        if(empty($answer_key)){
            return redirect('admin/404');
        }
        return view('Admin.Answer-key.add-answer-key', compact('answer_key'));
    }
}
