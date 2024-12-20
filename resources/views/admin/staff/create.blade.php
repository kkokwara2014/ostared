@extends('admin.layouts.main')

@section('title')
    Add Staff
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

                                        <form method="POST" action="{{ route('staff.store') }}" class="forms-sample">
                                            @csrf
                                            <div class="form-group">
                                                <label>First Name <i style="color: red">*</i></label>
                                                <input type="text"
                                                    class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                                    name="firstname" required autofocus placeholder="First Name">
                                                @if ($errors->has('firstname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <span style="color: red">{{ $errors->first('firstname') }}</span>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name <i style="color: red">*</i></label>
                                                <input type="text"
                                                    class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                                    name="lastname" required autofocus placeholder="Last Name">
                                                @if ($errors->has('lastname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <span style="color: red">{{ $errors->first('lastname') }}</span>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Other Name</label>
                                                <input type="text" class="form-control" name="othername"
                                                    placeholder="Other Name">

                                            </div>
                                            <div class="form-group">
                                                <label>Phone Number <i style="color: red">*</i></label>
                                                <input type="text"
                                                    class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                    name="phone" required autofocus placeholder="Phone Number"
                                                    maxlength="11" pattern="[0-9]+">
                                                @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <span style="color: red">{{ $errors->first('phone') }}</span>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleSelectGender">Select Rank <i
                                                        style="color: red">*</i></label>
                                                <select class="form-select" required name="rank_id">
                                                    <option value="" selected="disabled">Select Rank</option>
                                                    @foreach ($ranks as $rank)
                                                        <option value="{{ $rank->id }}" style="color: black;">
                                                            {{ $rank->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleSelectGender">Select Gender <i
                                                        style="color: red">*</i></label>
                                                <select class="form-select" required name="gender_id">
                                                    <option value="" selected="disabled">Select Gender</option>
                                                    @foreach ($genders as $gender)
                                                        <option value="{{ $gender->id }}" style="color: black;">
                                                            {{ $gender->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>




                                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                                            <a href="{{ route('staff.index') }}" class="btn btn-danger">Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:partials/_footer.html')}} -->
                    @endsection
