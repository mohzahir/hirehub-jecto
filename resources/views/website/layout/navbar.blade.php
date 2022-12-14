<div class="mobile-nav">
    <a href="{{ route('home') }}" class="logo">
        <img src="{{ asset('jecto/default/assets/img/logo-three.png') }}" alt="Logo">
    </a>
</div>

@if(request()->routeIs('home'))
<div class="main-nav two">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img style="width: 115; height: 29.11px" src="{{ asset($setting->logo1) }}" class="logo-one" alt="Logo">
                <img style="width: 115; height: 29.11px" src="{{ asset($setting->logo2) }}" class="logo-two" alt="Logo">
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link dropdown-toggle {{ request()->routeIs('home') ? 'active' : '' }}">{{ __('locale.Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('jobs') || request()->routeIs('job.details') || request()->routeIs('workshops') || request()->routeIs('workshop.details') || request()->routeIs('cv.writting') ? 'active' : '' }}">{{ __('locale.Human Resource (HR)') }} <i class='bx bx-chevron-down'></i></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ route('jobs') }}" class="nav-link {{ request()->routeIs('jobs') || request()->routeIs('job.details') ? 'active' : '' }}">{{ __('locale.Recruitment/Jobs') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('cv.writing') }}" class="nav-link {{ request()->routeIs('cv.writing') ? 'active' : '' }}">{{ __('locale.Curriculum Vitae (CV) Writing') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('workshops') }}" class="nav-link {{ request()->routeIs('workshops') || request()->routeIs('workshop.details') ? 'active' : '' }}">{{ __('locale.Employment Clinic/Workshops') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link dropdown-toggle {{ request()->routeIs('about') ? 'active' : '' }}">{{ __('locale.About') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link dropdown-toggle {{ request()->routeIs('contact') ? 'active' : '' }}">{{ __('locale.Contact') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link dropdown-toggle {{ request()->routeIs('blog') ? 'active' : '' }}">{{ __('locale.Blog') }}</a>
                    </li>
                    @foreach($pages as $page)
                        @if($page->is_navbar_page)
                        <li class="nav-item">
                            <a href="{{ url('page/' . $page->slug) }}" class="nav-link dropdown-toggle {{ request()->url() == url('page/' . $page->slug) ? 'active' : '' }}">{{ $locale == 'ar' ? $page->title_ar : $page->title }}</a>
                        </li>
                        @endif
                    @endforeach
                    @if(app()->getLocale() == 'en')
                    <li class="nav-item">
                        <a href="{{ route('set.locale', ['locale' => 'ar']) }}" class="nav-link">
                            ??????????????
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
                        <!-- <i class="flaticon-enter"></i> -->
                        <i class='fa fa-dashboard'></i>
                        {{ __('locale.Dashboard') }}
                    </a>
                    @else
                    <a class="login-left" href="{{ route('candidate.login.form') }}">
                        <!-- <i class="flaticon-enter"></i> -->
                        <!-- <i class='bx bxs-door-open'></i> -->
                        <i class="fa-solid fa-door-open"></i>
                        {{ __('locale.Login') }}
                    </a>
                    @endif
                    <a class="job-right" href="{{ route('jobs') }}">
                        {{ __('locale.Find A Job') }}
                        <i class='fa fa-briefcase'></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
@else
<div class="navbar-area fixed-top">

    <div class="mobile-nav">
        <a href="{{ route('home') }}" class="logo">
            <img style="width: 115; height: 29.11px" src="{{ asset($setting->logo1) }}" alt="Logo">
        </a>
    </div>

    <div class="main-nav three">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img style="width: 115; height: 29.11px" src="{{ asset($setting->logo2) }}" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link dropdown-toggle {{ request()->routeIs('home') ? 'active' : '' }}">{{ __('locale.Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('jobs') || request()->routeIs('job.details') || request()->routeIs('workshops') || request()->routeIs('workshop.details') || request()->routeIs('cv.writting') ? 'active' : '' }}">{{ __('locale.Human Resource (HR)') }} <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('jobs') }}" class="nav-link {{ request()->routeIs('jobs') || request()->routeIs('job.details') ? 'active' : '' }}">{{ __('locale.Recruitment/Jobs') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('cv.writing') }}" class="nav-link {{ request()->routeIs('cv.writing') ? 'active' : '' }}">{{ __('locale.Curriculum Vitae (CV) Writing') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('workshops') }}" class="nav-link {{ request()->routeIs('workshops') || request()->routeIs('workshop.details') ? 'active' : '' }}">{{ __('locale.Employment Clinic/Workshops') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link dropdown-toggle {{ request()->routeIs('about') ? 'active' : '' }}">{{ __('locale.About') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link dropdown-toggle {{ request()->routeIs('contact') ? 'active' : '' }}">{{ __('locale.Contact') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="nav-link dropdown-toggle {{ request()->routeIs('blog') ? 'active' : '' }}">{{ __('locale.Blog') }}</a>
                        </li>
                        @foreach($pages as $page)
                            @if($page->is_navbar_page)
                            <li class="nav-item">
                                <a href="{{ url('page/' . $page->slug) }}" class="nav-link dropdown-toggle {{ request()->url() == url('page/' . $page->slug) ? 'active' : '' }}">{{ $locale == 'ar' ? $page->title_ar : $page->title }}</a>
                            </li>
                            @endif
                        @endforeach
                        @if(app()->getLocale() == 'en')
                        <li class="nav-item">
                            <a href="{{ route('set.locale', ['locale' => 'ar']) }}" class="nav-link">
                                ??????????????
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
                    <div class="side-nav three">
                        @if(auth()->guard('candidate')->check())
                        <a class="login-left" href="{{ route('candidate.dashboard') }}">
                            <!-- <i class="flaticon-enter"></i> -->
                            <i class='fa fa-dashboard'></i>
                            {{ __('locale.Dashboard') }}
                        </a>
                        @else
                        <a class="login-left" href="{{ route('candidate.login.form') }}">
                            <!-- <i class="flaticon-enter"></i> -->
                            <!-- <i class='bx bxs-door-open'></i> -->
                            <i class="fa-solid fa-door-open"></i>
                            {{ __('locale.Login') }}
                        </a>
                        @endif
                        <a class="job-right" href="{{ route('jobs') }}">
                            {{ __('locale.Find A Job') }}
                            <i class='fa fa-briefcase'></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
@endif