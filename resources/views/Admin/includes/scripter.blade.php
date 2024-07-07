
<!-- Vendor -->
<script src="{{URL::asset('Admin_assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/feather-icons/feather.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{URL::asset('Admin_assets/libs/morris.js06/morris.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/raphael/raphael.min.js')}}"></script>

<!-- Init js -->
<script src="{{URL::asset('Admin_assets/js/pages/chartjs.init.js')}}"></script>
<script src="{{URL::asset('Admin_assets/js/pages/morris.init.js')}}"></script>

<!-- App js -->
<script src="{{URL::asset('Admin_assets/js/app.min.js')}}"></script>

<!-- knob plugin -->
<script src="{{URL::asset('Admin_assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

<!-- Dashboar init js-->
<script src="{{URL::asset('Admin_assets/js/pages/dashboard.init.js')}}"></script>

<!-- App js-->
<script src="{{URL::asset('Admin_assets/js/pages/datatables.init.js')}}"></script>

<!-- third party js -->
<script src="{{URL::asset('Admin_assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<!-- third party js ends -->

<!-- Plugins js -->
<script src="{{URL::asset('Admin_assets/libs/dropzone/min/dropzone.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/dropify/js/dropify.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/tippy.js/tippy.all.min.js')}}"></script>
<!-- <script src="assets/libs/tippy.js/tippy.all.min.js"></script> -->

<script src="{{URL::asset('Admin_assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/multiselect/js/jquery.multi-select.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/select2/js/select2.min.js')}}"></script>
{{-- <script src="{{URL::asset('Admin_assets/libs/jquery-mockjax/jquery.mockjax.min.js')}}"></script> --}}
<script src="{{URL::asset('Admin_assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{URL::asset('Admin_assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<!-- Init js-->
<script src="{{URL::asset('Admin_assets/js/pages/form-advanced.init.js')}}"></script>


<!-- Init js-->
<script src="{{URL::asset('Admin_assets/js/pages/form-fileuploads.init.js')}}"></script>

<!-- Toaster Js -->
<script src="{{ URL::asset('Admin_assets/libs/toastr/build/toastr.min.js') }}"></script>

<!-- Common Delete And Status Change Js -->
<script src="{{ URL::asset('Admin_assets/js/common.js') }}"></script>

<!-- Validation Js -->
<script src="{{ URL::asset('Admin_assets/libs/validation/validate.min.js') }}"></script>

<!-- Summernote Js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> 
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js" integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<!-- Base Url -->
<script>
    var base_url = "{{ url('/') }}";
</script>


<!-- Toaster Cede --> 
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
    }

    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif

    @if(Session::has('info'))
    toastr.info("{{ Session::get('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.warning("{{ Session::get('warning') }}");
    @endif

    @if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif
</script>

<script>
    function success_toast(title = '', message = '') {
        toastr.success(message);
    }

    function error_toast(title = '', message = '') {
        toastr.error(message);
    }
</script>

@yield('script')