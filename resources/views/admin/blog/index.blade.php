<x-admin-layout>

  <x-slot name="header">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
      <span class="breadcrumb-item active">إدارة المقالات</span>
    </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-briefcase"></i>
    <div>
      <h4>إدارة المقالات</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات المقالات والتعديل عليها</p>
    </div>
    <div class="text-left w-100">
      <a href="{{ route('admin.blog.create') }}" class="btn btn-teal btn-icon rounded-circle" title="إضافة">
        <div><i class="icon ion-ios-plus-outline" style="font-size: 25px; color: #fff"></i></div>
      </a>
    </div>

  </x-slot>

  @include('flash-message');

  <div class="row">
    @foreach($blogs as $blog)
    <div class="col-md-4 mb-5">
      <div class="card shadow-base bd-0 mg-0">
        <figure class="card-item-img bg-transfile rounded-top">
          <img style="width: 225px;height: 200px;" class="img-fluid rounded-top" src="{{ asset($blog->photo ?? 'bracketplus1.4/app/img/img11.jpg') }}" alt="Image">
        </figure>
        <div class="card-body pd-25">
          <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">{{ $blog->category->title_ar }}</p>
          <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="{{ route('admin.blog.show', $blog->id) }}" class="tx-inverse hover-info">{{ $blog->title_ar }}</a></h5>
          <p class="tx-14 tx-gray-600 mg-b-25">{{ Str::limit($blog->content_ar, '100') }}</p>
          <p class="tx-13 mg-b-0">
            <!-- <a href="" class="tx-info">32 Likes</a> -->
            <a href="" class="tx-info mg-l-5">{{ $blog->comments->count() }} تعليق</a>
            <!-- <a href="" class="tx-info mg-l-5"><i class="icon ion-more"></i></a> -->
          </p>
        </div><!-- card-body -->
      </div>
    </div>
    @endforeach
  </div>



</x-admin-layout>