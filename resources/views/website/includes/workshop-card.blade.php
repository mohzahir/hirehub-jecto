@push('styles')
        <style>
            .workshop-item{
                padding: 0px 0px 10px;
                border-radius: 5px;
                position: relative;
                margin-bottom: 30px;
                border: 2px dashed #21a212;
                overflow: hidden;
                background-color: #f5f5f5;
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
                <b>SDG</b>{{ $running_workshop->price_sdg }}
            </div>
        </div>
    </div>
</div>