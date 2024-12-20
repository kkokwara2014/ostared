@extends('admin.layouts.main')

@section('title')
    Staff Redeployment Option
@endsection

@section('content')

    <body class="with-welcome-text">
        <div class="container-scroller">

            <!-- partial:partials/_navbar.html')}} -->
            @include('admin.layouts.navbar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html')}} -->
                @include('admin.layouts.sidebar')
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-10 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        @include('admin.messages.success')
                                        @include('admin.messages.deleted')
                                        <h4 class="card-title">@yield('title')</h4>

                                        <h5>Select any of the oprions to deploy staff to
                                            <strong>{{ $caption->name }}</strong>
                                        </h5>

                                        <br>

                                        <div>
                                            <h5><strong>Single Staff Deployment</strong> &nbsp;&nbsp; <a
                                                    href="{{ route('singlestaffdeployment', $caption) }}">Continue</a></h5>
                                        </div>
                                        <div>
                                            <h5><strong>Batch Staff Deployment</strong> &nbsp;&nbsp;<a
                                                    href="{{ route('batchstaffdeployment', $caption) }}">Continue</a></h5>
                                        </div>

                                        {{-- <form method="post" action="{{ route('makeredeploymentbasedonoption', $caption) }}"
                                            class="forms-sample">
                                            @csrf
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="deploymentoption"
                                                        value="Single"> Single Staff Deployment </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="deploymentoption"
                                                        value="Batch"> Batch Staff Deployment </label>
                                            </div>




                                            <button type="submit" class="btn btn-primary me-2">Continue</button>
                                            <a href="{{ route('captions.index') }}" class="btn btn-danger">Cancel</a>
                                        </form> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:partials/_footer.html')}} -->
                    @endsection
