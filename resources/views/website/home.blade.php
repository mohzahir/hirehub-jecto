<x-website-layout>


    <div class="banner-area two">
        <div class="banner-shape-two">
            <img src="{{ asset('jecto/default/assets/img/home-two/banner-shape.png') }}" alt="Shape">
            <img src="{{ asset('jecto/default/assets/img/home-two/banner-bottom-shape.png') }}" alt="Shape">
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="banner-content two">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <p>{{ __('locale.We have') }} 280,000+ {{ __('locale.live jobs') }}</p>
                                <h1>{{ __('locale.Next Future Job Waiting For You Hold It!') }}</h1>
                                <div class="banner-form-area">
                                    <form action="{{ route('jobs') }}" method="get">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>
                                                        <i class='bx bx-search'></i>
                                                    </label>
                                                    <input type="text" name="search_text" class="form-control" placeholder="{{ __('locale.Search Your Job') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <select name="category_id[]">
                                                        <option value="">{{ __('locale.All Categories') }}</option>
                                                        @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $locale == 'ar' ? $category->title_ar : $category->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group two">
                                                    <label>
                                                        <i class='bx bx-location-plus'></i>
                                                    </label>
                                                    <select name="country_id[]">
                                                        <option value="">{{ __('locale.Location') }}</option>
                                                        @foreach($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $locale == 'ar' ? $country->name_ar : $country->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <!-- <input type="text" name="search_text" class="form-control" placeholder="{{ __('locale.location') }}"> -->
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn">
                                            {{ __('locale.Search Job') }}
                                            <i class='bx bx-search'></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="banner-key">
                                    <ul>
                                        <li>
                                            <span>{{ __('locale.Trending Keywords') }}</span>
                                        </li>
                                        <li>
                                            <a href="#">Account Manager,</a>
                                        </li>
                                        <li>
                                            <a href="#">Administrative,</a>
                                        </li>
                                        <li>
                                            <a href="#">Android,</a>
                                        </li>
                                        <li>
                                            <a href="#">Angular,</a>
                                        </li>
                                        <li>
                                            <a href="#">appASP.NET</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-img-two">
                        <img src="{{ asset('jecto/default/assets/img/home-two/banner-main.png') }}" alt="Banner">
                        <img src="{{ asset('jecto/default/assets/img/home-two/banner1.png') }}" alt="Banner">
                        <img src="{{ asset('jecto/default/assets/img/home-two/banner2.png') }}" alt="Banner">
                        <img src="{{ asset('jecto/default/assets/img/home-two/banner3.png') }}" alt="Banner">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="support-area pb-100">
        <div class="container">
            <p>{{ __('locale.Over') }} <span>1500.000</span> {{ __('locale.supporter all over the world') }}</p>
            <div dir="ltr" class="support-slider owl-theme owl-carousel">
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="support-item">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support1.png') }}" class="support-item-logo1" alt="Support">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support-style1.png') }}" class="support-item-logo2" alt="Support">
                </div>
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="support-item">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support2.png') }}" class="support-item-logo1" alt="Support">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support-style2.png') }}" class="support-item-logo2" alt="Support">
                </div>
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="support-item">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support3.png') }}" class="support-item-logo1" alt="Support">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support-style3.png') }}" class="support-item-logo2" alt="Support">
                </div>
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="support-item">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support4.png') }}" class="support-item-logo1" alt="Support">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support-style4.png') }}" class="support-item-logo2" alt="Support">
                </div>
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="support-item">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support5.png') }}" class="support-item-logo1" alt="Support">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support-style5.png') }}" class="support-item-logo2" alt="Support">
                </div>
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="support-item">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support6.png') }}" class="support-item-logo1" alt="Support">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support-style6.png') }}" class="support-item-logo2" alt="Support">
                </div>
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="support-item">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support1.png') }}" class="support-item-logo1" alt="Support">
                    <img src="{{ asset('jecto/default/assets/img/home-two/support-style1.png') }}" class="support-item-logo2" alt="Support">
                </div>
            </div>
        </div>
    </div>


    <section class="company-area two pb-100">
        <div class="container-fluid">
            <div class="section-title two">
                <span class="sub-title">{{ __('locale.Employers Offering Job') }}</span>
                <h2>{{ __('locale.Most Featured Jobs') }}</h2>
            </div>
            <div dir="ltr" class="company-slider owl-theme owl-carousel">
                @foreach($featured_job_posts as $featured_job_post)
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="company-item two">
                    <div class="feature-top-right">
                        <span>{{ __('locale.Featured') }}</span>
                    </div>
                    <div class="top">
                        <a href="{{ route('job.details', ['job_post' => $featured_job_post->id]) }}">
                            <img src="{{ asset('jecto/default/assets/img/home-one/company1.png') }}" alt="Brand">
                        </a>
                        <h3>
                            <a href="{{ route('job.details', ['job_post' => $featured_job_post->id]) }}">{{ $locale == 'ar' ? $featured_job_post->title_ar : $featured_job_post->title }}</a>
                        </h3>
                        <span>{{ __("locale.$featured_job_post->job_type") }}</span>
                        <p>
                            <i class="flaticon-appointment"></i>
                            @php 
                                $dt = \Carbon\Carbon::now();
                                $dt2 = new \Carbon\Carbon($featured_job_post->created_at);
                                $time = $dt2->diffForHumans($dt)
                            @endphp 
                            {{ $time }}/ {{ $locale == 'ar' ? $featured_job_post->country->name_ar : $featured_job_post->country->name }}, {{ $locale == 'ar' ? $featured_job_post->city->name_ar : $featured_job_post->city->name }}
                        </p>
                    </div>
                    <div class="bottom">
                        <ul>
                            <!-- <li>Pay Relocation Free</li> -->
                            <!-- <li>Remote Work</li> -->
                            <li>{{ __('locale.Experience') }}: {{ $featured_job_post->experience }} {{ __('locale.years') }}</li>
                            <li>{{ __('locale.Duration') }}: {{ $featured_job_post->duration }} {{ __('locale.years') }}</li>
                        </ul>
                        <span>{{ __('locale.Salary') }}</span>
                        <h4>${{ $featured_job_post->salary_from }} - ${{ $featured_job_post->salary_to }}</h4>
                        <a href="employer-details.html">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- <section id="job" class="employer-area pb-100">
        <div class="container">
            <div class="section-title three">
                <div class="sub-title-wrap">
                    <img src="assets/img/home-three/title-img.png" alt="Icon">
                    <span class="sub-title">Employers Offering Job</span>
                </div>
                <h2>Company Offering Job</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="employer-item">
                        <a href="job-details.html">
                            <img src="assets/img/home-one/job1.png" alt="Employer">
                            <h3>Product Designer</h3>
                            <ul>
                                <li>
                                    <i class="flaticon-send"></i>
                                    Los Angeles, CS, USA
                                </li>
                                <li>5 months ago</li>
                            </ul>
                            <p>We are Looking for a skilled Ul/UX designer amet conscu adiing elitsed do eusmod tempor</p>
                            <span class="span-one">Accounting</span>
                            <span class="span-two">FULL TIME</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="employer-item">
                        <a href="blog-details.html">
                            <img src="assets/img/home-one/job2.png" alt="Employer">
                            <h3>Sr. Shopify Developer</h3>
                            <ul>
                                <li>
                                    <i class="flaticon-send"></i>
                                    Houston, TX, USA
                                </li>
                                <li>4 months ago</li>
                            </ul>
                            <p>Responsible for managing skilled Ul/UX designer amet conscu adiing elitsed do eusmod</p>
                            <span class="span-one">Accounting</span>
                            <span class="span-two two">FULL TIME</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a href="job-details.html">
                        <div class="employer-item">
                            <img src="assets/img/home-one/job3.png" alt="Employer">
                            <h3>Tax Manager</h3>
                            <ul>
                                <li>
                                    <i class="flaticon-send"></i>
                                    Ho Chi Minh City, Vietnam
                                </li>
                                <li>6 months ago</li>
                            </ul>
                            <p>International collaborative a skilled Ul/UX designer amet conscu adiing elitsed do eusmod</p>
                            <span class="span-one two">Broardcasting</span>
                            <span class="span-two three">FREELANCER</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="employer-item">
                        <a href="job-details.html">
                            <img src="assets/img/home-one/job4.png" alt="Employer">
                            <h3>Senior Data Engineer</h3>
                            <ul>
                                <li>
                                    <i class="flaticon-send"></i>
                                    Cardiss, UK
                                </li>
                                <li>9 months ago</li>
                            </ul>
                            <p>International collaborative designer amet conscu adiing elitsed do eusmod tempor</p>
                            <span class="span-one three">Web & Software Dev</span>
                            <span class="span-two four">REMOTE</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="employer-item">
                        <a href="job-details.html">
                            <img src="assets/img/home-one/job5.png" alt="Employer">
                            <h3>Construction Worker</h3>
                            <ul>
                                <li>
                                    <i class="flaticon-send"></i>
                                    Adelaide SA, Australia
                                </li>
                                <li>10 months ago</li>
                            </ul>
                            <p>We are Looking for a skilled Ul/UX designer amet conscu adiing elitsed do eusmod tempor</p>
                            <span class="span-one">Accounting</span>
                            <span class="span-two">FULL TIME</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="employer-item">
                        <a href="job-details.html">
                            <img src="assets/img/home-one/job6.png" alt="Employer">
                            <h3>Product Manager</h3>
                            <ul>
                                <li>
                                    <i class="flaticon-send"></i>
                                    Warangal, Telangana, India
                                </li>
                                <li>2 months ago</li>
                            </ul>
                            <p>Wind Power Engineering Manager amet conscu adiing elitsed do eusmod tempor</p>
                            <span class="span-one four">Customer Service</span>
                            <span class="span-two">FULL TIME</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="job-browse">
                <p>A tons of top tech jobs are waiting for you. <a href="jobs.html">Browse all jobs</a></p>
            </div>
        </div>
    </section> -->

    <section class="explore-area two ptb-100">
        <div class="container">
            <div class="explore-item">
                <div class="section-title">
                    <span class="sub-title">{{ __('locale.Explore New Life') }}</span>
                    <h2>{{ __('locale.Be Found Put Your Cv In Front Of Great Employers') }}</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut tur incidunt laborequaerat voluptatem.</p>
                <ul>
                    <li>
                        <a class="left-btn" href="#">
                            {{ __('locale.Upload Your Resume') }}
                            <i class="flaticon-upload"></i>
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
            <div class="explore-img">
                <img src="{{ asset('jecto/default/assets/img/home-two/explore-main.png') }}" alt="Explore">
            </div>
        </div>
    </section>


    <div class="categories-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="flaticon-placeholder"></i>
                            {{ __('locale.Job By Location') }}
                            <i class="flaticon-right-arrow two"></i>
                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="flaticon-resume"></i>
                            {{ __('locale.Jobs By Roles') }}
                            <i class="flaticon-right-arrow two"></i>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <i class="flaticon-pencil"></i>
                            {{ __('locale.Jobs By Skills') }}
                            <i class="flaticon-right-arrow two"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat1.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Sr. Shopify Developer</a>
                                        </h3>
                                        <span>2 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat2.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Senior Data Engineer</a>
                                        </h3>
                                        <span>1 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat3.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Construction Worker</a>
                                        </h3>
                                        <span>5 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat4.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Product Designer</a>
                                        </h3>
                                        <span>3 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat5.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Max manager</a>
                                        </h3>
                                        <span>4 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat6.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Web Designer</a>
                                        </h3>
                                        <span>4 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat7.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">UX/UI Designer</a>
                                        </h3>
                                        <span>2 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat8.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Area Manager</a>
                                        </h3>
                                        <span>1 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat9.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Sales Man</a>
                                        </h3>
                                        <span>10 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat10.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Shop Caretaker</a>
                                        </h3>
                                        <span>4 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat11.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Management Support</a>
                                        </h3>
                                        <span>15 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat12.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Electric Technician</a>
                                        </h3>
                                        <span>4 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat1.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Sr. Shopify Developer</a>
                                        </h3>
                                        <span>2 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat2.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Senior Data Engineer</a>
                                        </h3>
                                        <span>1 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat3.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Construction Worker</a>
                                        </h3>
                                        <span>5 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat4.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Product Designer</a>
                                        </h3>
                                        <span>3 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat5.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Max manager</a>
                                        </h3>
                                        <span>4 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat6.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Web Designer</a>
                                        </h3>
                                        <span>4 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat7.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">UX/UI Designer</a>
                                        </h3>
                                        <span>2 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat8.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Area Manager</a>
                                        </h3>
                                        <span>1 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat9.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Sales Man</a>
                                        </h3>
                                        <span>10 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat1.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Sr. Shopify Developer</a>
                                        </h3>
                                        <span>2 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat2.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Senior Data Engineer</a>
                                        </h3>
                                        <span>1 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat3.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Construction Worker</a>
                                        </h3>
                                        <span>5 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat4.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Product Designer</a>
                                        </h3>
                                        <span>3 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat5.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Max manager</a>
                                        </h3>
                                        <span>4 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="cat-item">
                                        <img src="{{ asset('jecto/default/assets/img/home-two/cat6.png') }}" alt="Cat">
                                        <h3>
                                            <a href="#">Web Designer</a>
                                        </h3>
                                        <span>4 Job</span>
                                        <a class="link" href="#">
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="feature-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title three">
                <div class="sub-title-wrap">
                    <img src="{{ asset('jecto/default/assets/img/home-three/title-img.png') }}" alt="Icon">
                    <span class="sub-title">{{ __('locale.Employers Offering Job') }}</span>
                </div>
                <h2>{{ __('locale.Here are Features Categories') }}</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <a href="job-details.html">
                            <img src="{{ asset('jecto/default/assets/img/home-three/feature1.png') }}" alt="Feature">
                        </a>
                        <div class="bottom">
                            <h3>
                                <a href="job-details.html">Accounting</a>
                            </h3>
                            <span>5 Jobs</span>
                            <i class="flaticon-verify"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <a href="job-details.html">
                            <img src="{{ asset('jecto/default/assets/img/home-three/feature2.png') }}" alt="Feature">
                        </a>
                        <div class="bottom">
                            <h3>
                                <a href="job-details.html">Digital Marketing</a>
                            </h3>
                            <span>2 Jobs</span>
                            <i class="flaticon-verify"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <a href="job-details.html">
                            <img src="{{ asset('jecto/default/assets/img/home-three/feature3.png') }}" alt="Feature">
                        </a>
                        <div class="bottom">
                            <h3>
                                <a href="job-details.html">Customer Service</a>
                            </h3>
                            <span>4 Jobs</span>
                            <i class="flaticon-verify"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <a href="job-details.html">
                            <img src="{{ asset('jecto/default/assets/img/home-three/feature4.png') }}" alt="Feature">
                        </a>
                        <div class="bottom">
                            <h3>
                                <a href="job-details.html">Broadcasting</a>
                            </h3>
                            <span>1 Job</span>
                            <i class="flaticon-verify"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <a href="job-details.html">
                            <img src="{{ asset('jecto/default/assets/img/home-three/feature5.png') }}" alt="Feature">
                        </a>
                        <div class="bottom">
                            <h3>
                                <a href="job-details.html">Sale Assistance</a>
                            </h3>
                            <span>5 Jobs</span>
                            <i class="flaticon-verify"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <a href="job-details.html">
                            <img src="{{ asset('jecto/default/assets/img/home-three/feature6.png') }}" alt="Feature">
                        </a>
                        <div class="bottom">
                            <h3>
                                <a href="job-details.html">Teachers</a>
                            </h3>
                            <span>2 Job</span>
                            <i class="flaticon-verify"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="job-browse">
                <p>Jobs are waiting for you <a href="jobs.html">Browse all Categories</a></p>
            </div>
        </div>
    </section>

    <section class="work-area two pb-70">
        <div class="container">
            <div class="section-title two">
                <span class="sub-title">{{ __('locale.Working Process') }}</span>
                <h2>{{ __('locale.See How It Works') }}</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="work-item two">
                        <i class="flaticon-accounting"></i>
                        <h3>{{ __('locale.Register An Account') }}</h3>
                        <p>Lorem ipsum dolor sit amet conscu adiing elitsed do eusmod tempor incidunt utinto elit sed doe</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="work-item two">
                        <i class="flaticon-file"></i>
                        <h3>{{ __('locale.Search Your Job') }}</h3>
                        <p>Lorem ipsum dolor sit amet conscu adiing elitsed do eusmod tempor incidunt utinto elit sed doe</p>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="work-item two work-border">
                        <i class="flaticon-businessman-paper-of-the-application-for-a-job"></i>
                        <h3>{{ __('locale.Apply For Job') }}</h3>
                        <p>Lorem ipsum dolor sit amet conscu adiing elitsed do eusmod tempor incidunt utinto elit sed doe</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="job-area two ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title">
                        <span class="sub-title">Desire Jobs</span>
                        <h2>Job You Will Love</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sorting-menu">
                        <ul>
                            <li class="filter" data-filter="all">All</li>
                            <li class="filter" data-filter=".m">Internship</li>
                            <li class="filter" data-filter=".n">Full Time</li>
                            <li class="filter" data-filter=".o">Part Time</li>
                            <li class="filter" data-filter=".p">Remote</li>
                            <li class="filter" data-filter=".u">Freelancer</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="container" class="row">
                <div class="col-sm-6 col-lg-12 mix n">
                    <div class="job-item">
                        <a href="job-details.html">
                            <div class="feature-top-right">
                                <span>Featured</span>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="job-left">
                                        <img src="{{ asset('jecto/default/assets/img/home-one/job1.png') }}" alt="Brand">
                                        <h3>Product Designer</h3>
                                        <p>Digital Radio</p>
                                        <ul>
                                            <li>$500 - $1,000 /</li>
                                            <li>month /</li>
                                            <li>
                                                <i class="flaticon-appointment"></i>
                                                8 months ago
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Seoul, South Korea
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="job-right">
                                        <ul>
                                            <li>
                                                <i class="flaticon-customer"></i>
                                                Full Time
                                            </li>
                                            <li>
                                                <i class="flaticon-mortarboard"></i>
                                                Master
                                            </li>
                                            <li>
                                                <span>Add to bookmarks</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-12 mix o">
                    <div class="job-item">
                        <a href="job-details.html">
                            <div class="feature-top-right">
                                <span>Featured</span>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="job-left">
                                        <img src="{{ asset('jecto/default/assets/img/home-one/job2.png') }}" alt="Brand">
                                        <h3>Construction Worker</h3>
                                        <p>Digital Vine</p>
                                        <ul>
                                            <li>$600 - $2,000 /</li>
                                            <li>month /</li>
                                            <li>
                                                <i class="flaticon-appointment"></i>
                                                6 months ago
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Kabul, Afghanistan
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="job-right">
                                        <ul>
                                            <li>
                                                <i class="flaticon-customer"></i>
                                                Part Time
                                            </li>
                                            <li>
                                                <i class="flaticon-mortarboard"></i>
                                                Master
                                            </li>
                                            <li>
                                                <span>Add to bookmarks</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-12 mix m">
                    <div class="job-item">
                        <a href="job-details.html">
                            <div class="feature-top-right">
                                <span>Featured</span>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="job-left">
                                        <img src="{{ asset('jecto/default/assets/img/home-one/job3.png') }}" alt="Brand">
                                        <h3>Sr. Shopify Developer</h3>
                                        <p>Codex Info</p>
                                        <ul>
                                            <li>$400 - $1,500 /</li>
                                            <li>month /</li>
                                            <li>
                                                <i class="flaticon-appointment"></i>
                                                1 months ago
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Buenos Aires, Argentina
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="job-right">
                                        <ul>
                                            <li>
                                                <i class="flaticon-customer"></i>
                                                Internship
                                            </li>
                                            <li>
                                                <i class="flaticon-mortarboard"></i>
                                                Master
                                            </li>
                                            <li>
                                                <span>Add to bookmarks</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-12 mix p">
                    <div class="job-item">
                        <a href="job-details.html">
                            <div class="feature-top-right">
                                <span>Featured</span>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="job-left">
                                        <img src="{{ asset('jecto/default/assets/img/home-one/job4.png') }}" alt="Brand">
                                        <h3>Tax Manager</h3>
                                        <p>Techno Vino</p>
                                        <ul>
                                            <li>$450 - $1,250 /</li>
                                            <li>month /</li>
                                            <li>
                                                <i class="flaticon-appointment"></i>
                                                4 months ago
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Vienna, Australia
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="job-right">
                                        <ul>
                                            <li>
                                                <i class="flaticon-customer"></i>
                                                Remote
                                            </li>
                                            <li>
                                                <i class="flaticon-mortarboard"></i>
                                                Master
                                            </li>
                                            <li>
                                                <span>Add to bookmarks</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-12 mix u">
                    <div class="job-item">
                        <a href="job-details.html">
                            <div class="feature-top-right">
                                <span>Featured</span>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="job-left">
                                        <img src="{{ asset('jecto/default/assets/img/home-one/job5.png') }}" alt="Brand">
                                        <h3>Senior Data Engineer</h3>
                                        <p>Jarmin Poin</p>
                                        <ul>
                                            <li>$700 - $1,500 /</li>
                                            <li>month /</li>
                                            <li>
                                                <i class="flaticon-appointment"></i>
                                                2 months ago
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Tirana, Albania
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="job-right">
                                        <ul>
                                            <li>
                                                <i class="flaticon-customer"></i>
                                                Freelancer
                                            </li>
                                            <li>
                                                <i class="flaticon-mortarboard"></i>
                                                Master
                                            </li>
                                            <li>
                                                <span>Add to bookmarks</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="job-browse">
                <p>{{ __('locale.A tons of top tech jobs are waiting for you.') }} <a href="jobs.html">{{ __('locale.Browse all jobs') }}</a></p>
            </div>
        </div>
    </section>


    <section class="candidate-area pb-100">
        <div class="container">
            <div class="section-title two">
                <span class="sub-title">{{ __('locale.Working Process') }}</span>
                <h2>{{ __('locale.Our Candidates') }}</h2>
            </div>
            <div dir="ltr" class="candidate-slider owl-theme owl-carousel">
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="candidate-item">
                    <div class="left">
                        <h3>
                            <a href="candidate-details.html">Arielle Terry</a>
                        </h3>
                        <span>Web Developer</span>
                        <p>I’m IRanin dolor sit amet conscu adiing elitsed eusmod tempor</p>
                        <ul>
                            <li>Php</li>
                            <li>jQuery</li>
                            <li>WordPress</li>
                            <li>CSS3</li>
                            <li>HTML5</li>
                        </ul>
                        <div class="cmn-link">
                            <a href="single-resume.html">
                                <i class="flaticon-right-arrow one"></i>
                                View Resume
                                <i class="flaticon-right-arrow two"></i>
                            </a>
                        </div>
                    </div>
                    <img src="{{ asset('jecto/default/assets/img/home-two/candidate1.jpg') }}" alt="Candidate">
                </div>
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="candidate-item">
                    <div class="left">
                        <h3>
                            <a href="candidate-details.html">Alexander Max</a>
                        </h3>
                        <span>Senior UX/UI Designer</span>
                        <p>I’m Max dolor sit amet conscu adiing elitsed eusmod tempor</p>
                        <ul>
                            <li>CSS</li>
                            <li>Creative</li>
                            <li>Photoshop</li>
                            <li>Illustrator</li>
                            <li>HTML5</li>
                        </ul>
                        <div class="cmn-link">
                            <a href="single-resume.html">
                                <i class="flaticon-right-arrow one"></i>
                                View Resume
                                <i class="flaticon-right-arrow two"></i>
                            </a>
                        </div>
                    </div>
                    <img src="{{ asset('jecto/default/assets/img/home-two/candidate2.jpg') }}" alt="Candidate">
                </div>
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="candidate-item">
                    <div class="left">
                        <h3>
                            <a href="candidate-details.html">Tom Henry</a>
                        </h3>
                        <span>SEO</span>
                        <p>I’m Max dolor sit amet conscu adiing elitsed eusmod tempor</p>
                        <ul>
                            <li>CSS</li>
                            <li>Creative</li>
                            <li>Photoshop</li>
                            <li>Illustrator</li>
                            <li>HTML5</li>
                        </ul>
                        <div class="cmn-link">
                            <a href="single-resume.html">
                                <i class="flaticon-right-arrow one"></i>
                                View Resume
                                <i class="flaticon-right-arrow two"></i>
                            </a>
                        </div>
                    </div>
                    <img src="{{ asset('jecto/default/assets/img/home-two/candidate3.jpg') }}" alt="Candidate">
                </div>
            </div>
            <div class="candidate-browse">
                <p>{{ __('locale.Browse all talent') }} <a href="candidates.html">{{ __('locale.Candidates') }}</a></p>
            </div>
        </div>
    </section>


    <section class="location-area pb-70">
        <div class="container-fluid">
            <div class="row">
                @foreach($countries_has_jobs as $country)
                <div class="col-sm-6 col-lg-3">
                    <div class="location-item">
                        <div class="top">
                            <a href="#">
                                <img src="{{ asset($country->photo) }}" alt="Location">
                            </a>
                        </div>
                        <span>{{ $country->jobPosts->count() }} {{ __('locale.Open Job') }}</span>
                        <h3>
                            <a href="#">{{ $locale == 'ar' ? $country->name_ar : $country->name }}</a>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="testimonial-area pb-100">
        <div class="container">
            <div class="section-title two">
                <span class="sub-title">{{ __('locale.Testimonials') }}</span>
                <h2>{{ __('locale.What Our Customers Say About Us') }}</h2>
            </div>
            <div dir="ltr" class="testimonial-slider owl-theme owl-carousel">
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="testimonial-item">
                    <img src="{{ asset('jecto/default/assets/img/home-two/testimonial1.jpg') }}" alt="Testimonial">
                    <p>Awesome dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud</p>
                    <h3>Devit M.Kolin</h3>
                    <span>CEO & Founder</span>
                </div>
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="testimonial-item">
                    <img src="{{ asset('jecto/default/assets/img/home-two/testimonial2.jpg') }}" alt="Testimonial">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                    <h3>Tom Henry</h3>
                    <span>Director</span>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-area two pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-title two">
                        <span class="sub-title">{{ __('locale.Our Blogs') }}</span>
                        <h2>{{ __('locale.Recent News Post') }}</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cmn-link">
                        <a href="blog.html">
                            <i class="flaticon-right-arrow one"></i>
                            {{ __('locale.Browse All Blogs') }}
                            <i class="flaticon-right-arrow two"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="blog-details.html">
                                <img src="{{ asset('jecto/default/assets/img/home-one/blog1.jpg') }}" alt="Blog">
                            </a>
                        </div>
                        <span>Job skills. 12-09-2020</span>
                        <h3>
                            <a href="blog-details.html">The Internet Is A Job Seeker Most Crucial Success </a>
                        </h3>
                        <div class="cmn-link">
                            <a href="blog-details.html">
                                <i class="flaticon-right-arrow one"></i>
                                {{ __('locale.Learn More') }}
                                <i class="flaticon-right-arrow two"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="blog-details.html">
                                <img src="{{ asset('jecto/default/assets/img/home-one/blog2.jpg') }}" alt="Blog">
                            </a>
                        </div>
                        <span>Career advice. 11-09-2020</span>
                        <h3>
                            <a href="blog-details.html">Today From Connecting With Potential Employers</a>
                        </h3>
                        <div class="cmn-link">
                            <a href="blog-details.html">
                                <i class="flaticon-right-arrow one"></i>
                                Learn More
                                <i class="flaticon-right-arrow two"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="blog-details.html">
                                <img src="{{ asset('jecto/default/assets/img/home-one/blog3.jpg') }}" alt="Blog">
                            </a>
                        </div>
                        <span>Future plan. 10-09-2020</span>
                        <h3>
                            <a href="blog-details.html">We’ve Weeded Through Hundreds Of Job Hunting</a>
                        </h3>
                        <div class="cmn-link">
                            <a href="blog-details.html">
                                <i class="flaticon-right-arrow one"></i>
                                Learn More
                                <i class="flaticon-right-arrow two"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-4 col-lg-4">
                    <div class="register-item">
                        <h3>
                            <span class="odometer" data-count="6,789,990">00</span>
                        </h3>
                        <p>{{ __('locale.Registered Users') }}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4">
                    <div class="register-item">
                        <h3>
                            <span class="odometer" data-count="8,098,234">00</span>
                        </h3>
                        <p>{{ __('locale.Global Employers') }}</p>
                    </div>
                </div>
                <div class="col-6 offset-4 offset-sm-0 col-sm-4 col-lg-4">
                    <div class="register-item">
                        <h3>
                            <span class="odometer" data-count="3,678,890">00</span>
                        </h3>
                        <p>{{ __('locale.Available Jobs') }}</p>
                    </div>
                </div>
            </div>
            <ul>
                <li>
                    <a href="#" target="_blank">
                        <img src="{{ asset('jecto/default/assets/img/home-one/app1.png') }}" alt="App">
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <img src="{{ asset('jecto/default/assets/img/home-one/app2.png') }}" alt="App">
                    </a>
                </li>
            </ul>
        </div>
    </div>


</x-website-layout>