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
                                <a href="index.html">{{ __('locale.Home') }}</a>
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
                        <p>54 Hegmann Uninuo Apt. 890, New York, NY 10018, United States.</p>
                        <ul>
                            <li>
                                <span>Mobile:</span> <a href="tel:+44457895789">(+44) - 45789 - 5789</a>
                            </li>
                            <li>
                                <span>Email:</span> <a href="/cdn-cgi/l/email-protection#e38a8d858ca3898680978ccd808c8e"><span class="__cf_email__" data-cfemail="523b3c343d12383731263d7c313d3f">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="info-item">
                        <i class='bx bx-world'></i>
                        <h3>India Office</h3>
                        <p>Sco 52, Sector 48, Near Gurudwara Chandigarh (258458)</p>
                        <ul>
                            <li>
                                <span>Mobile:</span> <a href="tel:+23456783456">(+234) - 5678 - 3456</a>
                            </li>
                            <li>
                                <span>Email:</span> <a href="/cdn-cgi/l/email-protection#2c44494040436c46494f5843024f4341"><span class="__cf_email__" data-cfemail="7c14191010133c16191f0813521f1311">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="info-item">
                        <i class='bx bx-world'></i>
                        <h3>UK Office</h3>
                        <p>142 West newton, New York 19088 United States</p>
                        <ul>
                            <li>
                                <span>Mobile:</span> <a href="tel:+10009871234">(+1) 000 - 987 - 1234</a>
                            </li>
                            <li>
                                <span>Email:</span> <a href="/cdn-cgi/l/email-protection#22475a434f524e4762484741564d0c414d4f"><span class="__cf_email__" data-cfemail="d9bca1b8b4a9b5bc99b3bcbaadb6f7bab6b4">[email&#160;protected]</span></a>
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
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779285!2d62.17507173408571!3d23.728204508550363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1599227927146!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>














</x-website-layout>