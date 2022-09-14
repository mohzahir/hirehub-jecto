<section class="candidate-area two pb-100 {{ $class }}">
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
                            <i class="fa-solid fa-arrow-right-long one"></i>
                            View Resume
                            <i class="fa-solid fa-arrow-right-long one"></i>
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