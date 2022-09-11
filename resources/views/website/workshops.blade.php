<x-website-layout>


    

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
                            <input type="text" value="{{ request('title') }}" name="title" class="form-control" placeholder="{{ __('locale.Title') }}">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group">
                            <select name="category_id">
                                <option value="">{{ __('locale.Category') }}</option>
                                @foreach($categories as $category)
                                <option {{ request('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $locale == 'ar' ? $category->title_ar : $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group">
                            <input type="date" value="{{ request('start_date') }}" name="start_date" class="form-control" placeholder="Start Date">
                        </div>
                    </div>
                    
                    
                    <div class="col-sm-6 col-lg-3">
                        <button type="submit" class="btn cmn-btn">
                            {{ __('locale.Filter Now') }}
                            <i class='bx bx-plus'></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="job-showing-area">
        <div class="container">
            <!-- <h4>Showing 1 - 8 of 11 results</h4> -->
            <div class="showing">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="left">
                            <div class="form-group">
                                <select>
                                    <option>{{ __('locale.Newest') }}</option>
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
                    @include('website.includes.workshop-card', $running_workshop)
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