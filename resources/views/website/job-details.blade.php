<x-website-layout>


    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>{{ __('locale.Jobs') }}</h2>
                        <ul>
                            <li>
                                <img src="{{ asset('jecto/default/assets/img/home-three/title-img-two.png') }}" alt="Image">
                                <a href="index.html">{{ __('locale.Home') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                <a href="{{ route('jobs') }}">{{ __('locale.Jobs') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                {{ $locale == 'ar' ? $job_post->title_ar : $job_post->title }}
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
                <div class="col-lg-8">
                    <div class="details-item">
                        {!! $locale == 'ar' ? html_entity_decode($job_post->descr_ar) : html_entity_decode($job_post->descr) !!}
                    </div>
                    <div class="post-job-area ptb-100">
                        <div class="container">
                            @include('flash-message')
                            <form action="{{ route('submit.job.application', ['job_post' => $job_post->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="post-item">
                                    <div class="section-title">
                                        <h2>{{ __('locale.Apply Now') }}</h2>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet placeat totam laboriosam ut labore aliquid veniam repellendus similique? Id molestiae pariatur molestias, alias quia sint autem nemo architecto facere asperiores.</p> -->
                                    </div>
                                    <div class="row">
                                        @if(!auth()->guard('candidate')->check())
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>
                                                    {{ __('locale.Full Name') }}:
                                                </label>
                                                <input required type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="{{ __('locale.Full Name') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>
                                                    {{ __('locale.Email') }}:
                                                </label>
                                                <input required type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="example@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>
                                                    {{ __('locale.Phone') }}:
                                                </label>
                                                <input required type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="249912345678">
                                            </div>
                                        </div>
                                        @endif
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>
                                                    {{ __('locale.CV') }}:
                                                </label>
                                                <input required type="file" name="cv" value="{{ old('cv') }}" class="form-control" placeholder="+123-456-789">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>
                                                    {{ __('locale.Cover Latter') }}:
                                                </label>
                                                <textarea rows="6" name="cover_latter" class="form-control" placeholder="{{ __('locale.Cover Latter') }}">{{ old('cover_latter') }}</textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <button type="submit" class="btn">{{ __('locale.Submit Application') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="information widget-item">
                            <h3>{{ __('locale.Job Information') }}</h3>
                            <ul>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Title') }}</h4>
                                    <span>{{ $locale == 'ar' ? $job_post->title_ar : $job_post->title }}</span>
                                </li>
                                @if($job_post->salary_from || $job_post->salary_to)
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Salary') }}</h4>
                                    <span>${{ $job_post->salary_from }} - ${{ $job_post->salary_to }}</span>
                                </li>
                                @endif
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Category') }}</h4>
                                    <span>{{ $locale == 'ar' ? $job_post->category->title_ar : $job_post->category->title }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Location') }}</h4>
                                    <span>{{ $locale == 'ar' ? $job_post->country->name_ar : $job_post->country->name }} , {{ $locale == 'ar' ? $job_post->city->name_ar : $job_post->city->name }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Posted Date') }}</h4>
                                    <span>{{ $job_post->created_at }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Experience') }}</h4>
                                    <span>{{ $job_post->experience }} {{ __('locale.years') }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Applied') }}</h4>
                                    <span>{{ $job_post->jobApplications->count() }}</span>
                                </li>
                            </ul>
                        </div>
                        @include('website.includes.job-alert', ['class' => ''])
                        <!-- <div class="owner">
                            <div class="top">
                                <img src="assets/img/home-one/job4.png" alt="Owner">
                                <h3>Owner Info</h3>
                                <i class="flaticon-send"></i>
                                <span>Los Angeles, CA, USA</span>
                            </div>
                            <div class="information widget-item">
                                <ul>
                                    <li>
                                        <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                        <h4>Phone</h4>
                                        <a href="tel:+34561232349987">+3456 123 234 9987</a>
                                    </li>
                                    <li>
                                        <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                        <h4>Email</h4>
                                        <a href="/cdn-cgi/l/email-protection#38505d54545778525d5b4c57165b5755"><span class="__cf_email__" data-cfemail="345c5158585b745e5157405b1a575b59">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                        <h4>Location</h4>
                                        <a href="#" target="_blank">www.jectothemes.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->

                        <!-- <div class="job-details-related pt-100 pb-70">
                            <div class="container">
                                <div class="section-title">
                                    <h2>Related Jobs</h2>
                                </div>
                                <div class="employer-item">
                                    <a href="job-details.html">
                                        <img src="assets/img/home-one/job1.png" alt="Employer">
                                        <h3>Product Designer</h3>
                                        <ul>
                                            <li>
                                                <i class="flaticon-send"></i>
                                                Los Angeles, CS, USA
                                            </li>
                                            <li>5 months ago</li>
                                        </ul>
                                        <p>We are Looking for a skilled Ul/UX designer amet conscu adiing elitsed do eusmod tempor</p>
                                        <span class="span-one">Accounting</span>
                                        <span class="span-two">FULL TIME</span>
                                    </a>
                                </div>
                                <div class="employer-item">
                                    <a href="job-details.html">
                                        <img src="assets/img/home-one/job2.png" alt="Employer">
                                        <h3>Sr. Shopify Developer</h3>
                                        <ul>
                                            <li>
                                                <i class="flaticon-send"></i>
                                                Houston, TX, USA
                                            </li>
                                            <li>4 months ago</li>
                                        </ul>
                                        <p>Responsible for managing skilled Ul/UX designer amet conscu adiing elitsed do eusmod</p>
                                        <span class="span-one">Accounting</span>
                                        <span class="span-two two">FULL TIME</span>
                                    </a>
                                </div>
                                <div class="employer-item">
                                    <a href="job-details.html">
                                        <img src="assets/img/home-one/job3.png" alt="Employer">
                                        <h3>Tax Manager</h3>
                                        <ul>
                                            <li>
                                                <i class="flaticon-send"></i>
                                                Ho Chi Minh City, Vietnam
                                            </li>
                                            <li>6 months ago</li>
                                        </ul>
                                        <p>International collaborative a skilled Ul/UX designer amet conscu adiing elitsed do eusmod</p>
                                        <span class="span-one two">Broardcasting</span>
                                        <span class="span-two three">FREELANCER</span>
                                    </a>
                                </div>
                            </div>
                        </div> -->

                        

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="job-details-related pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('locale.Related Jobs') }}</h2>
            </div>
            @foreach($job_post->category->jobPosts->take(5) as $related_job_post)
            <div class="employer-item">
                <a href="{{ route('job.details', ['job_post' => $related_job_post->id]) }}">
                    <img src="{{ asset('jecto/default/assets/img/home-one/job1.png') }}" alt="Employer">
                    <h3>{{ $locale == 'ar' ? $related_job_post->title_ar : $related_job_post->title }}</h3>
                    <ul>
                        <li>
                            <i class="flaticon-send"></i>
                            {{ $locale == 'ar' ? $related_job_post->country->name_ar : $related_job_post->country->name }} , {{ $locale == 'ar' ? $related_job_post->city->name_ar : $related_job_post->city->name }}
                        </li>
                        <li>{{ $related_job_post->created_at }}</li>
                    </ul>
                    <p>{{ $locale == 'ar' ? $related_job_post->short_descr_ar : $related_job_post->short_descr }}</p>
                    <span class="span-one">{{ $locale == 'ar' ? $related_job_post->category->title_ar : $related_job_post->category->title }}</span>
                    <span class="span-two">{{ __("locale.$related_job_post->job_type") }}</span>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    
    


</x-website-layout>