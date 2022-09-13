<div class="container">
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <div class="footer-item three">
                <div class="footer-logo">
                    <a class="logo" href="index.html">
                        <a class="logo" href="index.html">
                            <img style="width: 154px; height: 39px" src="{{ $setting->logo1 }}" class="logo-one" alt="Logo">
                            <img style="width: 154px; height: 39px" src="{{ $setting->logo2 }}" class="logo-two" alt="Logo">
                        </a>
                    </a>
                    <ul>
                        <li>
                            <span>{{ __('locale.Address') }}: </span>
                            {{ $setting->address1 }}
                        </li>
                        <li>
                            <span>{{ __('locale.Message') }}: </span>
                            {{ $setting->email1 }}
                        </li>
                        <li>
                            <span>{{ __('locale.Phone') }}: </span>
                            <a href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a>
                        </li>
                        <li>
                            <span>{{ __('locale.Open') }}: </span>
                            {{ $setting->opining_week_day }} - {{ $setting->closing_week_day }} / {{ $setting->opining_hour }} - {{ $setting->closing_hour }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="footer-item three">
                <div class="footer-service">
                    <h3>{{ __('locale.Our Services') }}</h3>
                    <ul>
                        <li>
                            <a href="{{ route('jobs') }}" target="_blank">{{ __('locale.Recruitment/Jobs') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('cv.writing') }}" target="_blank">{{ __('locale.Curriculum Vitae (CV) Writing') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('workshops') }}" target="_blank">{{ __('locale.Employment Clinic/Workshops') }}</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-2">
            <div class="footer-item three">
                <div class="footer-service">
                    <h3>{{ __('locale.Useful Links') }}</h3>
                    <ul>
                        <li>
                            <a href="{{ route('about') }}" target="_blank">{{ __('locale.About') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" target="_blank">{{ __('locale.Contact') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}" target="_blank">{{ __('locale.Blog') }}</a>
                        </li>
                        @foreach($pages as $page)
                            @if($page->is_footer_page)
                            <li>
                                <a href="{{ url('page/' . $page->slug) }}" target="_blank">{{ $locale == 'ar' ? $page->title_ar : $page->title }}</a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="footer-item three">
                <div class="footer-newsletter">
                    <h3>{{ __('locale.Newsletter') }}</h3>
                    <!-- <p>Lorem ipsum dolor sit amet conscu adipiscing elit sed</p> -->
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="{{ __('locale.Your Email') }}*" name="EMAIL" required autocomplete="off">
                        <button class="btn" type="submit">
                            <!-- <i class="flaticon-send"></i> -->
                            <i class="fa fa-paper-plane"></i>
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>