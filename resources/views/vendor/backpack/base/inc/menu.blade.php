<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->

        @if (backpack_auth()->check())
            <!-- Topbar. Contains the left part -->
            @include('backpack::inc.topbar_left_content')
        @endif

    <!-- ========== End of top menu left items ========== -->
    </ul>
</div>


<div class="navbar-custom-menu pull-right">
    <ul class="nav navbar-nav">
        <!-- ========================================================= -->
        <!-- ========= Top menu right items (ordered right) ========== -->
        <!-- ========================================================= -->

        @if (config('backpack.base.setup_auth_routes'))
            @if (backpack_auth()->guest())
                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/login') }}">{{ trans('backpack::base.login') }}</a>
                </li>
                @if (config('backpack.base.registration_open'))
                    <li><a href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a></li>
                @endif
            @else
                <!-- Topbar. Contains the right part -->
                @include('backpack::inc.topbar_right_content')
                <!-- <li><a href="{{ route('backpack.auth.logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a></li> -->
                <li class="dropdown user user-menu">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                        <div class="user-image">
                            <img src="{{ asset('img/profile.jpg') }}" alt="User Image">
                        </div>
                        <span class="hidden-xs">{{ backpack_auth()->user()->name }}</span>
                    </a>

                    <ul class="dropdown-menu boxshadow-light-dark">
                        <li class="user-header">
                            <div class="user-image">
                                <a href="#" title="View Profile">
                                    <img src="{{ asset('img/profile.jpg') }}" alt="User Image">
                                </a>
                            </div>
                            <p>
                                {{ backpack_auth()->user()->name }}<br>
                                <small>4th Year BSIT </small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <p>
                                <a class="btn btn-default btn-block break-me" target="_blank" href="#" title="jeffzeejay.belamide@g.msuiit.edu.ph"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACqklEQVQ4EaXBT2gcVRzA8e/vvTeb6U7jDJnGxproJmgrWi3WnPTiXUopVKtWUUFz8Q80YquCxltREBFysQh6KB4qgtKL4r2I9GaQoIgVW0uF7WaH2d3ZnXnvJxEq3vv5iKpyM+TK8uyx8cn1Q+njTwx9b0t1XCHWckMIAUQwIqj3mDjGZRnFZ2eTa2dWzrs6XzzNd98shgMPEO+9h2YwgKoCY9imqmwTVaTdxiYJ482f8d+eI211HjaD2YWO2fyJ8qWnGH59jihJcHmOqGKMwVqLBVye45KEwZdf0D9+mNYvG1Q793TMpOh1u0t7CU1D9eZr9NZOEooCNzODqqKq2JkZQlFw/e1VBqsrOJTfOnexce2PrtlR9kUix9+vnKLat5/w6TrdZ49QXfyRKMuIsozq4g90nz5E88lHcGCZq6trXJ6MaBc9cY0PTJcF6WOH+ev+g0yvv0/2/Xn6Lxylee8DRAPlu29gij7l0WcYnniHJM/ZdeZDJgIOESZ1w65elzv338ul19eo9t3HrV+dZXTqZVCQ2Tm6Kyeojxxj9/w8rd9/5XIIqAqOENhWNZ64LFnKbuHPJ5/jyuLd7P58neCV7ouvMvXIo8yNK6b6W0yU/zhUQRURqH3A1hPuUOXqg8ts7TmNiLDz9gXSsk/wntBuIyKgigBOUQTlhnFdEzlHpx3Tm1+gaWriaogHRARjDB4wAgHFEPiXBiWEgLWGqNXCOEcaOVpNQx0CIoKxFhEQQEQAxQVDbkcjUKU1NYULnm3ee6y1pGlKWZaoKsYIYgwiBi1LrIbcmFF1oU4zbBRhjcE3DU3T4L2nrmtCCMRxjIjgfUC9ByO05m5j6LngdvRHb11fXHpeRXU8HJowHisi/J8xBlXFe09dVRrAJQcfmr60sfmxqCo34x/ixkOgJHqxYQAAAABJRU5ErkJggg==">&nbsp;&nbsp;jeffzeejay.belamide@g.msuiit...</a></p>
                            <div class="btn-group" role="group" aria-label="...">
                                <a href="{{ route('backpack.account.info') }}" class="btn btn-default btn-flat">Profile</a>
                                <a href="#" class="btn btn-default btn-flat">Settings</a>
                            </div>
                            <div class="pull-right">
                                    @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                    <a class="btn btn-default btn-flat" href="{{ route('backpack.auth.logout') }}">
                                        <i class="fa fa-fw fa-power-off"></i> {{ trans('backpack::base.logout') }}
                                    </a>
                                @else
                                    <a  class="btn btn-default btn-flat" href="#"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    >
                                        <i class="fa fa-fw fa-power-off"></i> {{ trans('backpack::base.logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('backpack.auth.logout') }}" method="POST" style="display: none;">
                                        @if(config('adminlte.logout_method'))
                                            {{ method_field(config('adminlte.logout_method')) }}
                                        @endif
                                        {{ csrf_field() }}
                                    </form>
                                @endif
                            </div>
                        </li>
                    </ul>
                </li>
            @endif
        @endif
        <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
