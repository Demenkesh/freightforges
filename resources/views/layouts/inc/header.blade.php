    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                class="ficon text-warning" data-feather="star"></i></a>

                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">


                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"></span><span
                                class="user-status">Admin</span></div><span class="avatar"><img class="round"
                                src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="avatar"
                                height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <div class="dropdown-divider"></div>
                        <form action="{{ url('admin/logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit"> <i class="me-50" data-feather="power"></i>
                                Logout</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- END: Header-->
