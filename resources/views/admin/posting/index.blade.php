@extends('admin.layouts.main')

@section('title')
    All Postings ({{ $postings->count() }})
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
                                                            <div class="card card-rounded">
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
                                                                            <a href="{{ route('postings.create') }}"
                                                                                class="btn btn-primary btn-lg text-white mb-0 me-0"
                                                                                type="button"><span
                                                                                    class="fa fa-exchange"></span> Redeploy
                                                                                Staff</a>
                                                                        </div>
                                                                    </div>
                                                                    @if ($postings->count())
                                                                        <div class="table-responsive  mt-1">
                                                                            <table class="table select-table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Staff Name</th>
                                                                                        <th>Rank</th>
                                                                                        <th>Deployed To</th>
                                                                                        <th>Resumption Date</th>
                                                                                        <th>Due Date</th>
                                                                                        <th>Status</th>
                                                                                        {{-- <th>View</th> --}}
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($postings as $posting)
                                                                                        <tr>
                                                                                            <td>
                                                                                                <h6>
                                                                                                    {{ $posting->staff->firstname . ' ' . strtoupper($posting->staff->lastname) }}
                                                                                                </h6>
                                                                                                <a
                                                                                                    href="tel:{{ $posting->staff->phone }}">{{ $posting->staff->phone }}</a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <h6>
                                                                                                    {{ $posting->staff->rank->name }}
                                                                                                </h6>
                                                                                            </td>
                                                                                            <td>
                                                                                                <h6>
                                                                                                    {{ $posting->unit->name }}
                                                                                                </h6>
                                                                                            </td>
                                                                                            <td>
                                                                                                <h6>{{ date('d M, Y', strtotime($posting->resumptiondate)) }}
                                                                                                </h6>
                                                                                            </td>
                                                                                            <td>
                                                                                                <h6>{{ date('d M, Y', strtotime($posting->redeploydate)) }}
                                                                                                </h6>
                                                                                            </td>
                                                                                            <td>
                                                                                                @if ($posting->staff->isdeployed == 1)
                                                                                                    <span
                                                                                                        class="badge badge-success">Posted
                                                                                                        ({{ $posting->staff->postings->count() }})
                                                                                                    </span>
                                                                                                @else
                                                                                                    <span
                                                                                                        class="badge badge-danger">Not
                                                                                                        Posted</span>
                                                                                                @endif
                                                                                            </td>

                                                                                            <td>
                                                                                                <h6>
                                                                                                    <a
                                                                                                        href="{{ route('staff.show', $posting->staff->phone) }}">View</a>
                                                                                                    | <a
                                                                                                        href="{{ route('postings.edit', $posting->id) }}">Edit</a>
                                                                                                    |
                                                                                                    <form
                                                                                                        id="remove-{{ $posting->id }}"
                                                                                                        style="display: none"
                                                                                                        action="{{ route('postings.destroy', $posting->id) }}"
                                                                                                        method="post">
                                                                                                        @csrf
                                                                                                        @method('delete')
                                                                                                    </form>

                                                                                                    <a href="#"
                                                                                                        onclick="
                                                                                                if (confirm('Cancel this?')) {
                                                                                                    event.preventDefault();
                                                                                                document.getElementById('remove-{{ $posting->id }}').submit();
                                                                                                } else {
                                                                                                    event.preventDefault();
                                                                                                }
                                                                                            "
                                                                                                        style="color: red">Cancel</a>
                                                                                                </h6>

                                                                                            </td>
                                                                                        </tr>
                                                                                    @endforeach
                                                                                    <p>
                                                                                        {{ $postings->links() }}
                                                                                    </p>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    @else
                                                                        <h5 style="color: red;">No redployment has been
                                                                            made!</h5>
                                                                    @endif

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
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html')}} -->
                @endsection
