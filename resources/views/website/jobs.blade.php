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
                                {{ __('locale.Jobs') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="job-area-list ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <ul class="job-list-item align-items-center">
                        <li>
                            <a href="#">{{ __('locale.Results Found') }} <span>({{ $jobs->count() }})</span></a>
                            <a class="rss" href="#">
                                <i class='bx bx-rss'></i>RSS Feed
                            </a>
                        </li>
                        <li>
                            <span class="sort">{{ __('locale.Sort By') }}:</span>
                            <form>
                                <div class="form-group">
                                    <select>
                                        <option>{{ __('locale.Title') }}</option>
                                        <option>{{ __('locale.Date Posted') }}</option>
                                        <!-- <option>A option</option>
                                        <option>Potato</option> -->
                                    </select>
                                </div>
                            </form>
                        </li>
                    </ul>
                    @if(count($jobs) > 0)
                    @foreach($jobs as $job)
                    <div class="employer-item">
                        <a href="{{ route('job.details', ['job_post' => $job->id]) }}">
                            <img src="{{ asset('jecto/default/assets/img/home-one/job1.png') }}" alt="Employer">
                            <h3>{{ $locale == 'ar' ? $job->title_ar : $job->title }}</h3>
                            <ul>
                                <li>
                                    <i class="flaticon-send"></i>
                                    {{ $locale == 'ar' ? $job->city->country->name_ar : $job->city->country->name }}, {{ $locale == 'ar' ? $job->city->name_ar : $job->city->name }}
                                </li>
                                @php 
                                    $dt = \Carbon\Carbon::now();
                                    $dt2 = new \Carbon\Carbon($job->created_at);
                                    $time = $dt2->diffForHumans($dt)
                                @endphp 
                                <li>{{ $time }}</li>
                            </ul>
                            <p>{{ $locale == 'ar' ? $job->short_descr_ar : $job->short_descr }}</p>
                            <span class="span-one">{{ $locale == 'ar' ? $job->job->category->title_ar : $job->job->category->title }}</span>
                            <span class="span-two">{{ __("locale.$job->job_type"  ) }}</span>
                        </a>
                    </div>
                    @endforeach
                    @else
                    <p class="text-center text-danger">No Available Jobs</p>
                    @endif
                    
                    {!! $jobs->links('website.layout.custom_pagination') !!}
                </div>
                <div class="col-lg-4">
                    <div class="job-list-right">
                        <div class="job-list-all">
                            <div class="search">
                                <h3>{{ __('locale.Search Keywords') }}</h3>
                                <form>
                                    <input type="text" name="search_text" value="{{ request('search_text') }}" class="form-control" placeholder="{{ __('locale.Keyword') }}">
                                    <button type="submit" class="btn">
                                        <i class="flaticon-send"></i>
                                    </button>
                                </form>
                                
                            </div>
                            <form action="">
                                <div class="search cmn-padding">
                                    <h3>{{ __('locale.Category') }}</h3>
                                    <ul class="job-cmn-cat" style="overflow-y: unset;height: auto;">
                                        @foreach($categories as $category)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="category_id[]" {{ in_array($category->id, request('category_id') ?? []) ? 'checked' : '' }} value="{{ $category->id }}" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    {{ $locale == 'ar' ? $category->title_ar : $category->title }} ({{ $category->jobPosts->count() }})
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="location-list cmn-padding">
                                    <h3>{{ __('locale.Location List') }}</h3>
                                    <ul class="job-cmn-cat">
                                        @foreach($countries as $country)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="country_id[]" {{ in_array($country->id, request('country_id') ?? []) ? 'checked' : '' }} value="{{ $country->id }}" id="defaultCheck10">
                                                <label class="form-check-label" for="defaultCheck10">
                                                    {{ $locale == 'ar' ? $country->name_ar : $country->name }} ({{ $country->jobPosts->count() }})
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="job-type cmn-padding">
                                    <h3>{{ __('locale.Job Type') }}</h3>
                                    <ul class="job-cmn-cat">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="job_type[]" {{ in_array('temporary', request('job_type') ?? [])   ? 'checked' : '' }} value="temporary" id="defaultCheck16">
                                                <label class="form-check-label" for="defaultCheck16">
                                                    {{ __('locale.temporary') }} 
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="job_type[]" {{ in_array('remote', request('job_type') ?? [])   ? 'checked' : '' }} value="remote" id="defaultCheck17">
                                                <label class="form-check-label" for="defaultCheck17">
                                                    {{ __('locale.remote') }}
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="job_type[]" {{ in_array('parttime', request('job_type') ?? [])   ? 'checked' : '' }} value="parttime" id="defaultCheck18">
                                                <label class="form-check-label" for="defaultCheck18">
                                                    {{ __('locale.parttime') }}
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="job_type[]" {{ in_array('internship', request('job_type') ?? [])   ? 'checked' : '' }} value="internship" id="defaultCheck19">
                                                <label class="form-check-label" for="defaultCheck19">
                                                    {{ __('locale.internship') }}
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="job_type[]" {{ in_array('fulltime', request('job_type') ?? [])   ? 'checked' : '' }} value="fulltime" id="defaultCheck20">
                                                <label class="form-check-label" for="defaultCheck20">
                                                    {{ __('locale.fulltime') }}
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="job_type[]" {{ in_array('freelancer', request('job_type') ?? [])   ? 'checked' : '' }} value="freelancer" id="defaultCheck21">
                                                <label class="form-check-label" for="defaultCheck21">
                                                    {{ __('locale.freelancer') }}
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="level">
                                    <button type="submit" class="btn">{{ __('locale.Filter Now') }}</button>
                                </div>
                            </form>

                        </div>
                        
                        @include('website.includes.job-alert', ['class' => 'mt-4'])

                        <div class="jecto-contact">
                            <img src="{{ asset('jecto/default/assets/img/jecto-conatct.png') }}" alt="Jecto">
                            <div class="bottom">
                                <span>{{ __('locale.Contact Now') }}</span>
                                <h3>
                                    <a href="tel:+123987334">+123-987-334</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-website-layout>