<x-admin-layout>


  @push('links')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  @endpush

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
          <a class="breadcrumb-item" href="{{ route('admin.blog.index') }}">إدارة المقالات</a>
          <span class="breadcrumb-item active">{{ $blog->title_ar }}</span>
          <span class="breadcrumb-item active">تعديل</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-briefcase"></i>
    <div>
      <h4>تعديل مقال</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات المقالات والتعديل عليها</p>
    </div>
    
  </x-slot>

  @include('flash-message')

  <div class="card pd-25">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#basic-info" role="tab" aria-controls="home" aria-selected="true">البيانات الاساسية</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#descr-info" role="tab" aria-controls="profile" aria-selected="false">البيانات الوصفية</a>
      </li>
    </ul>
    <form action="{{ route('admin.blog.update', ['blog' => $blog->id]) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="form-layout form-layout-1">
        <div  class="tab-content" data-select2-id="31">
          <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">القسم<span class="tx-danger">*</span></label>
                  <select name="category_id" id="" class="form-control">
                    <option value="">إختر القسم</option>
                    @foreach($categories as $category)
                    <option {{ $blog->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title_ar }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title_ar" value="{{ $blog->title_ar }}" placeholder="ادخل عنوان المقال بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالانجليزي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title" value="{{ $blog->title }}" placeholder="ادخل عنوان المقال بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">الكلمات الدلالية: <span class="tx-danger">* يجب ان تكون الكلمات مفصولة بمساحة فقط</span></label>
                  <input class="form-control" type="text" name="keywords" value="{{ $blog->keywords }}" placeholder="كلمة1 كلمة2 كلمة3 ..">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-groub">
                  <label for="">صورة المقال <span class="tx-danger">*</span></label>
                  <img style="width: 200px;height: 200px;display: block" src="{{ asset($blog->photo) }}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-group">
                  <input id="customFile" class="custom-file-input" type="file" name="photo" value="{{ $blog->photo }}">
                  <label style="top: 213px;width: 200px;" class="custom-file-label m-3" for="customFile"></label>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                <label class="ckbox">
                  <input type="checkbox" name="is_featured" {{ $blog->is_featured ? 'checked' : ''}} value="1"><span>المقال مميزة ؟ <small>المقالات المميزة سيتم عرضها على الصفحة الرئيسية</small></span>
                </label>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
    
  
          <div id="descr-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف الكامل بالعربي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="content_ar" placeholder="ادخل الوصف الكامل بالعربي">{{ $blog->content_ar }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف الكامل بالانجليزي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="content" placeholder="ادخل الوصف الكامل بالانجليزي">{{ $blog->content }}</textarea>
                </div>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
        </div>
      </div>

      <div class="card-footer mt-2">
        <button class="btn btn-info">تعديل</button>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">الغاء</a>
      </div><!-- form-layout-footer -->
      
        
  
        
    </form>
  </div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
  $('.summernote').summernote({
    height: 150
  })
</script>
@endpush

</x-admin-layout>