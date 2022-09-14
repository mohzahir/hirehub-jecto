<x-website-layout>


    @push('styles')

    @endpush

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>{{ __('locale.Contact') }}</h2>
                        <ul>
                            <li>
                                <img src="{{ asset('jecto/default/assets/img/home-three/title-img-two.png') }}" alt="Image">
                                <a href="{{ route('home') }}">{{ __('locale.Home') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                {{ __('locale.Contact') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="info-item">
                        <i class='bx bx-world'></i>
                        <h3>San Francisco</h3>
                        <p>{{ $setting->address1 }}</p>
                        <ul>
                            <li>
                                <span>{{ __('locale.Phone') }}:</span> <a href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a>
                            </li>
                            <li>
                                <span>{{ __('locale.Email') }}:</span> <a href="{{ $setting->email1 }}">{{ $setting->email1 }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="info-item">
                        <i class='bx bx-world'></i>
                        <h3>India Office</h3>
                        <p>{{ $setting->address2 }}</p>
                        <ul>
                            <li>
                                <span>{{ __('locale.Phone') }}:</span> <a href="tel:{{ $setting->phone2 }}">{{ $setting->phone2 }}</a>
                            </li>
                            <li>
                                <span>{{ __('locale.Email') }}:</span> <a href="{{ $setting->email2 }}">{{ $setting->email2 }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="info-item">
                        <i class='bx bx-world'></i>
                        <h3>UK Office</h3>
                        <p>{{ $setting->address3 }}</p>
                        <ul>
                            <li>
                                <span>{{ __('locale.Phone') }}:</span> <a href="tel:{{ $setting->phone3 }}">{{ $setting->phone3 }}</a>
                            </li>
                            <li>
                                <span>{{ __('locale.Email') }}:</span> <a href="{{ $setting->email3 }}">{{ $setting->email3 }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-form-area pb-100">
        <div class="container">
            <div class="form-item">
                <h2>{{ __('locale.Contact') }}</h2>
                @include('flash-message')
                <form action="{{ route('contact.submit') }}" method="post" id="contactForm">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label>{{ __('locale.Name') }}</label>
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label>{{ __('locale.Email') }}</label>
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label>{{ __('locale.Phone') }}</label>
                                <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label>{{ __('locale.Subject') }}</label>
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div> -->
                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>{{ __('locale.Message') }}</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-12 col-lg-12">
                            <button type="submit" class="btn">
                                {{ __('locale.Send Message') }}
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="map-area">
        <div class="container-fluid p-0">
            <iframe id="map" src="{{ $setting->google_map_link }}" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>














</x-website-layout>