<x-candidate-login-layout>


    <div class="user-form-area">
        <div class="container-fluid p-0">
            <div class="row m-0 align-items-center">
                <div class="col-lg-6 p-0">
                    <div class="user-img">
                        <img src="{{ asset('jecto/default/assets/img/resgister-bg.jpg') }}" alt="User">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="user-content">
                        <div class="top">
                            <h2>{{ __('locale.Register') }}</h2>
                            @include('flash-message')
                            <form action="{{ route('candidate.register.submit') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="{{ __('locale.Name') }}">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="{{ __('locale.Email') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="{{ __('locale.Phone') }}">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="{{ __('locale.Password') }}">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('locale.Confirm Password') }}">
                                </div>
                                <button type="submit" class="btn">{{ __('locale.Register Here') }}</button>
                            </form>
                        </div>
                        <div class="end">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-candidate-login-layout>