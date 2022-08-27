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
                        <img src="{{ asset('jecto/default/assets/img/dashboard1.jpg') }}" alt="Dashboard">
                        <h2>{{ $candidate->name }}</h2>
                        <span>{{ $candidate->job_title ?? '----' }}</span>
                    </div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class='bx bx-user'></i>
                            {{ __('locale.My Profile') }}
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <div class="profile-list">
                                <i class='bx bxs-inbox'></i>
                                {{ __('locale.Applied Jobs') }}
                            </div>
                        </a>
                        <a href="single-resume.html">
                            <div class="profile-list">
                                <i class='bx bx-note'></i>
                                My Resume
                            </div>
                        </a>
                        <a href="login.html">
                            <div class="profile-list">
                                <i class='bx bx-log-out'></i>
                                {{ __('locale.Logout') }}
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
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
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="employer-item">
                                <a href="job-details.html">
                                    <img src="{{ asset('jecto/default/assets/img/home-one/job1.png') }}" alt="Employer">
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
                                    <img src="{{ asset('jecto/default/assets/img/home-one/job2.png') }}" alt="Employer">
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
                                    <img src="{{ asset('jecto/default/assets/img/home-one/job3.png') }}" alt="Employer">
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
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-website-layout>