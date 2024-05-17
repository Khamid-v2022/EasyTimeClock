<script src="{{asset('assets/vendor/bootstrap-5.3.3/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-3.7.1.min.js')}}"></script>

<script src="{{asset('assets/vendor/select2/select2.js')}}"></script>

<script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.js') }}"></script>

<script src="{{asset('assets/vendor/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/flatpickr/flatpickr.js')}}"></script>

<!-- BEGIN: Page Vendor JS-->
@yield('vendor-script')
<!-- END: Page Vendor JS-->

<script src="{{asset('assets/js/global.js')}}"></script>

<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
