<x-website-layout>


    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>{{ __('locale.Running Workshop Application') }}</h2>
                        <ul>
                            <li>
                                <img src="{{ asset('jecto/default/assets/img/home-three/title-img-two.png') }}" alt="Image">
                                <a href="{{ route('home') }}">{{ __('locale.Home') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                <a href="{{ route('workshops') }}">{{ __('locale.Workshops') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                {{ $locale == 'ar' ? $running_workshop->workshop->title_ar : $running_workshop->workshop->title }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="job-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget-area mt-3">
                        <div class="information widget-item">
                            <h3>{{ __('locale.Service Information') }}</h3>
                            <ul>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Service Type') }}</h4>
                                    <span>{{ __('locale.Workshop') }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Title') }}</h4>
                                    <span>{{ $locale == 'ar' ? $running_workshop->workshop->title_ar : $running_workshop->workshop->title }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Dollar Price') }}</h4>
                                    <span><b>$</b>{{ $running_workshop->price_dollar }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.SDG Price') }}</h4>
                                    <span>{{ $running_workshop->price_sdg }} <b>SDG</b></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="post-job-area mt-3">
                        @include('flash-message')
                        <form action="{{ route('running.workshop.application.submit', ['running_workshop' => $running_workshop->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="post-item">
                                <div class="section-title">
                                    <h2>{{ __('locale.Running Workshop Application Form') }}</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet placeat totam laboriosam ut labore aliquid veniam repellendus similique? Id molestiae pariatur molestias, alias quia sint autem nemo architecto facere asperiores.</p>
                                </div>
                                <div class="row">
                                    @if(!auth()->guard('candidate')->check())
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>
                                                {{ __('locale.Name') }}:
                                            </label>
                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="{{ __('locale.Name') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>
                                                {{ __('locale.Phone') }}:
                                            </label>
                                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="{{ __('locale.Phone') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>
                                                {{ __('locale.Email') }}:
                                            </label>
                                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="{{ __('locale.Email') }}">
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>
                                                {{ __('locale.Name') }}:
                                            </label>
                                            <input type="text" name="name" value="{{ auth()->guard('candidate')->user()->name }}" class="form-control" placeholder="{{ __('locale.Name') }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>
                                                {{ __('locale.Phone') }}:
                                            </label>
                                            <input type="text" name="phone" value="{{ auth()->guard('candidate')->user()->phone }}" class="form-control" placeholder="{{ __('locale.Phone') }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>
                                                {{ __('locale.Email') }}:
                                            </label>
                                            <input type="text" name="email" value="{{ auth()->guard('candidate')->user()->email }}" class="form-control" placeholder="{{ __('locale.Email') }}" readonly>
                                        </div>
                                    </div>
                                    @endif
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>
                                                {{ __('locale.Payment Currency') }}:
                                            </label>
                                            <select onchange="this.value == 'sdg' ? showBankDiv() : hideBankDiv()" name="paid_currency" class="form-control" id="">
                                                <option value="">{{ __('locale.Select Payment Currency') }}</option>
                                                <option value="sdg">{{ __('locale.SDG') }}</option>
                                                <option value="dollar">{{ __('locale.USD') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="bank" class="col-lg-12" style="display: none">
                                        <div class="form-group">
                                            <label class="text-danger">{{ __('locale.please send fees to the following account number (12345678) and attach the transaction Image bellow') }}</label>
                                            <input type="file" name="payment_photo" class="form-control" placeholder="{{ __('locale.CV') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>
                                                {{ __('locale.Notes') }}:
                                            </label>
                                            <textarea type="text" name="notes" rows="5" cols="5" class="form-control" placeholder="{{ __('locale.Notes') }}">{{ old('notes') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn">{{ __('locale.Workshop Register') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    @push('scripts')
        <script>
            function showBankDiv(){
                console.log('dsds');
                $('#bank').fadeIn(1000);
            }
            function hideBankDiv(){
                console.log('dsds');
                $('#bank').fadeOut(100);
            }
        </script>
    @endpush


</x-website-layout>