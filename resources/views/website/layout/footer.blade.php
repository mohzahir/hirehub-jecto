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
                            <span>Address: </span>
                            {{ $setting->address1 }}
                        </li>
                        <li>
                            <span>Message: </span>
                            {{ $setting->email1 }}
                        </li>
                        <li>
                            <span>Phone: </span>
                            <a href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a>
                        </li>
                        <li>
                            <span>Open: </span>
                            {{ $setting->opining_week_day }} - {{ $setting->closing_week_day }} / {{ $setting->opining_hour }} - {{ $setting->closing_hour }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="footer-item three">
                <div class="footer-service">
                    <h3>Our Services</h3>
                    <ul>
                        <li>
                            <a href="#" target="_blank">Accounting</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Teachers</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Customer Service</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Digital Marketing</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Web & Software Dev</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Science & Analytics</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-2">
            <div class="footer-item three">
                <div class="footer-service">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>
                            <a href="privacy-policy.html" target="_blank">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="terms-conditions.html" target="_blank">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="jobs.html" target="_blank">Jobs</a>
                        </li>
                        <li>
                            <a href="candidates.html" target="_blank">Candidates</a>
                        </li>
                        <li>
                            <a href="blog.html" target="_blank">Blog</a>
                        </li>
                        <li>
                            <a href="contact.html" target="_blank">Contact</a>
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
                    <h3>Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet conscu adipiscing elit sed</p>
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="Your email*" name="EMAIL" required autocomplete="off">
                        <button class="btn" type="submit">
                            <i class="flaticon-send"></i>
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>