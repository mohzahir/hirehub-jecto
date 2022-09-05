<x-website-layout>


    @push('styles')

    @endpush

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>{{ __('locale.CV Writing') }}</h2>
                        <ul>
                            <li>
                                <img src="{{ asset('jecto/default/assets/img/home-three/title-img-two.png') }}" alt="Image">
                                <a href="{{ route('home') }}">{{ __('locale.Home') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                {{ __('locale.CV Writing') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <section class="work-area pb-70 pt-100">

        <div class="container">
            <div class="section-title">
                <span class="sub-title">{{ __('locale.Working Process') }}</span>
                <h2>{{ __('locale.See How It Works') }}</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="work-item">
                        <!-- <i class="flaticon-verify"></i> -->
                        <i class="fa-regular fa-calendar-plus"></i>
                        <span>{{ __('locale.STEP 01') }}</span>
                        <h3>{{ __('locale.Register An Account') }}</h3>
                        <p>Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="work-item">
                        <!-- <i class="flaticon-file"></i> -->
                        <i class="fa-solid fa-list-check"></i>
                        <span>{{ __('locale.STEP 02') }}</span>
                        <h3>{{ __('locale.Select your CV Category') }}</h3>
                        <p>Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into</p>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="work-item">
                        <!-- <i class="flaticon-comment"></i> -->
                        <i class="fa-sharp fa-solid fa-check"></i>
                        <span>{{ __('locale.STEP 03') }}</span>
                        <h3>{{ __('locale.Apply For CV Writing') }}</h3>
                        <p>Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into</p>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="company-area pb-70">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title three">
                        <!-- <div class="sub-title-wrap">
                            <img src="{{ asset('jecto/default/assets/img/home-three/title-img.png') }}" alt="Icon">
                            <span class="sub-title">Employers Offering Job</span>
                        </div> -->
                        <h2>{{ __('locale.Some Of CV Samples') }}</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="sorting-menu">
                        <ul>
                            <li class="filter mixitup-control-active" data-filter="all">{{ __('locale.All') }}</li>
                            @foreach($categories as $category)
                            <li class="filter" data-filter=".{{ $category->slug }}">{{ $locale == 'ar' ? $category->title_ar : $category->title }}</li>
                            @endforeach
                            <!-- <li class="filter" data-filter=".n">Most Viewed</li>
                            <li class="filter" data-filter=".o">Newest</li> -->

                        </ul>
                    </div>
                </div>
            </div>
            <div id="container" class="row" style="">
                @if($cv_samples->count() > 0)
                @foreach($cv_samples as $cv)
                <div class="col-sm-6 col-lg-3 mix {{ $cv->CVCategory->slug }}" style="">
                    <div class="location-item">
                        <div class="top">
                            <a href="{{ asset($cv->pdf) }}">
                                <img style="width: 100%; height: 100%" src="{{ asset($cv->photo) }}" alt="Location">
                            </a>
                        </div>
                        <!-- <span><a href="{{ asset($cv->pdf) }}">View PDF</a></span> -->
                        <h3>
                            <a href="{{ asset($cv->pdf) }}">{{ $locale == 'ar' ? $cv->title_ar : $cv->title }}</a>
                        </h3>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>



    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title three">
                <div class="sub-title-wrap">
                    <img  width="20px" height="14px" src="{{ asset($setting->logo1) }}" alt="Icon">
                    <span class="sub-title">{{ __('locale.Category') }}</span>
                </div>
                <h2>{{ __('locale.Get your CV Now') }}</h2>
            </div>
            <div class="row">
                @foreach($categories as $category)
                <div class="col-sm-6 col-lg-3">
                    <div class="pricing-item">
                        <div class="top">
                            <h3>{{ $locale == 'ar' ? $category->title_ar : $category->title }}</h3>
                            <span></span>
                        </div>
                        <div class="middle">
                            <h4><span class="span-left">$</span> {{ $category->cv_price_dollar }} - <span class="span-left">SDG</span> {{ $category->cv_price_sdg }}</h4>
                        </div>
                        <div class="end">
                            <!-- <ul>
                                <li>10 Job Posting</li>
                            </ul> -->
                            <div class="pb-3">
                                {!! $locale == 'ar' ? $category->features_ar : $category->features !!}
                            </div>
                            <a class="cmn-btn" href="{{ route('cv.writing.application', ['category' => $category->id]) }}">
                                {{ __('locale.Apply Now') }}
                                <i class="bx bx-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>




    <!-- <div class="post-job-area pb-100">
        <div class="container">
            <form>
                <div class="post-item">
                    <div class="section-title">
                        <h2>{{ __('locale.Get your CV Now') }}</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet placeat totam laboriosam ut labore aliquid veniam repellendus similique? Id molestiae pariatur molestias, alias quia sint autem nemo architecto facere asperiores.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>
                                    {{ __('locale.Category') }}:
                                </label>
                                <select style="display: none;">
                                    @foreach($categories as $category)
                                    <option>{{ $locale == 'ar' ? $category->title_ar : $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn">{{ __('locale.Apply Now') }}</button>
                </div>
            </form>
        </div>
    </div> -->












</x-website-layout>