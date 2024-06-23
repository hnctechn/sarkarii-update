@section('meta_title') Sarkari Result | SarkariResult, Sarkari Job @endsection
@extends('Admin.Layout.layout')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="mb-2 justify-content-between d-flex align-items-center">
                    <h4 class="header-title mb-2">Content Management System</h4>
                </div>
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body department-card">
                            <form action="{{ route('cms.store') }}" method="post" id="add-cms-form">
                                @csrf
                                <input type="hidden" id="id" name="id">
                                <div class="mb-2">
                                    <label for="page_name" class="form-label">Pages</label>
                                    <select class="form-select" id="page_name" name="page_name">
                                        <option value="">Select Pages</option>
                                        @foreach(config('constant.cms_pages') as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('page_name'))
                                        <span class="text-danger backend-error"> {{$errors->first('page_name')}} </span>
                                    @endif
                                </div>
                                <div class="mb-2">
                                    <label for="page_content" class="form-label">Content</label>
                                    <textarea type="text" class="form-control" id="page_content" name="page_content"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success" id="submit-btn"> Submit </button>
                                <button type="reset" class="btn btn-danger"> Cancel </button>
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
    $(document).ready(function(){
        summerNote();
        validation();
        getPageContent();
    })

    function summerNote(){
        $('#page_content').summernote({
            placeholder: 'Enter content here',
            height: 120,
        });
    }

    function validation(){
        $("#add-cms-form").validate({
            ignore: ".note-editor *",
            debug: false,
            rules: {
                page_name: {
                    required: true,
                },
            },
            errorElement: "span",
            errorPlacement: function(error, element) {
                error.addClass("text-danger");
                error.insertAfter(element);
            },
            onkeyup: function(element) {
                $(element).valid();
            },
            onfocusout: function(element) {
                $(element).valid();
            },
        });
    }

    function getPageContent(){
        $(document).on("change", "#page_name", function(){
            $.ajax({
                type: "get",
                url: "{{ url('/admin/cms/get-page-content') }}",
                data: { 
                    page_name: $(this).val()
                },
                success: function (response) {
                    if(response.status == "true"){
                        $("#id").val(response.cms.id);
                        $("#page_content").summernote('code', response.cms.page_content);
                        $("#submit-btn").html('Update')
                    } else {
                        $("#id").val("");
                        $("#page_content").summernote('code', '');
                        $("#submit-btn").html('Submit')
                    } 
                }
            });
        })
    }
</script>
@endsection