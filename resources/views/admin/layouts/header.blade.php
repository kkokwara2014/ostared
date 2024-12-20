<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = {
            csrfToken: '{{ csrf_token() }}'
        }
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bootstrap_assets/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bootstrap_assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bootstrap_assets/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bootstrap_assets/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap_assets/assets/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/css/style.css') }}">
    <!-- endinject -->
    {{-- <link rel="shortcut icon" href="{{ asset('bootstrap_assets/assets/images/favicon.png') }}" /> --}}
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/datatables/css/dataTables.bootstrap.min.css') }}">


</head>
