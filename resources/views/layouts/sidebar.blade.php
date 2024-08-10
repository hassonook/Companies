    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index" class="logo">
                <span>
                    <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                    <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li>
                    <a href="{{ route('home') }}"><i data-feather="home"
                            class="align-self-center menu-icon"></i><span>{{__('master.home') }}</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="{{ route('companies') }}"><i data-feather="box"
                            class="align-self-center menu-icon"></i><span>{{__('master.companies') }}</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="{{ route('employees') }}"><i data-feather="users"
                            class="align-self-center menu-icon"></i><span>{{__('master.employees') }}</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                <li>
                    <a href="{{ route('approvals') }}"><i data-feather="check-square"
                            class="align-self-center menu-icon"></i><span>{{__('master.approvals') }}</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                @if (Auth::user()->hasRole('Admin'))
                <li>
                    <a href="{{ route('users') }}"><i data-feather="users"
                            class="align-self-center menu-icon"></i><span>{{__('master.users') }}</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                </li>
                @endif
            </ul>
        </div>
    </div>
