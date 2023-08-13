<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">

            <!-- <img src="{{ asset('admin/assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md"> -->
            <div class="dropdown">
                <p class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</p>
            </div>

            <p class="text-muted left-user-info">Admin</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">



            <ul id="side-menu">

                <li class="menu-title">Page Edit</li>

                <li>
                    <a href="{{route('dashboard.home')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Home </span>
                    </a>
                </li>

                <li>
                    <a href="#services" data-bs-toggle="collapse">
                        <i class="fe-codepen"></i>
                        <span> Services </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="services">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('dashboard.service',1)}}">Item 1</a>
                            </li>
                            <li>
                                <a href="{{route('dashboard.service',2)}}">Item 2</a>
                            </li>
                            <li>
                                <a href="{{route('dashboard.service',3)}}">Item 3</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{route('dashboard.portfolio')}}">
                        <i class="mdi mdi-cookie-alert"></i>
                        <span> Portfolio</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard.statistic')}}">
                        <i class="dripicons-rocket"></i>
                        <span> Statistics </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard.testimonialSection')}}">
                        <i class="mdi mdi-apple-icloud"></i>
                        <span> Testimonial</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard.companySection')}}">
                        <i class="mdi mdi-atom-variant"></i>
                        <span> Companies</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard.awardSection')}}">
                        <i class="mdi mdi-baby-buggy"></i>
                        <span> Award</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard.contactSection')}}">
                        <i class="mdi mdi-bag-personal"></i>
                        <span> Contact</span>
                    </a>
                </li>
                <!-- Second Section -->
                <li class="menu-title">Data</li>

                <li>
                    <a href="{{route('dashboard.skill')}}">
                        <i class="dripicons-archive"></i>
                        <span> Skills </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('project.index')}}">
                        <i class="fe-battery-charging"></i>
                        <span> Portfolio </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('testimonial.index')}}">
                        <i class="fe-cloud-snow"></i>
                        <span> Testimonial </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('company.index')}}">
                        <i class="fe-life-buoy"></i>
                        <span> Companies </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('story.index')}}">
                        <i class="fe-package"></i>
                        <span> Stories </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('award.index')}}">
                        <i class="fe-settings"></i>
                        <span> Award </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard.contact.index')}}">
                        <i class="mdi mdi-ballot"></i>
                        <span> Contact Messages </span>
                    </a>
                </li>


            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>