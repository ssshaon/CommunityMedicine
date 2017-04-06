<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">Community Medicine</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;BANGLADESH
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Head Office</span> <i class="icon-office" title="Main pages"></i></li>
                    <li class="@yield('add_center')"><a href="{{url('/admin/user/create')}}"><i class="icon-add"></i> <span>Create Center</span></a></li>




                    <!-- /main -->

                    <li>
                        <a href="#"><i class="icon-accessibility2"></i> <span>Medicine Supply</span></a>
                        <ul>
                            <li class="@yield("center")"><a href="{{url('/admin/center/medicine')}}">Center Rajshahi</a></li>
                            <li class="@yield('center')"><a href="{{url('/admin/center/medicine')}}">Center Dhaka</a></li>
                            <li class="@yield("center")"><a href="{{url('/admin/center/medicine')}}">Center Chittagong</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-person"></i> <span>Doctor</span></a>
                        <ul>
                            <li class="@yield("center")"><a href="{{url('/admin/center/doctor')}}">Center Rajshahi</a></li>
                            <li class="@yield('center')"><a href="{{url('/admin/center/doctor')}}">Center Dhaka</a></li>
                            <li class="@yield("center")"><a href="{{url('/admin/center/doctor')}}">Center Chittagong</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-users"></i> <span>Register Patient</span></a>
                        <ul>
                            <li class="@yield("center")"><a href="{{url('/admin/center/patient')}}">Center Rajshahi</a></li>
                            <li class="@yield('center')"><a href="{{url('/admin/center/patient')}}">Center Dhaka</a></li>
                            <li class="@yield("center")"><a href="{{url('/admin/center/patient')}}">Center Chittagong</a></li>

                        </ul>
                    </li>
                    <!-- /page kits -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>/