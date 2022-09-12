<x-website-layout>


    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2> {{ $locale == 'ar' ? $page->title_ar : $page->title }}</h2>
                        <ul>
                            <li>
                                <img src="{{ asset('jecto/default/assets/img/home-three/title-img-two.png') }}" alt="Image">
                                <a href="index.html">{{ __('locale.Home') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                               {{ $locale == 'ar' ? $page->title_ar : $page->title }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="rules-area ptb-100">
        <div class="container">
            <div class="rules-item">
                {!! $locale == 'ar' ? $page->content_ar : $page->content !!}
            </div>
        </div>
    </div>


</x-website-layout>