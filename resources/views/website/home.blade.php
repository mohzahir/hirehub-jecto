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
                                            <a href="#">{{ __('locale.Private Driver') }},</a>
                                        </li>
                                        <li>
                                            <a href="#">{{ __('locale.Security Guard') }},</a>
                                        </li>
                                        <li>
                                            <a href="#">{{ __('locale.Worker') }},</a>
                                        </li>
                                        <li>
                                            <a href="#">{{ __('locale.Delivery') }}</a>
                                        </li>
                                        <!-- <li>
                                            <a href="#">appASP.NET</a>
                                        </li> -->
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
            <p>{{ __('locale.Over') }} <span>15.000</span> {{ __('locale.supporter all over the world') }}</p>
            <div dir="ltr" class="support-slider owl-theme owl-carousel">
                @foreach($companies as $company)
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="support-item">
                    <img style="max-width: 150px; max-height: 50px" src="{{ asset($company->logo) }}" class="support-item-logo1" alt="Support">
                    <img style="max-width: 150px; max-height: 50px" src="{{ asset($company->logo) }}" class="support-item-logo2" alt="Support">
                </div>
                @endforeach

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
                            <!-- <i class="flaticon-appointment"></i> -->
                            <i class="fa-solid fa-calendar-check"></i>

                            {{ $featured_job_post->created_at }}/ {{ $locale == 'ar' ? $featured_job_post->country->name_ar : $featured_job_post->country->name }}, {{ $locale == 'ar' ? $featured_job_post->city->name_ar : $featured_job_post->city->name }}
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
                            <!-- <i class="flaticon-right-arrow"></i> -->
                            <i class="fa-solid fa-arrow-right-long"></i>
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
                            <!-- <i class="flaticon-upload"></i> -->
                            <i class="fa-solid fa-upload"></i>
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


    

    <section class="feature-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title three">
                <div class="sub-title-wrap">
                    <img src="{{ asset('jecto/default/assets/img/home-three/title-img.png') }}" alt="Icon">
                    <span class="sub-title">{{ __('locale.Job Categories') }}</span>
                </div>
                <h2>{{ __('locale.Featured Job Departments We Have') }}</h2>
            </div>
            <div class="row">
                @foreach($categories as $category)
                @if($category->type == 'job')
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <a href="{{ route('jobs', ['category_id' => array($category->id)]) }}">
                            <img style="max-width: 166px; max-height: 200px" src="{{ asset($category->photo) }}" alt="Feature">
                        </a>
                        <div class="bottom">
                            <h3>
                                <a href="{{ route('jobs', ['category_id' => array($category->id)]) }}">{{ $locale == 'ar' ? $category->title_ar : $category->title }}</a>
                            </h3>
                            <span>{{ $category->jobPosts->count() }} Jobs</span>
                            <!-- <i class="flaticon-verify"></i> -->
                            <i class="bx bx-list-check"></i>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="job-browse">
                <p>{{ __('locale.Jobs are waiting for you') }} <a href="{{ route('jobs') }}">{{ __('locale.Browse All Categories') }}</a></p>
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
                        <!-- <i class="flaticon-accounting"></i> -->
                        <i class="bx bx-book-bookmark"></i>
                        <h3>{{ __('locale.Apply For Job') }}</h3>
                        <p>{{ __('locale.apply for a job description') }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="work-item two">
                        <!-- <i class="flaticon-file"></i> -->
                        <i class="bx bxs-filter-alt"></i>
                        <h3>{{ __('locale.Filtering Applications') }}</h3>
                        <p>{{ __('locale.filtering applications description') }}</p>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="work-item two work-border">
                        <!-- <i class="flaticon-businessman-paper-of-the-application-for-a-job"></i> -->
                        <i class="bx bx-phone"></i>
                        <h3>{{ __('locale.Contact For Interview') }}</h3>
                        <p>{{ __('locale.contact for interview description') }}
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
                        <span class="sub-title">{{ __('locale.Workshops') }}</span>
                        <h2>{{ __('locale.Employment Clinic Workshops') }}</h2>
                    </div>
                </div>
                
            </div>
            <div id="container" class="row">
                @foreach($workshops as $workshop)
                <div class="col-sm-6 col-lg-12">
                    <div class="job-item">
                        <a href="{{ route('workshop.details', ['running_workshop' => $workshop->id]) }}">
                            <div class="feature-top-right">
                                <span>{{ __('locale.Featured') }}</span>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="job-left">
                                        <img style="max-width: 61px; max-height: 79px" src="{{ asset($workshop->workshop->img) }}" alt="Brand">
                                        <h3>{{ $locale == 'ar' ? $workshop->workshop->title_ar : $workshop->workshop->title }}</h3>
                                        <p>{{ $locale == 'ar' ? $workshop->workshop->trainer_name_ar: $workshop->workshop->trainer_name }}</p>
                                        <ul>
                                            <li><b>$</b>{{ $workshop->price_dollar }} /</li>
                                            <li><b>SDG</b>{{ $workshop->price_sdg }} /</li>
                                            <li>
                                                <!-- <i class="flaticon-appointment"></i> -->
                                                <i class="fa-solid fa-calendar-check"></i>
                                                {{ $workshop->start_date }}
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                {{ $workshop->location }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="job-right">
                                        <ul>
                                            <li>
                                                <i class="flaticon-customer"></i>
                                                {{ __('locale.Lecture Hours') . ' : ' . $workshop->lecture_hours }}
                                            </li>
                                            <li>
                                                <i class="flaticon-mortarboard"></i>
                                                {{ __('locale.Total Hours') . ' : ' . $workshop->total_hours }}
                                            </li>
                                            <li>
                                                <span>{{ $locale == 'ar' ? $workshop->workshop->category->title_ar : $workshop->workshop->category->title }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="job-browse">
                <p>{{ __('locale.More of workshops are waiting for you') }} <a href="{{ route('workshops') }}">{{ __('locale.Browse All Workshops') }}</a></p>
            </div>
        </div>
    </section>














    @include('website.includes.cv-writing-samples')
    






    <section class="location-area pb-70 ">
        <div class="container-fluid">
            <div class="row">
                @foreach($countries_has_jobs as $country)
                <div class="col-sm-6 col-lg-3">
                    <div class="location-item">
                        <div class="top">
                            <a href="{{ route('jobs', ['country_id' => [$country->id]]) }}">
                                <img src="{{ asset($country->photo) }}" alt="Location">
                            </a>
                        </div>
                        <span>{{ $country->jobPosts->count() }} {{ __('locale.Open Job') }}</span>
                        <h3>
                            <a href="{{ route('jobs', ['country_id' => [$country->id]]) }}">{{ $locale == 'ar' ? $country->name_ar : $country->name }}</a>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- <section class="testimonial-area pb-100">
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
    </section> -->


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
                            <!-- <i class="flaticon-right-arrow one"></i> -->
                            <i class="fa-solid fa-arrow-right-long"></i>
                            {{ __('locale.Browse All Blogs') }}
                            <!-- <i class="flaticon-right-arrow two"></i> -->
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="{{ route('blog.details', ['blog' => $blog->id]) }}">
                                <img src="{{ asset($blog->photo) }}" alt="Blog">
                            </a>
                        </div>
                        <span>{{ $blog->user->name }}. {{ $blog->created_at }}</span>
                        <h3>
                            <a href="{{ route('blog.details', ['blog' => $blog->id]) }}">{{ $locale == 'ar' ? $blog->title_ar : $blog->title }} </a>
                        </h3>
                        <div class="cmn-link">
                            <a href="{{ route('blog.details', ['blog' => $blog->id]) }}">
                                <!-- <i class="flaticon-right-arrow one"></i> -->
                                <i class="fa-solid fa-arrow-right-long one"></i>
                                {{ __('locale.Learn More') }}
                                <!-- <i class="flaticon-right-arrow two"></i> -->
                                <i class="fa-solid fa-arrow-right-long two"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-4 col-lg-4">
                    <div class="register-item">
                        <h3>
                            <span class="odometer" data-count="{{ \App\Models\JobApplication::count() }}">00</span>
                        </h3>
                        <p>{{ __('locale.JOB APPLICATIONS') }}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4">
                    <div class="register-item">
                        <h3>
                            <span class="odometer" data-count="{{ \App\Models\Company::count() }}">00</span>
                        </h3>
                        <p>{{ __('locale.EMPLOYERS') }}</p>
                    </div>
                </div>
                <div class="col-6 offset-4 offset-sm-0 col-sm-4 col-lg-4">
                    <div class="register-item">
                        <h3>
                            <span class="odometer" data-count="{{ \App\Models\Job::count() }}">00</span>
                        </h3>
                        <p>{{ __('locale.TOTAL JOBS') }}</p>
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