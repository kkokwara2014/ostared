<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Redeployed Staff</title>


    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/vendors/font-awesome/css/font-awesome.min.css') }}">


    <!-- endinject -->

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('bootstrap_assets/assets/css/style.css') }}">
    <!-- endinject -->


    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
        table {
            width: 100%;
            margin: 0px;
        }

        th,
        td {
            width: auto;
            text-align: left;
        }
    </style>

</head>

<body>


    <div class="row">
        <div class="col-md-12">
            <h3 style="text-align: center">{{ $caption->name }} Redeployed Staff</h3>
            {{-- <h3 style="text-align: center">Stock Summary</h3> --}}

            {{-- <div class="table-responsive  mt-1"> --}}
            {{-- <table class="table select-table"> --}}
            <table class="table table-light table-responsive table-striped">
                <thead>
                    <tr>
                        <th>Staff Name</th>
                        <th>Rank</th>
                        <th>Deployed To</th>
                        <th>Resumption Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody style="color: black;">
                    @foreach ($postings as $posting)
                        <tr>
                            <td>
                                <h6>
                                    {{ $posting->staff->firstname . ' ' . strtoupper($posting->staff->lastname) }}
                                </h6>
                                <a href="tel:{{ $posting->staff->phone }}">{{ $posting->staff->phone }}</a>
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
                                    <span class="badge badge-success">Posted
                                        ({{ $posting->staff->postings->count() }})
                                    </span>
                                @else
                                    <span class="badge badge-danger">Not
                                        Posted</span>
                                @endif
                            </td>


                        </tr>
                    @endforeach
                    {{-- <p>
                            {{ $postings->links() }}
                        </p> --}}
                </tbody>
            </table>
            {{-- </div> --}}


        </div>
    </div>

</body>

</html>
