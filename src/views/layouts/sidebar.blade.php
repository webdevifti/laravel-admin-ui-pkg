<div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="{{ route('admin.home') }}" class="text-nowrap logo-img">
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"
                class="dark-logo" width="180" alt="" />
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg"
                class="light-logo" width="180" alt="" />
        </a>
        <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar>
        <ul id="sidebarnav">
            <!-- ============================= -->
            <!-- Home -->
            <!-- ============================= -->
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
            </li>
            <!-- =================== -->
            <!-- Dashboard -->
            <!-- =================== -->
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.home') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-aperture"></i>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                    <span class="d-flex">
                        <i class="ti ti-chart-donut-3"></i>
                    </span>
                    <span class="hide-menu">Users</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                        <a href="blog-posts.html" class="sidebar-link">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Manage User</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="blog-detail.html" class="sidebar-link">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Add New</span>
                        </a>
                    </li>
                </ul>
            </li>
    </nav>
    <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
        <div class="hstack gap-3">
            <div class="john-img">
                <img src="{{ asset('vendor/admindash/admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle" width="40"
                    height="40" alt="">
            </div>
            <div class="john-title">
                <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                <span class="fs-2 text-dark">Designer</span>
            </div>
            <a class="border-0 bg-transparent text-primary ms-auto" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
    </div>
    <!-- End Sidebar navigation -->
</div>
