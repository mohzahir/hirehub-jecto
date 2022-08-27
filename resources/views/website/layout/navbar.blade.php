<div class="mobile-nav">
    <a href="index.html" class="logo">
        <img src="{{ asset('jecto/default/assets/img/logo-three.png') }}" alt="Logo">
    </a>
</div>

<div class="main-nav two">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('jecto/default/assets/img/logo-two.png') }}" class="logo-one" alt="Logo">
                <img src="{{ asset('jecto/default/assets/img/logo-three.png') }}" class="logo-two" alt="Logo">
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link dropdown-toggle {{ request()->routeIs('home') ? 'active' : '' }}">{{ __('locale.Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('jobs') }}" class="nav-link dropdown-toggle {{ request()->routeIs('jobs') || request()->routeIs('job.details') ? 'active' : '' }}">{{ __('locale.Jobs') }}</a>
                    </li>
                    @if(app()->getLocale() == 'en')
                    <li class="nav-item">
                        <a href="{{ route('set.locale', ['locale' => 'ar']) }}" class="nav-link">
                            العربية 
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('set.locale', ['locale' => 'en']) }}" class="nav-link">
                            English 
                        </a>
                    </li>
                    @endif
                </ul>
                <div class="side-nav two">
                    @if(auth()->guard('candidate')->check())
                    <a class="login-left" href="{{ route('candidate.dashboard') }}">
                        <i class="flaticon-enter"></i>
                        {{ __('locale.Dashboard') }}
                    </a>
                    @else
                    <a class="login-left" href="{{ route('candidate.login.form') }}">
                        <i class="flaticon-enter"></i>
                        {{ __('locale.Login') }}/{{ __('locale.Register') }}
                    </a>
                    @endif
                    <!-- <a class="job-right" href="post-a-job.html">
                        Post A Job
                        <i class='bx bx-plus'></i>
                    </a> -->
                </div>
            </div>
        </nav>
    </div>
</div>