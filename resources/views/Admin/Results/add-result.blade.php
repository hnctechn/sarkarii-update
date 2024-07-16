@section('meta_title') {{ !empty($result) ? 'Edit' : 'Add' }} Result | SarkariUpdate, Sarkari Job @endsection
@extends('Admin.Layout.layout')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2 justify-content-between d-flex align-items-center">
                        <h4 class="header-title ">{{ !empty($result) ? 'Edit' : 'Add' }} Result</h4>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary waves-effect waves-light add-btn"><span class="btn-label"> <i class="fas fa-long-arrow-alt-left"></i></span>Back</a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('result.store') }}" method="post" enctype="multipart/form-data" id="add-result-form">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{ !empty($result->id) ? $result->id : '' }}">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="title" class="form-label"> Result Title <b class="text-danger">*</b> </label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ !empty($result->title) ? $result->title : old('title') }}">
                                        @if($errors->has('title'))
                                            <span class="text-danger backend-error"> {{$errors->first('title')}} </span>
                                        @endif
                                    </div>
                                    <div class="mb-2 col-12">
                                        <label for="description" class="form-label">Result Description <b class="text-danger">*</b> </label>
                                        <textarea class="form-control" id="description" name="description" rows="5">{{ !empty($result->description) ? $result->description : old('description') }}</textarea>
                                        @if($errors->has('description'))
                                            <span class="text-danger backend-error"> {{$errors->first('description')}} </span>
                                        @endif
                                        <span class="frontend-error"></span>
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit" id="submit-btn"> {{ !empty($result) ? 'Update' : 'Submit' }} </button>
                                @if(empty($result)) <button class="btn btn-danger" type="reset"> Cancel </button> @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(".result").addClass("menuitem-active");
    $(".result a").addClass("active");
</script>

<script>
    $(document).ready(function(){
        summerNote();
        Validation();
    });
    
    function summerNote(){
        $('#description').summernote({
            required: true,
            placeholder: 'Enter content here',
            height: 400,
        });
    }

    function Validation(){
        $("#add-result-form").validate({
            ignore: ".note-editor *",
            debug: false,
            rules: {
                title: {
                    required: true,
                },
                description: {
                    required: true,
                },
            },
            errorElement: "span",
            errorPlacement: function(error, element) {
                error.addClass("text-danger");
                if(element.attr("name") === "description"){
                    error.insertAfter($(".frontend-error"));
                } else {
                    error.insertAfter(element);
                }
            },
            onkeyup: function(element) {
                $(element).valid();
            },
            onfocusout: function(element) {
                $(element).valid();
            },
        });
    }
</script>
@endsection