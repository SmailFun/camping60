

    <div class="sidebar-wrapper sidebar-theme">
        <nav id="sidebar">
            <ul class="navbar-nav theme-brand flex-row  text-center">
                <li class="nav-item theme-text">
                    <a href="/user" class="nav-link"> BRANKO </a>
                </li>
                <li class="nav-item toggle-sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather sidebarCollapse feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </li>
            </ul>

            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu ">
                    <a href="#dashboard" data-toggle="collapse" aria-expanded="{{ (request()->is('user*')) ? 'true' : '' }}" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>Оформление заказов</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#accordionExample">
                        <li class="{{ (request()->is('user/order')) ? 'active' : '' }}">
                            <a href="/user/order"> Сделать заказ </a>
                        </li >
                        <li class="{{ (request()->is('user/table')) ? 'active' : '' }}">
                            <a href="/user/order/table"> История заказов </a>
                        </li>

                    </ul>
                </li>

            </ul>

        </nav>
    </div>


