<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="{{ url('/home') }}">
                <div class="logo-img">

                </div>
                <span class="text">{{ trans('main.esim') }}</span>
            </a>

        </div>

        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">

                    <div class="nav-item active">
                        <a href="{{ url('home') }}"><i class="ik ik-bar-chart-2"></i><span>{{ trans('main.Dashboard') }}</span></a>
                    </div>


                    <div class="nav-item has-sub">
                        <a href="{{ route('packages.index') }}"><i class="ik ik-list"></i><span>{{ trans('main.packages') }}</span> <span
                                class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('packages.create') }}" class="menu-item">{{ trans('main.Create') }}</a>
                          

                        </div>
                    </div>
                    <div class="nav-item has-sub">
                        <a href="{{ route('admins.index') }}"><i class="ik ik-list"></i><span>{{ trans('main.admin') }}</span> <span
                                class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('admins.create') }}" class="menu-item">{{ trans('main.Create') }}</a>
                          

                        </div>
                    </div>



                    <div class="nav-item has-sub">
                        <a href="{{ route('customers.index') }}"><i class="ik ik-person"></i><span>{{ trans('main.Customer') }}</span> <span
                                class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('customers.create') }}" class="menu-item">{{ trans('main.Create') }}</a>
                            <a href="#" class="menu-item">
                                </a>
                        </div>
                    </div>

                    
                        <div class="nav-item has-sub">
                            <a href="{{ route('contacts.index') }}"><i class="ik ik-layers"></i><span>{{ trans('main.Contact') }}</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                            </div>
                        </div>

                        <div class="nav-item has-sub">
                            <a href="{{ route('slices.index') }}"><i class="ik ik-file-text"></i><span>{{ trans('main.Slice') }}</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('slices.create') }}" class="menu-item">{{ trans('main.Create') }}</a>

                            </div>
                        </div>


                        <div class="nav-item has-sub">
                            <a href="{{ route('devices.index') }}"><i class="ik ik-monitor"></i><span>{{ trans('main.Device') }}</span>
                                <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('devices.index') }}" class="menu-item">{{ trans('main.Index') }}</a>
                                <a href="{{ route('devices.create') }}" class="menu-item">{{ trans('main.Create') }}</a>

                            </div>
                        </div>
                        <div class="nav-item has-sub">
                            <a href="{{ route('orders.index') }}"><i class="ik ik-monitor"></i><span>{{ trans('main.Order') }}</span>
                                <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('orders.index') }}" class="menu-item">{{ trans('main.Index') }}</a>

                            </div>
                        </div>
                        <div class="nav-item has-sub">
                            <a href="{{ route('landing_pages.index') }}"><i class="ik ik-monitor"></i><span>{{ trans('main.landing') }}</span>
                                <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ 'landing_pages.store' }}" class="menu-item">{{ trans('main.Create') }}</a>

                            </div>
                        </div>
                        <div class="nav-item has-sub">
                            <a href="{{ route('company_devices.index') }}"><i class="ik ik-monitor"></i><span>{{ trans('main.Company') }}</span>
                                <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('company_devices.index') }}" class="menu-item">{{ trans('main.Index') }}</a>
                                <a href="{{ route('company_devices.create') }}" class="menu-item">{{ trans('main.Create') }}</a>

                            </div>
                        </div>
                        <div class="nav-item has-sub">
                            <ul class="main_menu clearfix">
                                <li class="nav-itemdropdown">
                            
                                    <a class ="nav-link dropdown-toggle nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <span class="hidden-md-down">{{ LaravelLocalization::getCurrentLocaleName() }}</span> 
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                    </ul>
                                  </a></li>
                            </ul>
                        </div>

                    
                </nav>
            </div>
        </div>
    </div>
