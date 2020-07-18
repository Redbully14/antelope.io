<!-- Antelope.io - Sidebar  -->
<div class="iq-sidebar">

    <div class="iq-sidebar-logo d-flex justify-content-between">

        <a href="/">
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

                    <a href="/" class="iq-waves-effect"><i class="ri-home-4-line"></i>
                        <span>Dashboard</span>
                    </i></a>

                    @role('superadmin')
                    <a href="/developer_debug" class="iq-waves-effect"><i class="ri-code-s-slash-line"></i>
                        <span>Test</span>
                    </i></a>
                    @endrole

                </li>

            </ul>
        </nav>

        <div class="p-3"></div>

    </div>

</div>
<!-- #END - Sidebar  -->