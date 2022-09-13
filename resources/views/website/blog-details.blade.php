<x-website-layout>


    @push('styles')

    @endpush

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>{{ __('locale.Blog Details') }}</h2>
                        <ul>
                            <li>
                                <img src="{{ asset('jecto/default/assets/img/home-three/title-img-two.png') }}" alt="Image">
                                <a href="{{ route('home') }}">{{ __('locale.Home') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">{{ __('locale.Our Blogs') }}</a>
                            </li>
                            <li>
                                <span>/</span>
                            </li>
                            <li>
                                {{ $locale == 'ar' ? $blog->title_ar : $blog->title }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-item">
                        <div class="details-img">
                            <ul>
                                <li>
                                    <i class='bx bx-user'></i>
                                    <a href="#">{{ $blog->user->name }}</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    <span>{{ $blog->created_at ?? '1970-01-01' }}</span>
                                </li>
                                <li>
                                    <i class='bx bx-message-rounded-detail'></i>
                                    <a href="#">{{ $blog->comments->count() }} {{ __('locale.Comments') }}</a>
                                </li>
                            </ul>
                            <img src="{{ asset($blog->photo) }}" alt="Blog Details">
                            <h2>{{ $locale == 'ar' ? $blog->title_ar : $blog->title }} </h2>
                            <div>
                                <p>{!! $locale == 'ar' ? $blog->content_ar : $blog->content !!}</p>
                            </div>
                        </div>
                        <div class="details-tag">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="left">
                                        <ul>
                                            <li>
                                                <span>{{ __('locale.Category') }}:</span>
                                            </li>
                                            <li>
                                                <a href="{{ route('blog', ['category_id' => $blog->category->id]) }}">#{{ $locale == 'ar' ? $blog->category->title_ar : $blog->category->title }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="right">
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-facebook'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-twitter'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-instagram'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-pinterest-alt'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-youtube'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="details-date">
                            <div class="row">
                                @if(App\Models\Blog::orderBy('id', 'desc')->latest()->first()->id != $blog->id)
                                <div class="col-sm-6 col-lg-6">
                                    <div class="date-inner">
                                        <span>{{ $blog->nextBlog()->created_at ?? '1970-01-01'}}</span>
                                        <h4>{{ $locale == 'ar' ? $blog->nextBlog()->title_ar : $blog->nextBlog()->title}}</h4>
                                        <a href="{{ route('blog.details', ['blog' => $blog->nextBlog()->id]) }}">
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </div>
                                </div>
                                @endif
                                @if(App\Models\Blog::orderBy('id', 'asc')->latest()->first()->id != $blog->id)
                                <div class="col-sm-6 col-lg-6">
                                    <div class="date-inner">
                                        <span>{{ $blog->previousBlog()->created_at ?? '1970-01-01' }}</span>
                                        <h4>{{ $locale == 'ar' ? $blog->previousBlog()->title_ar : $blog->previousBlog()->title }}</h4>
                                        <a href="{{ route('blog.details', ['blog' => $blog->previousBlog()->id]) }}">
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-6 col-lg-6">
                                    <div class="date-inner">
                                        <span>April 09, 2020 / Web</span>
                                        <h4>Marketer who knows how to execute their campaigns</h4>
                                        <a href="#">
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </div>
                                </div> -->
                                @endif
                            </div>
                        </div>
                        <div class="details-comment">
                            <h3>{{ __('locale.Comment') }} <span>({{ $blog->comments->count() }})</span></h3>
                            <ul>
                                @if($blog->comments->count() > 0)
                                @foreach($blog->comments as $comment)
                                <li>
                                    <img style="width: 102px; height: 102px" src="{{ asset('bracketplus1.4/app/img/avatar.jpg') }}" alt="Details">
                                    <h4>{{ $comment->name }}</h4>
                                    <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:m:s', $comment->created_at ?? '1970-01-01' )->format('M, d Y H:m:s'); }}</span>
                                    <p>{{ $comment->message }}</p>
                                    <!-- <a href="#">Reply</a> -->
                                </li>
                                @endforeach
                                @else
                                <p class="text-center text-warning">No Comments Available for this post</p>
                                @endif
                            </ul>
                        </div>
                        <div class="details-form">
                            <h3>{{ __('locale.Leave A Comment') }}</h3>
                            <form action="{{ route('blog.comment', $blog->id) }}" method="post">
                                <!-- <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck59">
                                    <label class="form-check-label" for="exampleCheck59">Save my name, email, and website in this browser for the next time I comment.</label>
                                </div> -->
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <i class='bx bx-user'></i>
                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="{{ __('locale.Name') }}*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <i class='bx bx-mail-send'></i>
                                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="{{ __('locale.Email') }}*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <i class='bx bx-mail-send'></i>
                                            <textarea id="your-message" rows="10" name="message" class="form-control" placeholder="{{ __('locale.Write message') }}">{{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn">{{ __('locale.Post A Comment') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <!-- <div class="job widget-item">
                            <h3>Search Result</h3>
                            <form>
                                <label>
                                    <i class="flaticon-send"></i>
                                </label>
                                <input type="text" class="form-control" placeholder="Email address">
                                <button type="submit" class="btn">Submit</button>
                            </form>
                        </div> -->
                        <div class="cat widget-item">
                            <h3>{{ __('locale.Categories') }}</h3>
                            <ul>
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('blog', ['category_id' => $category->id]) }}" target="_blank">
                                        {{ $locale == 'ar' ? $category->title_ar : $category->title }}
                                    </a>
                                    <span>({{ $category->blogs->count() }})</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="recent widget-item">
                            <h3>{{ __('locale.Recent Posts') }}</h3>
                            @foreach($recent_blogs as $r_blog)
                            <div class="recent-inner">
                                <ul>
                                    <li>
                                        <img src="{{ asset($r_blog->photo) }}" alt="Details">
                                    </li>
                                    <li>
                                        <span>{{ $r_blog->created_at ?? '1970-01-01' }}</span>
                                        <a href="{{ route('blog.details', ['blog' => $r_blog->id]) }}">{{ $locale == 'ar' ? $r_blog->title_ar : $r_blog->title }}</a>
                                        <p>{{ Str::limit($locale == 'ar' ? $r_blog->content_ar : $r_blog->content , '40') }}</p>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                        <!-- <div class="tags widget-item">
                            <h3>News Tags</h3>
                            <ul>
                                <li>
                                    <a href="#">#SEO</a>
                                </li>
                                <li>
                                    <a href="#">#Internet</a>
                                </li>
                                <li>
                                    <a href="#">#Web</a>
                                </li>
                                <li>
                                    <a href="#">#SASS</a>
                                </li>
                                <li>
                                    <a href="#">#IT & Support</a>
                                </li>
                                <li>
                                    <a href="#">#Tips</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>














</x-website-layout>