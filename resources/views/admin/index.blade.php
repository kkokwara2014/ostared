@extends('admin.layouts.main')

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
                                            <li class="nav-item">
                                                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab"
                                                    href="#overview" role="tab" aria-controls="overview"
                                                    aria-selected="true">Overview</a>
                                            </li>
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
                                        <div>
                                            <div class="btn-wrapper">
                                                {{-- <a href="#" class="btn btn-otline-dark align-items-center"><i
                                                    class="icon-share"></i> Share</a> --}}
                                                <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i>
                                                    Print</a>
                                                <a href="#" class="btn btn-primary text-white me-0"><i
                                                        class="icon-download"></i> Export</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content tab-content-basic">
                                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                            aria-labelledby="overview">
                                            {{-- stats --}}
                                            @include('admin.layouts.stats')
                                            {{-- <div class="row">
                                            <div class="col-lg-8 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">
                                                                            Performance Line Chart</h4>
                                                                        <h5 class="card-subtitle card-subtitle-dash">
                                                                            Lorem Ipsum is simply dummy text of the
                                                                            printing</h5>
                                                                    </div>
                                                                    <div id="performanceLine-legend"></div>
                                                                </div>
                                                                <div class="chartjs-wrapper mt-4">
                                                                    <canvas id="performanceLine"
                                                                        width=""></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                        <div class="card bg-primary card-rounded">
                                                            <div class="card-body pb-0">
                                                                <h4 class="card-title card-title-dash text-white mb-4">
                                                                    Status Summary</h4>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <p class="status-summary-ight-white mb-1">
                                                                            Closed Value</p>
                                                                        <h2 class="text-info">357</h2>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="status-summary-chart-wrapper pb-4">
                                                                            <canvas id="status-summary"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                                                            <div class="circle-progress-width">
                                                                                <div id="totalVisitors"
                                                                                    class="progressbar-js-circle pr-2">
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <p class="text-small mb-2">Total
                                                                                    Visitors</p>
                                                                                <h4 class="mb-0 fw-bold">26.80%</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <div class="circle-progress-width">
                                                                                <div id="visitperday"
                                                                                    class="progressbar-js-circle pr-2">
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <p class="text-small mb-2">Visits per
                                                                                    day</p>
                                                                                <h4 class="mb-0 fw-bold">9065</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                            <div class="row">
                                                <div class="col-lg-12 d-flex flex-column">
                                                    {{-- <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">Market
                                                                            Overview</h4>
                                                                        <p class="card-subtitle card-subtitle-dash">
                                                                            Lorem ipsum dolor sit amet consectetur
                                                                            adipisicing elit</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                                                type="button"
                                                                                id="dropdownMenuButton2"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"> This month
                                                                            </button>
                                                                            <div class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton2">
                                                                                <h6 class="dropdown-header">Settings
                                                                                </h6>
                                                                                <a class="dropdown-item"
                                                                                    href="#">Action</a>
                                                                                <a class="dropdown-item"
                                                                                    href="#">Another action</a>
                                                                                <a class="dropdown-item"
                                                                                    href="#">Something else
                                                                                    here</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item"
                                                                                    href="#">Separated link</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-sm-flex align-items-center mt-1 justify-content-between">
                                                                    <div
                                                                        class="d-sm-flex align-items-center mt-4 justify-content-between">
                                                                        <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                                                        <h4 class="me-2">USD</h4>
                                                                        <h4 class="text-success">(+1.37%)</h4>
                                                                    </div>
                                                                    <div class="me-3">
                                                                        <div id="marketingOverview-legend"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="chartjs-bar-wrapper mt-3">
                                                                    <canvas id="marketingOverview"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded table-darkBGImg">
                                                            <div class="card-body">
                                                                <div class="col-sm-8">
                                                                    <h3 class="text-white upgrade-info mb-0"> Enhance
                                                                        your <span class="fw-bold">Campaign</span> for
                                                                        better outreach </h3>
                                                                    <a href="#"
                                                                        class="btn btn-info upgrade-btn">Upgrade
                                                                        Account!</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                    <div class="row flex-grow">
                                                        <div class="col-12 grid-margin stretch-card">
                                                            @include('admin.layouts.stafflist')
                                                        </div>
                                                    </div>
                                                    {{-- <div class="row flex-grow">
                                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body card-rounded">
                                                                <h4 class="card-title  card-title-dash">Recent Events
                                                                </h4>
                                                                <div
                                                                    class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 fw-medium"> Change in Directors
                                                                        </p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i
                                                                                    class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">
                                                                                    Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 fw-medium"> Other Events </p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i
                                                                                    class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">
                                                                                    Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 fw-medium"> Quarterly Report
                                                                        </p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i
                                                                                    class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">
                                                                                    Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 fw-medium"> Change in Directors
                                                                        </p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i
                                                                                    class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">
                                                                                    Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center pt-3">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-0">
                                                                            <a href="#"
                                                                                class="fw-bold text-primary">Show all
                                                                                <i
                                                                                    class="mdi mdi-arrow-right ms-2"></i></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-3">
                                                                    <h4 class="card-title card-title-dash">Activities
                                                                    </h4>
                                                                    <p class="mb-0">20 finished, 5 remaining</p>
                                                                </div>
                                                                <ul class="bullet-line-list">
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben
                                                                                    Tossell</span> assign you a task
                                                                            </div>
                                                                            <p>Just now</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Oliver
                                                                                    Noah</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Jack
                                                                                    William</span> assign you a task
                                                                            </div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Leo
                                                                                    Lucas</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Thomas
                                                                                    Henry</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben
                                                                                    Tossell</span> assign you a task
                                                                            </div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben
                                                                                    Tossell</span> assign you a task
                                                                            </div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="list align-items-center pt-3">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-0">
                                                                            <a href="#"
                                                                                class="fw-bold text-primary">Show all
                                                                                <i
                                                                                    class="mdi mdi-arrow-right ms-2"></i></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                </div>
                                                {{-- <div class="col-lg-4 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <h4 class="card-title card-title-dash">Todo
                                                                                list</h4>
                                                                            <div class="add-items d-flex mb-0">
                                                                                <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                                                                <button
                                                                                    class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i
                                                                                        class="mdi mdi-plus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="list-wrapper">
                                                                            <ul class="todo-list todo-list-rounded">
                                                                                <li class="d-block">
                                                                                    <div class="form-check w-100">
                                                                                        <label
                                                                                            class="form-check-label">
                                                                                            <input class="checkbox"
                                                                                                type="checkbox"> Lorem
                                                                                            Ipsum is simply dummy text
                                                                                            of the printing <i
                                                                                                class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div
                                                                                                class="ps-4 text-small me-3">
                                                                                                24 June 2020</div>
                                                                                            <div
                                                                                                class="badge badge-opacity-warning me-3">
                                                                                                Due tomorrow</div>
                                                                                            <i
                                                                                                class="mdi mdi-flag ms-2 flag-color"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="d-block">
                                                                                    <div class="form-check w-100">
                                                                                        <label
                                                                                            class="form-check-label">
                                                                                            <input class="checkbox"
                                                                                                type="checkbox"> Lorem
                                                                                            Ipsum is simply dummy text
                                                                                            of the printing <i
                                                                                                class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div
                                                                                                class="ps-4 text-small me-3">
                                                                                                23 June 2020</div>
                                                                                            <div
                                                                                                class="badge badge-opacity-success me-3">
                                                                                                Done</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="form-check w-100">
                                                                                        <label
                                                                                            class="form-check-label">
                                                                                            <input class="checkbox"
                                                                                                type="checkbox"> Lorem
                                                                                            Ipsum is simply dummy text
                                                                                            of the printing <i
                                                                                                class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div
                                                                                                class="ps-4 text-small me-3">
                                                                                                24 June 2020</div>
                                                                                            <div
                                                                                                class="badge badge-opacity-success me-3">
                                                                                                Done</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="border-bottom-0">
                                                                                    <div class="form-check w-100">
                                                                                        <label
                                                                                            class="form-check-label">
                                                                                            <input class="checkbox"
                                                                                                type="checkbox"> Lorem
                                                                                            Ipsum is simply dummy text
                                                                                            of the printing <i
                                                                                                class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div
                                                                                                class="ps-4 text-small me-3">
                                                                                                24 June 2020</div>
                                                                                            <div
                                                                                                class="badge badge-opacity-danger me-3">
                                                                                                Expired</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-3">
                                                                            <h4 class="card-title card-title-dash">Type
                                                                                By Amount</h4>
                                                                        </div>
                                                                        <div>
                                                                            <canvas class="my-auto"
                                                                                id="doughnutChart"></canvas>
                                                                        </div>
                                                                        <div id="doughnutChart-legend"
                                                                            class="mt-5 text-center"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-3">
                                                                            <div>
                                                                                <h4 class="card-title card-title-dash">
                                                                                    Leave Report</h4>
                                                                            </div>
                                                                            <div>
                                                                                <div class="dropdown">
                                                                                    <button
                                                                                        class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                                                        type="button"
                                                                                        id="dropdownMenuButton3"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"> Month
                                                                                        Wise </button>
                                                                                    <div class="dropdown-menu"
                                                                                        aria-labelledby="dropdownMenuButton3">
                                                                                        <h6 class="dropdown-header">
                                                                                            week Wise</h6>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">Year
                                                                                            Wise</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-3">
                                                                            <canvas id="leaveReport"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-3">
                                                                            <div>
                                                                                <h4 class="card-title card-title-dash">
                                                                                    Top Performer</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-3">
                                                                            <div
                                                                                class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10"
                                                                                        src="{{ asset('bootstrap_assets/assets/images/faces/face1.jpg') }}"
                                                                                        alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">
                                                                                            Brandon Washington</p>
                                                                                        <small
                                                                                            class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small"> 1h
                                                                                    ago </div>
                                                                            </div>
                                                                            <div
                                                                                class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10"
                                                                                        src="{{ asset('bootstrap_assets/assets/images/faces/face2.jpg') }}"
                                                                                        alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">
                                                                                            Wayne Murphy</p>
                                                                                        <small
                                                                                            class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small"> 1h
                                                                                    ago </div>
                                                                            </div>
                                                                            <div
                                                                                class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10"
                                                                                        src="{{ asset('bootstrap_assets/assets/images/faces/face3.jpg') }}"
                                                                                        alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">
                                                                                            Katherine Butler</p>
                                                                                        <small
                                                                                            class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small"> 1h
                                                                                    ago </div>
                                                                            </div>
                                                                            <div
                                                                                class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10"
                                                                                        src="{{ asset('bootstrap_assets/assets/images/faces/face4.jpg') }}"
                                                                                        alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">
                                                                                            Matthew Bailey</p>
                                                                                        <small
                                                                                            class="text-muted mb-0">162543</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small"> 1h
                                                                                    ago </div>
                                                                            </div>
                                                                            <div
                                                                                class="wrapper d-flex align-items-center justify-content-between pt-2">
                                                                                <div class="d-flex">
                                                                                    <img class="img-sm rounded-10"
                                                                                        src="{{ asset('bootstrap_assets/assets/images/faces/face5.jpg') }}"
                                                                                        alt="profile">
                                                                                    <div class="wrapper ms-3">
                                                                                        <p class="ms-1 mb-1 fw-bold">
                                                                                            Rafell John</p>
                                                                                        <small
                                                                                            class="text-muted mb-0">Alaska,
                                                                                            USA</small>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-muted text-small"> 1h
                                                                                    ago </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
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
