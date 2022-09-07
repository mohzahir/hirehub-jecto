<x-website-layout>


    @push('styles')
    <style>
        .workshop-item {
            padding: 0px 0px 10px;
            border-radius: 5px;
            position: relative;
            margin-bottom: 30px;
            border: 2px dashed #21a212;
            overflow: hidden;
        }

        .workshop-item img {
            width: 100%;
            height: 170px;
            border-radius: 5px 5px 0px 0px;
        }

        .workshop-item .details-container {
            padding: 25px 25px 0;
        }

        .workshop-item .workshop-trainer span {
            display: block;
            color: #7d789b;
            margin-bottom: 8px;
        }

        .workshop-item h4 {
            display: block;
            color: #21a212;
            ;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .workshop-item .separator {
            border-bottom: 2px dashed #21a212;
            content: '';
            display: block;
            position: absolute;
            width: 500px;
            right: 0;
        }

        .workshop-item .category span {
            list-style-type: none;
            display: inline-block;
            font-size: 12px;
            color: #7f7f7f;
            background-color: #ececec;
            border-radius: 5px;
            padding: 4px 8px;
            margin-right: 3px;
            margin-bottom: 6px;
            margin-right: 0;
            margin-left: 3px;
            margin-bottom: 15px;
        }

        .workshop-item .workshop-footer {
            margin-top: 15px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: stretch;
        }
    </style>
    @endpush

    <div class="page-title-area two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="left">
                                <img src="{{ asset($running_workshop->workshop->img) }}" alt="Details">
                                <h2>{{ $locale == 'ar' ? $running_workshop->workshop->title_ar : $running_workshop->workshop->title }}</h2>
                                <ul>
                                    <li>
                                        <i class='bx bx-pie-chart-alt-2'></i>
                                        {{ $locale == 'ar' ? $running_workshop->workshop->category->title_ar : $running_workshop->workshop->category->title }}
                                    </li>
                                    <li>
                                        <i class='bx bx-time'></i>
                                        {{ __('locale.Start Date') }}: {{ $running_workshop->start_date }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="right">
                                <a class="cmn-btn" href="#">
                                    Apply Now
                                    <i class='bx bx-plus'></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            Save
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bx-share-alt'></i>
                                            Share
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxs-report'></i>
                                            Report
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                        {!! $locale == 'ar' ? html_entity_decode($running_workshop->workshop->description_ar) : html_entity_decode($running_workshop->workshop->description) !!}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="information widget-item">
                            <h3>{{ __('locale.Workshop Information') }}</h3>
                            <ul>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Title') }}</h4>
                                    <span>{{ $locale == 'ar' ? $running_workshop->workshop->title_ar : $running_workshop->workshop->title }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Category') }}</h4>
                                    <span>{{ $locale == 'ar' ? $running_workshop->workshop->category->title_ar : $running_workshop->workshop->category->title }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Location') }}</h4>
                                    <span>{{ $running_workshop->location }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Start Date') }}</h4>
                                    <span>{{ $running_workshop->start_date }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Finish Date') }}</h4>
                                    <span>{{ $running_workshop->finish_date }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Total Hours') }}</h4>
                                    <span>{{ $running_workshop->total_hours }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('jecto/default/assets/img/job-details-icon.png') }}" alt="Details">
                                    <h4>{{ __('locale.Lecture Hours') }}</h4>
                                    <span>{{ $running_workshop->lecture_hours }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="candidate-item widget-item">
                            <div style="max-width: none;" class="left">
                                <h3>
                                    <a href="candidate-details.html">{{ $locale == 'ar' ? $running_workshop->workshop->trainer_name_ar : $running_workshop->workshop->trainer_name }}</a>
                                </h3>
                                <span>{{ $locale == 'ar' ? $running_workshop->workshop->trainer_job_title_ar : $running_workshop->workshop->trainer_job_title }}</span>
                                <p>{!! $locale == 'ar' ? $running_workshop->workshop->trainer_descr_ar : $running_workshop->workshop->trainer_descr !!}</p>
                                <ul>
                                    <li>CSS</li>
                                    <li>Creative</li>
                                    <li>Photoshop</li>
                                    <li>Illustrator</li>
                                    <li>HTML5</li>
                                </ul>
                                <!-- <div class="cmn-link">
                                    <a href="single-resume.html">
                                        <i class="flaticon-right-arrow one"></i>
                                        View Resume
                                        <i class="flaticon-right-arrow two"></i>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










</x-website-layout>