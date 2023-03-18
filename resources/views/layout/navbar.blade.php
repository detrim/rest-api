@section('navbar')
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center my-auto">

                    <h1 style="margin-right: 50px">REST API</h1>

                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

                    <ul class="navbar-nav navbar-nav-right">

                        <li class="nav-item dropdown">
                            <a class="nav-link me-0" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                                <div class="navbar-profile">
                                    <i class="mdi mdi-account-circle"></i>
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth()->user()->name }}
                                    </p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <button type="button" class="btn preview-subject mb-1 " data-bs-toggle="modal"
                                                data-bs-target="#logout"><i class="mdi mdi-logout text-danger"></i></button>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <button type="button" class="btn preview-subject mb-1 " data-bs-toggle="modal"
                                            data-bs-target="#logout">Log out</button>


                                        {{-- <p class="preview-subject mb-1">Log out</p> --}}
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center"></p>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="horizontal-menu-toggle">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </div>
        </nav>
        {{-- start modal --}}
        <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="{{ url('logout') }}" method="GET" enctype="multipart/form-data">
                            @method('GET')
                            <div class="text-center">
                                <h3 class="modal-title" id="exampleModalLabel">
                                    LOG OUT</h3>
                                <i class="icon-lg mdi mdi-alert-circle text-danger ml-auto"></i>
                            </div>
                            <div class="text-center mt-1 mb-1">

                                <small>Apakah
                                    anda yakin ingin logout</small>

                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Yes</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal --}}
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="{{ url('dashboard') }}">
                            <i class="mdi mdi-speedometer menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
@endsection
