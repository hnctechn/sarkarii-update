<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admit_card;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class AdmitCardController extends Controller
{
    public function index(){
        return view('Admin.Admit-cards.admit-card');
    }
    
    public function create(){
        return view('Admin.Admit-cards.add-admit-card');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $input['title'] = $request->title;
        $input['description'] = $request->description;

        if(!empty($request->id)){
            $input['modified_by'] = Auth::user()->id;
            $input['modified_ip_address'] = $request->ip();
            Admit_card::find($request->id)->update($input);
            return redirect('admin/admit-card')->with('success', 'Admit Card Updated Successfully!');
        } else {
            $input['created_by'] = Auth::user()->id;
            $input['created_ip_address'] = $request->ip();
            Admit_card::create($input);
            return redirect('admin/admit-card')->with('success', 'Admit Card Created Successfully!');
        }
    }

    public function data_table(Request $request){
        $admit_cards = Admit_card::where('status', '!=', 'delete')->get();

        if ($request->ajax()) {
            return DataTables::of($admit_cards)
                ->addIndexColumn()
                ->addColumn('title', function ($row) {
                    return !empty($row->title) ? $row->title : '';
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == 'active') {
                        $status = '<a href="javascript:void(0);"  data-id="'.$row->id.'" data-action="active_inactive" data-table="admit_cards" data-flash="Status Changed Successfully!"  class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title=""></i></a>';
                    } else {
                        $status = '<a href="javascript:void(0);"  data-id="'.$row->id.'" data-action="active_inactive" data-table="admit_cards" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title=""></></a>';
                    }
                    return $status;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<div><a href="' . url('admin/admit-card/edit/' . $row->id) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn btn-success" title="Edit"><i class="mdi mdi-pencil"></i></button></a>
                                <a href="javascript:void(0);" data-id="'.$row->id.'" data-action="delete" data-table="admit_cards" data-flash="Admit Card Deleted Successfully !" class="tabledit-delete-button btn btn-danger delete-record" title="Delete"><i class="mdi mdi-trash-can"></i></a></div>';
                    
                    return $actionBtn;
                })

                ->rawColumns(['action', 'status'])
                ->make(true);
        }
    }

    public function edit($id){
        $admit_card = Admit_card::where('status', '!=', 'delete')->where('id', $id)->first();
        if(empty($admit_card)){
            return redirect('admin/404');
        }
        return view('Admin.Admit-cards.add-admit-card', compact('admit_card'));
    }
}
