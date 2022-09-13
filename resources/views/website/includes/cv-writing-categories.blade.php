<section class="pricing-area pt-100 pb-70">
    <div class="container">
        <div class="section-title three">
            <div class="sub-title-wrap">
                <img  width="20px" height="14px" src="{{ asset($setting->logo1) }}" alt="Icon">
                <span class="sub-title">{{ __('locale.CV Category') }}</span>
            </div>
            <h2>{{ __('locale.Get your CV Now') }}</h2>
        </div>
        <div class="row">
            @foreach($cv_categories as $cv_category)
            <div class="col-sm-6 col-lg-3">
                <div class="pricing-item">
                    <div class="top">
                        <h3>{{ $locale == 'ar' ? $cv_category->title_ar : $cv_category->title }}</h3>
                        <span></span>
                    </div>
                    <div class="middle">
                        <h4><span class="span-left">$</span> {{ $cv_category->cv_price_dollar }} - <span class="span-left">SDG</span> {{ $cv_category->cv_price_sdg }}</h4>
                    </div>
                    <div class="end">
                        <!-- <ul>
                            <li>10 Job Posting</li>
                        </ul> -->
                        <div class="pb-3">
                            {!! $locale == 'ar' ? $cv_category->features_ar : $cv_category->features !!}
                        </div>
                        <a class="cmn-btn" href="{{ route('cv.writing.application', ['category' => $cv_category->id]) }}">
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