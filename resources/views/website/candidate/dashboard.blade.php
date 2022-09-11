<x-website-layout>


    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>{{ __('locale.Dashboard') }}</h2>
                        <ul>
                            <li>
                                <img src="{{ asset('jecto/default/assets/img/home-three/title-img-two.png') }}" alt="Image">
                                <a href="index.html">{{ __('locale.Home') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                {{ __('locale.Dashboard') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="dashboard-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="profile-item">
                        <img style="width: 296px; height: 296px;" src="{{ asset($candidate->photo ?? 'bracketplus1.4/app/img/avatar.jpg') }}" alt="Dashboard">
                        <h2>{{ $candidate->name }}</h2>
                        <span>{{ $candidate->job_title ?? '----' }}</span>
                    </div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class='bx bx-user'></i>
                            {{ __('locale.My Profile') }}
                        </a>
                        <a class="nav-link" id="v-pills-jobs-tab" data-bs-toggle="pill" href="#v-pills-jobs" role="tab" aria-controls="v-pills-jobs" aria-selected="false">
                            <div class="profile-list">
                                <i class='bx bxs-inbox'></i>
                                {{ __('locale.Applied Jobs') }}
                            </div>
                        </a>
                        <a class="nav-link" id="v-pills-workshops-tab" data-bs-toggle="pill" href="#v-pills-workshops" role="tab" aria-controls="v-pills-workshops" aria-selected="false">
                            <div class="profile-list">
                                <i class='bx bxs-inbox'></i>
                                {{ __('locale.Registered Workshops') }}
                            </div>
                        </a>
                        <!-- <a class="nav-link" id="v-pills-cvs-tab" data-bs-toggle="pill" href="#v-pills-cvs" role="tab" aria-controls="v-pills-cvs" aria-selected="false">
                            <div class="profile-list">
                                <i class='bx bxs-inbox'></i>
                                {{ __('locale.CV Writing Requests') }}
                            </div>
                        </a> -->
                        <a href="single-resume.html">
                            <div class="profile-list">
                                <i class='bx bx-note'></i>
                                My Resume
                            </div>
                        </a>
                        <a href="{{ route('candidate.logout') }}">
                            <div class="profile-list">
                                <i class='bx bx-log-out'></i>
                                {{ __('locale.Logout') }}
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8" style="background-color: #f5f5f5;border-radius: 5px;padding-top: 10px;">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="profile-content">
                                <form action="{{ route('candidate.submit.info') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="profile-content-inner">
                                        <h2>{{ __('locale.Basic Info') }}</h2>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Your Name') }}:</label>
                                                    <input type="text" name="name" value="{{ $candidate->name }}" class="form-control" placeholder="Tom Henry">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Your Email') }}:</label>
                                                    <input type="email" name="email" value="{{ $candidate->email }}" class="form-control" placeholder="hello@jecto.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Phone') }}:</label>
                                                    <input type="text" name="phone" value="{{ $candidate->phone }}" class="form-control" placeholder="+123 - 456 - 789">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Date Of Birth') }}:</label>
                                                    <input type="text" name="date_of_birth" value="{{ $candidate->date_of_birth }}" class="form-control" placeholder="01/01/1995">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Job Title') }}:</label>
                                                    <input type="text" name="job_title" value="{{ $candidate->job_title }}" class="form-control" placeholder="Web Developer">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Position') }}:</label>
                                                    <input type="text" name="Position" value="{{ $candidate->Position }}" class="form-control" placeholder="Team Leader">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Salary') }}:</label>
                                                    <input type="text" name="salary" value="{{ $candidate->salary }}" class="form-control" placeholder="$1500/per month">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Cover Picture') }}</label>
                                                    <input name="photo" value="{{ $candidate->photo }}" type="file">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>{{ __('locale.CV') }}</label>
                                                    <input name="cv" value="{{ $candidate->cv }}" type="file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-content-inner">
                                        <h2>{{ __('locale.Education') }}</h2>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Field') }}:</label>
                                                    <input type="text" name="education_field" value="{{ $candidate->education_field }}" class="form-control" placeholder="Computer Science">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Degree') }}:</label>
                                                    <input type="text" name="education_degree" value="{{ $candidate->education_degree }}" class="form-control" placeholder="BSC">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Institute') }}:</label>
                                                    <input type="text" name="education_institute" value="{{ $candidate->education_institute }}" class="form-control" placeholder="Jecto University & Technology, UK">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Year') }}:</label>
                                                    <input type="text" name="education_year" value="{{ $candidate->education_year }}" class="form-control" placeholder="2015 - 2020">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-content-inner">
                                        <h2>{{ __('locale.Social Links') }}</h2>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Facebook') }}:</label>
                                                    <input type="text" name="facebook_link" value="{{ $candidate->facebook_link }}" class="form-control" placeholder="https://www.facebook.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Twitter') }}:</label>
                                                    <input type="text" name="twitter_link" value="{{ $candidate->twitter_link }}" class="form-control" placeholder="https://www.twitter.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Instagram') }}:</label>
                                                    <input type="text" name="instagram_link" value="{{ $candidate->instagram_link }}" class="form-control" placeholder="https://www.instagram.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('locale.Linkedin') }}:</label>
                                                    <input type="text" name="linkedin_link" value="{{ $candidate->linkedin_link }}" class="form-control" placeholder="https://www.linkedin.com">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn dashboard-btn">{{ __('locale.Save Your Information') }}</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-jobs" role="tabpanel" aria-labelledby="v-pills-jobs-tab">
                            @if(count($applied_jobs) > 0)
                            @foreach($applied_jobs as $job_application)
                            <div class="employer-item">
                                <a href="{{ route('job.details', ['job_post' => $job_application->jobPost->id]) }}">
                                    <img src="{{ asset('jecto/default/assets/img/home-one/job1.png') }}" alt="Employer">
                                    <h3>{{ $locale == 'ar' ? $job_application->jobPost->title_ar : $job_application->jobPost->title }}</h3>
                                    <ul>
                                        <li>
                                            <i class="flaticon-send"></i>
                                            {{ $locale == 'ar' ? $job_application->jobPost->country->name_ar : $job_application->jobPost->country->name }}, {{ $locale == 'ar' ? $job_application->jobPost->city->name_ar : $job_application->jobPost->city->name }}
                                        </li>
                                        @php 
                                            $dt = \Carbon\Carbon::now();
                                            $dt2 = new \Carbon\Carbon($job_application->jobPost->created_at);
                                            $time = $dt2->diffForHumans($dt)
                                        @endphp 
                                        <li>{{ $time }}</li>
                                    </ul>
                                    <p>{{ $locale == 'ar' ? $job_application->jobPost->short_descr_ar : $job_application->jobPost->short_descr }}</p>
                                    <span class="span-one">{{ $locale == 'ar' ? $job_application->jobPost->category->title_ar : $job_application->jobPost->category->title }}</span>
                                    <span class="span-two">{{ __("locale." . $job_application->jobPost->job_type) }}</span>
                                </a>
                            </div>
                            @endforeach
                            @else
                            <div class="text-center text-danger alert alert-warning">
                                <p class="">No Jobs Applied to</p>
                            </div>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="v-pills-workshops" role="tabpanel" aria-labelledby="v-pills-workshops-tab">
                            <div class="row">
                                @if(count($applied_workshops) > 0)
                                @foreach($applied_workshops as $applied_workshop)
                                <div class="col-md-4">
                                    @include('website.includes.workshop-card', ['running_workshop' => $applied_workshop->runningWorkshop])
                                </div>
                                @endforeach
                                @else
                                <div class="text-center text-danger alert alert-warning">
                                    <p class="">No Jobs Applied to</p>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="v-pills-cvs" role="tabpanel" aria-labelledby="v-pills-cvs-tab">
                            <div class="row">
                                @if(count($applied_workshops) > 0)
                                @foreach($applied_workshops as $applied_workshop)
                                <div class="col-md-4">
                                    @include('website.includes.workshop-card', ['running_workshop' => $applied_workshop->runningWorkshop])
                                </div>
                                @endforeach
                                @else
                                <div class="text-center text-danger alert alert-warning">
                                    <p class="">No Jobs Applied to</p>
                                </div>
                                @endif
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-website-layout>