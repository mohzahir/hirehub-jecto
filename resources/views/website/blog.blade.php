<x-website-layout>


    @push('styles')

    @endpush

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>{{ __('locale.Blog') }}</h2>
                        <ul>
                            <li>
                                <img src="{{ asset('jecto/default/assets/img/home-three/title-img-two.png') }}" alt="Image">
                                <a href="index.html">{{ __('locale.Home') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                {{ __('locale.Blog') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="{{ route('blog.details', ['blog' => $blog->id]) }}">
                                <img src="{{ asset($blog->photo) }}" alt="Blog">
                            </a>
                        </div>
                        <span>{{ $locale == 'ar' ? $blog->category->title_ar : $blog->category->title }}. {{ $blog->created_at }}</span>
                        <h3>
                            <a href="{{ route('blog.details', ['blog' => $blog->id]) }}">{{ $locale == 'ar' ? $blog->title_ar : $blog->title  }} </a>
                        </h3>
                        <div class="cmn-link">
                            <a href="{{ route('blog.details', ['blog' => $blog->id]) }}">
                                <i class="flaticon-right-arrow one"></i>
                                <!-- <i class="fa-solid fa-arrow-left-long"></i> -->
                                {{ __('locale.Show More') }}
                                <i class="flaticon-right-arrow two"></i>
                                <!-- <i class="fa-solid fa-arrow-right-long"></i> -->

                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>














</x-website-layout>