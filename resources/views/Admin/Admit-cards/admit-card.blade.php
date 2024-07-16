@section('meta_title') Admit Card | SarkariUpdate, Sarkari Job @endsection
@extends('Admin.Layout.layout')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2 justify-content-between d-flex align-items-center">
                        <h4 class="mt-0 header-title">Admit Card</h4>
                        <a href="{{ url('admin/admit-card/create') }}" class="btn btn-success waves-effect waves-light add-btn" ><span class="btn-label"> <i class="fas fa-plus "></i></span>Add Admit Card</a>
                    </div>
                    <div class="card">
                        <div class="card-body table-responsive department-card">
                            <table id="project_data_table" class="table table-bordered table-bordered dt-responsiv ">
                                <thead class="table-light">
                                    <tr>
                                        <th width="10%">Sr No.</th>
                                        <th width="70%">Admit Card Title</th>
                                        <th width="10%">Status</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ URL::asset('Admin_assets/controller_js/cn_admit_card.js')}}"></script>
@endsection