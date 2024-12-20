<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">OSTARED - Powered
            by Done-Right Systems - 08038883919
        </span>
        <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright ©
            {{ date('Y') }}. All
            rights reserved.</span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('bootstrap_assets/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('bootstrap_assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('bootstrap_assets/assets/vendors/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('bootstrap_assets/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('bootstrap_assets/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('bootstrap_assets/assets/js/template.js') }}"></script>
<script src="{{ asset('bootstrap_assets/assets/js/settings.js') }}"></script>
<script src="{{ asset('bootstrap_assets/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('bootstrap_assets/assets/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('bootstrap_assets/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('bootstrap_assets/assets/js/dashboard.js') }}"></script>
<!-- <script src="asset('bootstrap_assets/assets/js/Chart.roundedBarCharts.js"></script> -->
<!-- End custom js for this page-->

<!-- DataTables -->
<script src="{{ asset('bootstrap_assets/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bootstrap_assets/datatables/js/dataTables.bootstrap.min.js') }}"></script>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);

    // for datatables
    $('#example1').DataTable({
        'sort': false,
    });
</script>

{{--  printing area  --}}
<script src="{{ asset('bootstrap_assets/js/jquery.printPage.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.btnprnt').printPage();
    });
</script>
</body>

</html>
