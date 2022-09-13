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
                        @foreach($cv_categories as $category)
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