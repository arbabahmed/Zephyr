<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/select2.full.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('js/icheck.min.js') }}"></script>

<script src="{{ asset('js/jquery.inputmask.js') }}"></script>

<script src="{{ asset('js/jquery.inputmask.extensions.js') }}"></script>

<script src="{{ asset('js/bootstrap-colorpicker.min.js') }}"></script>

<!-- <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script> -->

<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@yield('footer-scripts')
<script src="{{ asset('js/script.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>