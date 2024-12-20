@extends('admin.layouts.main')

@section('title')
    Edit Redeployment Caption
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
                            <div class="col-md-9 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">@yield('title')</h4>

                                        <form method="POST" action="{{ route('captions.update', $caption) }}"
                                            class="forms-sample">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text"
                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                    name="name" required autofocus placeholder="Redeployment Caption"
                                                    value="{{ $caption->name }}">
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <span style="color: red">{{ $errors->first('name') }}</span>
                                                    </span>
                                                @endif
                                            </div>


                                            <button type="submit" class="btn btn-primary me-2">Update</button>
                                            <a href="{{ route('captions.index') }}" class="btn btn-danger">Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:partials/_footer.html')}} -->
                    @endsection
