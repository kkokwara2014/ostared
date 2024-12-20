<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fa fa-dashboard fa-2x"></i> &nbsp;
                {{-- <i class="mdi mdi-grid-large menu-icon"></i> --}}
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        {{-- <li class="nav-item nav-category">UI Elements</li> --}}
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="fa fa-bank fa-2x"></i> &nbsp;
                <span class="menu-title">Divisions</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('divisions.create') }}">Add New</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('divisions.index') }}">All</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="fa fa-tags fa-2x"></i> &nbsp;
                <span class="menu-title">Units</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('units.create') }}">Add New</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('units.index') }}">All</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="fa fa-group fa-2x"></i> &nbsp;
                <span class="menu-title">Staff</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('staff.create') }}"> Add New</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('staff.index') }}"> All</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="fa fa-exchange fa-2x"></i> &nbsp;
                <span class="menu-title">Postings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('captions.create') }}">Add New</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('captions.index') }}">All</a>
                    </li>
                </ul>
            </div>
        </li>



        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.logout') }}">
                {{-- <i class="menu-icon mdi mdi-power"></i>&nbsp; --}}
                {{-- <i class="menu-icon fa-power-off fa-2x"></i>&nbsp; --}}
                <i class="fa fa-power-off fa-2x"></i> &nbsp;
                <span class="menu-title">Log Out</span>
            </a>
        </li>
    </ul>
</nav>
