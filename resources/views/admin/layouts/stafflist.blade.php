<div class="card card-rounded">
    <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-start">
            <div>
                <h4 class="card-title card-title-dash">Staff
                </h4>
                {{-- <p class="card-subtitle card-subtitle-dash">You
                have 50+ new requests</p> --}}
            </div>
            <div>
                <a href="{{ route('staff.create') }}" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i
                        class="mdi mdi-account-plus"></i>Add
                    new Staff</a>
            </div>
        </div>
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
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Rank</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>View</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staffs as $staff)
                        <tr>


                            <td>
                                <h6>{{ $staff->firstname . ' ' . strtoupper($staff->lastname) }}
                                </h6>
                                {{ $staff->postings->count() . ' posting(s)' }}

                            </td>
                            <td>
                                <h6><a href="tel:{{ $staff->phone }}">{{ $staff->phone }}</a>
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
                                @if ($staff->isdeployed == 1)
                                    <span class="badge badge-success">Posted</span>
                                @else
                                    <span class="badge badge-danger">Not
                                        Posted</span>
                                @endif
                            </td>
                            <td>
                                <h6>
                                    <a href="{{ route('staff.show', $staff->phone) }}"><span
                                            class="fa fa-eye fa-2x"></span></a>
                                </h6>
                            </td>

                            <td>
                                <h6>


                                    <a href="{{ route('staff.edit', $staff->phone) }}">Edit</a>
                                    |


                                    <form id="remove-{{ $staff->id }}" style="display: none"
                                        action="{{ route('staff.destroy', $staff->phone) }}" method="post">
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
                    {{-- <tr>
                    <td>
                        <div
                            class="form-check form-check-flat mt-0">
                            <label
                                class="form-check-label">
                                <input type="checkbox"
                                    class="form-check-input"
                                    aria-checked="false"><i
                                    class="input-helper"></i></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <img src="{{ asset('bootstrap_assets/assets/images/faces/face2.jpg') }}"
                                alt="">
                            <div>
                                <h6>Laura Brooks</h6>
                                <p>Head admin</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h6>Company name 1</h6>
                        <p>company type</p>
                    </td>
                    <td>
                        <div>
                            <div
                                class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                <p class="text-success">65%
                                </p>
                                <p>85/162</p>
                            </div>
                            <div
                                class="progress progress-md">
                                <div class="progress-bar bg-success"
                                    role="progressbar"
                                    style="width: 65%"
                                    aria-valuenow="65"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div
                            class="badge badge-opacity-warning">
                            In progress</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div
                            class="form-check form-check-flat mt-0">
                            <label
                                class="form-check-label">
                                <input type="checkbox"
                                    class="form-check-input"
                                    aria-checked="false"><i
                                    class="input-helper"></i></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <img src="{{ asset('bootstrap_assets/assets/images/faces/face3.jpg') }}"
                                alt="">
                            <div>
                                <h6>Wayne Murphy</h6>
                                <p>Head admin</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h6>Company name 1</h6>
                        <p>company type</p>
                    </td>
                    <td>
                        <div>
                            <div
                                class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                <p class="text-success">65%
                                </p>
                                <p>85/162</p>
                            </div>
                            <div
                                class="progress progress-md">
                                <div class="progress-bar bg-warning"
                                    role="progressbar"
                                    style="width: 38%"
                                    aria-valuenow="38"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div
                            class="badge badge-opacity-warning">
                            In progress</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div
                            class="form-check form-check-flat mt-0">
                            <label
                                class="form-check-label">
                                <input type="checkbox"
                                    class="form-check-input"
                                    aria-checked="false"><i
                                    class="input-helper"></i></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <img src="{{ asset('bootstrap_assets/assets/images/faces/face4.jpg') }}"
                                alt="">
                            <div>
                                <h6>Matthew Bailey</h6>
                                <p>Head admin</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h6>Company name 1</h6>
                        <p>company type</p>
                    </td>
                    <td>
                        <div>
                            <div
                                class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                <p class="text-success">65%
                                </p>
                                <p>85/162</p>
                            </div>
                            <div
                                class="progress progress-md">
                                <div class="progress-bar bg-danger"
                                    role="progressbar"
                                    style="width: 15%"
                                    aria-valuenow="15"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div
                            class="badge badge-opacity-danger">
                            Pending</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div
                            class="form-check form-check-flat mt-0">
                            <label
                                class="form-check-label">
                                <input type="checkbox"
                                    class="form-check-input"
                                    aria-checked="false"><i
                                    class="input-helper"></i></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <img src="{{ asset('bootstrap_assets/assets/images/faces/face5.jpg') }}"
                                alt="">
                            <div>
                                <h6>Katherine Butler</h6>
                                <p>Head admin</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h6>Company name 1</h6>
                        <p>company type</p>
                    </td>
                    <td>
                        <div>
                            <div
                                class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                <p class="text-success">65%
                                </p>
                                <p>85/162</p>
                            </div>
                            <div
                                class="progress progress-md">
                                <div class="progress-bar bg-success"
                                    role="progressbar"
                                    style="width: 65%"
                                    aria-valuenow="65"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div
                            class="badge badge-opacity-success">
                            Completed</div>
                    </td>
                </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
