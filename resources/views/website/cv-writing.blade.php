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






    @include('website.includes.cv-writing-samples')
    

    @include('website.includes.cv-writing-categories')












</x-website-layout>