
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="26px"
                  height="26px"
                  viewBox="0 0 26 26"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>icon</title>
                  <defs>
                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                      <stop stop-color="#5A8DEE" offset="0%"></stop>
                      <stop stop-color="#699AF9" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                      <stop stop-color="#FDAC41" offset="0%"></stop>
                      <stop stop-color="#E38100" offset="100%"></stop>
                    </linearGradient>
                  </defs>
                  <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                      <g id="Login" transform="translate(519.000000, 244.000000)">
                        <g id="Logo" transform="translate(148.000000, 42.000000)">
                          <g id="icon" transform="translate(0.000000, 4.000000)">
                            <path
                              d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                              id="Combined-Shape"
                              fill="#4880EA"
                            ></path>
                            <path
                              d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                              id="Combined-Shape2"
                              fill="url(#linearGradient-1)"
                            ></path>
                            <rect
                              id="Rectangle"
                              fill="url(#linearGradient-2)"
                              x="0"
                              y="0"
                              width="7.68181818"
                              height="7.68181818"
                            ></rect>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">Frest</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="bx menu-toggle-icon fs-4 d-none d-xl-block align-middle"></i>
              <i class="bx bx-x bx-sm d-xl-none d-block align-middle"></i>
            </a>
          </div>

          <div class="menu-divider mt-0"></div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">

            <!-- Apps & Pages -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Apps &amp; Pages</span></li>
            @if(Auth::check())
            <li class="menu-item {{ request()->is('admin') ? 'active' : ''}}">
              <a href="{{route('admin')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
              </a>
            </li>
            @else
            <li class="menu-item">
              <a href="app-calendar.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="car">car</div>
              </a>
            </li>
            @endif


            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Users">Users</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-user-list.html" class="menu-link">
                    <div data-i18n="List">List</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="View">View</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="app-user-view-account.html" class="menu-link">
                        <div data-i18n="Account">Account</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>


            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Cards">Cards</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="cards-basic.html" class="menu-link">
                    <div data-i18n="Basic">Basic</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-advance.html" class="menu-link">
                    <div data-i18n="Advance">Advance</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-statistics.html" class="menu-link">
                    <div data-i18n="Statistics">Statistics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-analytics.html" class="menu-link">
                    <div data-i18n="Analytics">Analytics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-actions.html" class="menu-link">
                    <div data-i18n="Actions">Actions</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="our works">our works</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="cards-basic.html" class="menu-link">
                    <div data-i18n="View all Works">View all Works</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-advance.html" class="menu-link">
                    <div data-i18n="Add new Archivement">Add new Archivement</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item {{ request()->is('comeback') ? 'active' : ''}}">
              <a href="comback" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="comeback">comeback</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container-fluid">
                <div class="layout-menu-toggle navbar-nav d-xl-none align-items-xl-center me-3 me-xl-0">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                    <div class="nav-item navbar-search-wrapper mb-0">
                        <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                        <i class="bx bx-search-alt bx-sm"></i>
                        <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                        </a>
                    </div>
                    </div>
                    <!-- /Search -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->

                </div>
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <!-- Language -->
                    <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <i class="flag-icon flag-icon-us flag-icon-squared fs-3 rounded-circle me-1"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                            <i class="flag-icon flag-icon-us flag-icon-squared fs-4 rounded-circle me-1"></i>
                            <span class="align-middle">English</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-language="sa">
                            <i class="flag-icon flag-icon-sa flag-icon-squared fs-4 rounded-circle me-1"></i>
                            <span class="align-middle">Arabic</span>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <!--/ Language -->

                    <!-- Style Switcher -->
                    <li class="nav-item me-2 me-xl-0">
                        <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                        <i class="bx bx-sm"></i>
                        </a>
                    </li>
                    <!--/ Style Switcher -->

                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        @guest
                            @if (Route::has('login'))
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="bx bx-user"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                                    <a class="dropdown-item" href="{{ route('login') }}"><i class='bx bxs-log-in'></i>    {{ __('Login') }}</a>
                        </li>
                        @endif

                            @if (Route::has('register'))
                            <li >

                                <a class="dropdown-item" href="{{ route('register') }}"><i class='bx bxs-user-plus'></i>  {{ __('Register') }}</a>
                            </li>
                            @endif


                    @else
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">

                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="{{asset('img/avatars/1.png')}}" alt class="rounded-circle" />
                        </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                    <img src="{{asset('img/avatars/1.png')}}" alt class="rounded-circle" />
                                </div>
                                </div>
                                <div class="flex-grow-1">
                                <span class="lh-1 d-block fw-semibold">{{ Auth::user()->name }}e</span>
                                <small>Admin</small>
                                </div>
                            </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>


                        <li>
                            <a class="dropdown-item" href="pages-profile-user.html">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>

                            <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">{{ __('Logout') }}</span>

                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                    @endguest
                    <!--/ User -->
                    </ul>
                </div>

                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper d-none">
                    <input
                    type="text"
                    class="form-control search-input container-fluid border-0"
                    placeholder="Search..."
                    aria-label="Search..."
                    />
                    <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                </div>
                </div>
            </nav>

        <!-- <div class="layout-overlay layout-menu-toggle"></div> -->



