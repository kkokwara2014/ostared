@extends('admin.layouts.main')

@section('title')
    Redeploy Staff in {{ $caption->name }}
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
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        @include('admin.messages.success')
                                        @include('admin.messages.deleted')
                                        <h4 class="card-title">@yield('title')</h4>

                                        <form method="POST" action="{{ route('postings.store') }}" class="forms-sample">
                                            @csrf
                                            <input type="hidden" name="caption_id" value="{{ $caption->id }}">
                                            {{-- list of units to select from --}}
                                            <div class="form-group">
                                                <label for="exampleSelectGender">Select Unit <i
                                                        style="color: red">*</i></label>
                                                <select class="form-select" required name="unit_id">
                                                    <option value="" selected="disabled">Select Unit to Redeploy Staff
                                                    </option>
                                                    @foreach ($units as $unit)
                                                        <option value="{{ $unit->id }}" style="color: black;">
                                                            {{ $unit->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            {{-- staff list to be redeployed --}}
                                            <div class="table-responsive  mt-1">
                                                <table class="table select-table">
                                                    <thead>
                                                        <tr>
                                                            {{-- <th>
                                                            <div
                                                                class="form-check form-check-flat mt-0">
                                                                <label
                                                                    class="form-check-label">
                                                                    <input type="checkbox"
                                                                        class="form-check-input"
                                                                        aria-checked="false"
                                                                        id="check-all"><i
                                                                        class="input-helper"></i></label>
                                                            </div>
                                                        </th> --}}
                                                            <th>CheckBox</th>
                                                            <th>Name</th>
                                                            <th>Phone</th>
                                                            <th>Rank</th>
                                                            <th>Gender</th>
                                                            <th>View</th>
                                                            {{-- <th>Action</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($staffs as $staff)
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" name="staff_id[]"
                                                                                value="{{ $staff->id }}"
                                                                                class="form-check-input"
                                                                                aria-checked="false"><i
                                                                                class="input-helper"></i>
                                                                        </label>
                                                                    </div>
                                                                </td>


                                                                <td>
                                                                    <h6>{{ $staff->firstname . ' ' . $staff->lastname }}
                                                                    </h6>
                                                                    {{ $staff->postings->count() . ' posting(s)' }}

                                                                </td>
                                                                <td>
                                                                    <h6><a
                                                                            href="tel:{{ $staff->phone }}">{{ $staff->phone }}</a>
                                                                    </h6>

                                                                </td>
                                                                <td>
                                                                    <h6>{{ $staff->rank->name }}
                                                                    </h6>

                                                                </td>
                                                                <td>
                                                                    <h6>{{ $staff->gender->name }}
                                                                    </h6>

                                                                </td>
                                                                <td>
                                                                    <h6>
                                                                        <a href="{{ route('staff.show', $staff->phone) }}"><span
                                                                                class="fa fa-eye fa-2x"></span></a>
                                                                    </h6>
                                                                </td>

                                                                {{-- <td>
                                                                    <h6><a
                                                                            href="{{ route('staff.edit', $staff->phone) }}">Edit</a>
                                                                        |


                                                                        <form id="remove-{{ $staff->id }}"
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

                                                                </td> --}}
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>


                                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                                            <a href="{{ route('captions.index') }}" class="btn btn-danger">Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:partials/_footer.html')}} -->
                    @endsection
