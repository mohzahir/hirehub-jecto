<x-website-layout>


    @push('styles')

    @endpush

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>{{ __('locale.About') }}</h2>
                        <ul>
                            <li>
                                <img src="{{ asset('jecto/default/assets/img/home-three/title-img-two.png') }}" alt="Image">
                                <a href="{{ route('home') }}">{{ __('locale.Home') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                {{ __('locale.About') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="new-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="new-img">
                        <img src="{{ asset('jecto/default/assets/img/about.jpg') }}" alt="New">
                        <img src="{{ asset('jecto/default/assets/img/about-shape.png') }}" alt="New">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">{{ __('locale.Explore New Life') }}</span>
                            <h2>{{ __('locale.We Are A Team Of Experts In This Field') }}</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut tur incidunt laborequaerat voluptatem.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                        <a class="cmn-btn" href="{{ route('candidate.login.form') }}">
                            {{ __('locale.Get Started') }}
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="counter-area two pt-100">
        <div class="counter-shape">
            <img src="{{ asset('jecto/default/assets/img/home-one/banner/shape-bottom.png') }}" alt="Shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-hiring"></i>
                        <p>{{ __('locale.Candidates') }}</p>
                        <h3>
                            <span class="odometer" data-count="{{ $candidates_count }}">00</span>
                        </h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-candidate"></i>
                        <p>{{ __('locale.TOTAL JOBS') }}</p>
                        <h3>
                            <span class="odometer" data-count="{{ $jobPosts_count }}">00</span>
                        </h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-working-at-home"></i>
                        <p>{{ __('locale.EMPLOYERS') }}</p>
                        <h3>
                            <span class="odometer" data-count="{{ $companies_count }}">00</span>
                        </h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-choice"></i>
                        <p>{{ __('locale.JOB APPLICATIONS') }}</p>
                        <h3>
                            <span class="odometer" data-count="{{ $jobApplications_count }}">00</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="work-area pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">{{ __('locale.Our Possibilities') }}</span>
                <h2>{{ __('locale.Our Company Possibilities') }}</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="work-item">
                        <!-- <i class="flaticon-verify"></i> -->
                        <i class="fa fa-check"></i>
                        <span>01</span>
                        <h3>{{ $locale == "ar" ? $setting->feature1_title_ar : $setting->feature1_title }}</h3>
                        <p>{{ $locale == "ar" ? $setting->feature1_descr_ar : $setting->feature1_descr }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="work-item">
                        <!-- <i class="flaticon-file"></i> -->
                        <i class="fa fa-check"></i>
                        <span>02</span>
                        <h3>{{ $locale == "ar" ? $setting->feature2_title_ar : $setting->feature2_title }}</h3>
                        <p>{{ $locale == "ar" ? $setting->feature2_descr_ar : $setting->feature2_descr }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="work-item">
                        <!-- <i class="flaticon-comment"></i> -->
                        <i class="fa fa-check"></i>
                        <span>03</span>
                        <h3>{{ $locale == "ar" ? $setting->feature3_title_ar : $setting->feature3_title }}</h3>
                        <p>{{ $locale == "ar" ? $setting->feature3_descr_ar : $setting->feature3_descr }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="work-item">
                        <!-- <i class="flaticon-comment"></i> -->
                        <i class="fa fa-check"></i>
                        <span>04</span>
                        <h3>{{ $locale == "ar" ? $setting->feature4_title_ar : $setting->feature4_title }}</h3>
                        <p>{{ $locale == "ar" ? $setting->feature4_descr_ar : $setting->feature4_descr }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="work-item">
                        <!-- <i class="flaticon-comment"></i> -->
                        <i class="fa fa-check"></i>
                        <span>05</span>
                        <h3>{{ $locale == "ar" ? $setting->feature5_title_ar : $setting->feature5_title }}</h3>
                        <p>{{ $locale == "ar" ? $setting->feature5_descr_ar : $setting->feature5_descr }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="work-item">
                        <!-- <i class="flaticon-comment"></i> -->
                        <i class="fa fa-check"></i>
                        <span>06</span>
                        <h3>{{ $locale == "ar" ? $setting->feature6_title_ar : $setting->feature6_title }}</h3>
                        <p>{{ $locale == "ar" ? $setting->feature6_descr_ar : $setting->feature6_descr }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="explore-area ptb-100">
        <div class="container">
            <div class="explore-item">
                <div class="section-title">
                    <span class="sub-title">{{ __('locale.Explore New Life') }}</span>
                    <h2>{{ __('locale.Be Found Put Your Cv In Front Of Great Employers') }}</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut tur incidunt laborequaerat voluptatem.</p>
                <ul>
                    <li>
                        <a class="left-btn" href="{{ route('jobs') }}">
                            {{ __('locale.Find A Job') }}
                            <!-- <i class="flaticon-upload"></i> -->
                            <i class="fa fa-briefcase"></i>
                        </a>
                    </li>
                    <li>
                        <span>{{ __('locale.CEO Message') }}</span>
                        <a class="right-btn popup-youtube" href="https://www.youtube.com/watch?v=07d2dXHYb94&t=88s">
                            <i class='bx bx-play'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    @include('website.includes.testimonials')















</x-website-layout>