<meta charset="utf-8" />
<title>@yield('meta_title')</title>
<meta content="" name="description" />
<meta content="" name="author" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- App favicon -->
<link rel="shortcut icon" href="images/favicon.png">

<!-- third party css -->
<link href="{{URL::asset('Admin_assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('Admin_assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('Admin_assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('Admin_assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Plugins css -->
<link href="{{URL::asset('Admin_assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('Admin_assets/libs/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('Admin_assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('Admin_assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('Admin_assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
<!-- third party css end -->

<!-- App css -->
<link href="{{URL::asset('Admin_assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
<link href="{{URL::asset('Admin_assets/css/style.css')}}" rel="stylesheet" type="text/css" id="style" />
<link href="{{URL::asset('Admin_assets/css/common.css')}}" rel="stylesheet" type="text/css" id="style" />

<!-- icons -->
<link href="{{URL::asset('Admin_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Plugins css -->
<link href="{{URL::asset('Admin_assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('Admin_assets/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Toastr Css -->
<link rel="stylesheet" href="{{URL::asset('Admin_assets/libs/toastr/build/toastr.min.css')}}" />

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet"> 
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

<!-- Animate Css -->
<link rel="stylesheet" href="{{URL::asset('Admin_assets/libs/animate/animate.min.css')}}" />

<!-- Custom Css -->
@yield('style')