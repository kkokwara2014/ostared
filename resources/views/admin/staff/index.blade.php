@extends('admin.layouts.main')

@section('title')
    All Staff ({{ $staffs->count() }})
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
                            <div class="col-sm-12">
                                <div class="home-tab">
                                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                        <ul class="nav nav-tabs" role="tablist">
                                            {{-- <li class="nav-item">
                                                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab"
                                                    href="#overview" role="tab" aria-controls="overview"
                                                    aria-selected="true">Overview</a>
                                            </li> --}}
                                            {{-- <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                href="#audiences" role="tab" aria-selected="false">Audiences</a>
                                        </li> --}}
                                            {{-- <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                                href="#demographics" role="tab"
                                                aria-selected="false">Demographics</a>
                                        </li> --}}
                                            {{-- <li class="nav-item">
                                            <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab"
                                                href="#more" role="tab" aria-selected="false">More</a>
                                        </li> --}}
                                        </ul>

                                    </div>
                                    <div class="tab-content tab-content-basic">
                                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                            aria-labelledby="overview">

                                            <div class="row">
                                                <div class="col-lg-12 d-flex flex-column">

                                                    <div class="row flex-grow">
                                                        <div class="col-12 grid-margin stretch-card">
                                                            {{-- <div class="card card-rounded">
                                                                <div class="card-body">
                                                                    @include('admin.messages.success')
                                                                    @include('admin.messages.deleted')
                                                                    <div
                                                                        class="d-sm-flex justify-content-between align-items-start">
                                                                        <div>
                                                                            <h4 class="card-title card-title-dash">
                                                                                @yield('title')
                                                                            </h4>

                                                                        </div>
                                                                        <div>
                                                                            <a href="{{ route('staff.create') }}"
                                                                                class="btn btn-primary btn-lg text-white mb-0 me-0"
                                                                                type="button"><span
                                                                                    class="fa fa-plus-circle"></span> Add
                                                                                new Staff</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-responsive  mt-1">
                                                                        <table class="table select-table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Name</th>
                                                                                    <th>Phone</th>
                                                                                    <th>View</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($staffs as $staff)
                                                                                    <tr>
                                                                                        <td>
                                                                                            <h6>

                                                                                                {{ $staff->firstname . ' ' . $staff->lastname }}

                                                                                            </h6>
                                                                                        </td>
                                                                                        <td>
                                                                                            <h6><a
                                                                                                    href="tel:{{ $staff->phone }}">{{ $staff->phone }}</a>
                                                                                            </h6>
                                                                                        </td>
                                                                                        <td>
                                                                                            <h6><a href="#">View
                                                                                                    Postings</a>
                                                                                            </h6>
                                                                                        </td>

                                                                                        <td>
                                                                                            <h6><a
                                                                                                    href="{{ route('staff.edit', $staff->phone) }}">Edit</a>
                                                                                                |
                                                                                                <form
                                                                                                    id="remove-{{ $staff->id }}"
                                                                                                    style="display: none"
                                                                                                    action="{{ route('staff.destroy', $staff->phone) }}"
                                                                                                    method="post">
                                                                                                    @csrf
                                                                                                    @method('delete')
                                                                                                </form>

                                                                                                <a href="#"
                                                                                                    onclick="
                                                                                                if (confirm('Delete this?')) {
                                                                                                    event.preventDefault();
                                                                                                document.getElementById('remove-{{ $staff->id }}').submit();
                                                                                                } else {
                                                                                                    event.preventDefault();
                                                                                                }
                                                                                            "
                                                                                                    style="color: red">Remove</a>
                                                                                            </h6>

                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                <p>
                                                                                    {{ $staffs->links() }}
                                                                                </p>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            @include('admin.layouts.stafflist')
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html')}} -->
                @endsection
