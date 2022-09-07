<x-website-layout>


    @push('styles')
        <style>
            .workshop-item{
                padding: 0px 0px 10px;
                border-radius: 5px;
                position: relative;
                margin-bottom: 30px;
                border: 2px dashed #21a212;
                overflow: hidden;
            }
            .workshop-item img{
                width: 100%;
                height: 170px;
                border-radius: 5px 5px 0px 0px;
            }
            .workshop-item .details-container{
                padding: 25px 25px 0;
            }
            .workshop-item .workshop-trainer span{
                display: block;
                color: #7d789b;
                margin-bottom: 8px;
            }
            .workshop-item h4{
                display: block;
                color: #21a212;;
                margin-bottom: 10px;
                font-size: 20px;
            }
            .workshop-item .separator{
                border-bottom: 2px dashed #21a212;
                content: '';
                display: block;
                position: absolute;
                width: 500px;
                right: 0;
            }
            .workshop-item .category span{
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
            .workshop-item .workshop-footer{
                margin-top: 15px;
                display: flex;
                flex-wrap: nowrap;
                justify-content: space-between;
                align-items: stretch;
            }
        </style>
    @endpush

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>{{ __('locale.Workshops') }}</h2>
                        <ul>
                            <li>
                                <img src="{{ asset('jecto/default/assets/img/home-three/title-img-two.png') }}" alt="Image">
                                <a href="index.html">{{ __('locale.Home') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                {{ __('locale.Workshops') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <div class="job-filter-area pt-100">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="e.g UI/UX Design">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group">
                            <select>
                                <option>Filter By Age</option>
                                <option>Another option</option>
                                <option>A option</option>
                                <option>Potato</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group">
                            <select>
                                <option>Filter By Category</option>
                                <option>Another option</option>
                                <option>A option</option>
                                <option>Potato</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <button type="submit" class="btn cmn-btn">
                            Search By Filter
                            <i class='bx bx-plus'></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="job-showing-area">
        <div class="container">
            <h4>Showing 1 - 8 of 11 results</h4>
            <div class="showing">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="left">
                            <div class="form-group">
                                <select>
                                    <option>Newest</option>
                                    <option>Another option</option>
                                    <option>A option</option>
                                    <option>Potato</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="right">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-dots-horizontal'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-menu'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="candidate-area pb-100">
        <div class="container">
            <div class="row">
                @foreach($running_workshops as $running_workshop)
                <div class="col-md-3">
                    <div class="workshop-item tow">
                        <img  src="{{ asset($running_workshop->workshop->img) }}" alt="Candidate">
                        <div class="details-container">
                            <div class="workshop-title">
                                <span>{{ $locale == 'ar' ? $running_workshop->workshop->trainer_name_ar : $running_workshop->workshop->trainer_name_ar}}</span>
                                <a href="{{ route('workshop.details', ['running_workshop' => $running_workshop->id]) }}">
                                    <h4>{{ $locale == 'ar' ? $running_workshop->workshop->title_ar : $running_workshop->workshop->title }}</h4>
                                </a>
                            </div>
                            <div class="category">
                                <span>{{ $locale == 'ar' ? $running_workshop->workshop->category->title_ar : $running_workshop->workshop->category->title }}</span>
                            </div>
                            <div class="separator"></div>
                            <div class="workshop-footer">
                                <div class="right">
                                    <i class="fa-solid fa-paper-plane"></i>
                                    {{ $running_workshop->location }}
                                </div>
                                <div style="color: #21a212;" class="left">
                                    {{ $running_workshop->price_dollar }}<i class="fa-solid fa-dollar"></i>
                                    -
                                    {{ $running_workshop->price_sdg }}<b>SDG</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="pagination-area">
                <ul>
                    <li>
                        <a href="#">Prev</a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>











</x-website-layout>