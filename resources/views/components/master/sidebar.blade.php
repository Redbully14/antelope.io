<!-- Antelope.io - Sidebar  -->
<div class="iq-sidebar">

    <div class="iq-sidebar-logo d-flex justify-content-between">

        <a href="index.html">
            <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="">
            <span>{{ APPLICATION_NAME }}</span>
        </a>

        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="line-menu half start"></div>
                <div class="line-menu"></div>
                <div class="line-menu half end"></div>
            </div>
        </div>

    </div>

    <div id="sidebar-scrollbar">

        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">

                <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                <li>
                    <a href="#dashboard" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="index.html">Dashboard 1</a></li>
                        <li><a href="dashboard1.html">Dashboard 2</a></li>
                        <li><a href="analytics.html">Analytics</a></li>
                        <li><a href="tracking.html">Tracking</a></li>
                        <li><a href="web-analytics.html">Web Analytics</a></li>
                        <li><a href="patient-dashboard.html">Patient</a></li>
                        <li><a href="ticket-booking.html">Ticket Booking</a></li>
                        <li><a href="sales-dashboard.html">Sales Dashboard</a></li>
                        <li><a href="course-dashboard.html">Course Dashboard</a></li>
                        <li><a href="finance-dashboard.html">Finance Dashboard</a></li>
                        <li><a href="employee-dashboard.html">Employee Dashboard</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

        <div class="p-3"></div>

    </div>

</div>
<!-- #END - Sidebar  -->