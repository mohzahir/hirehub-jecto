<x-admin-layout>


  @push('links')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  @endpush

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
          <a class="breadcrumb-item" href="{{ route('admin.cv-category.index') }}">إدارة الفئات</a>
          <span class="breadcrumb-item active">{{ $category->title_ar }}</span>
          <span class="breadcrumb-item active">تعديل</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-paper-outline"></i>
    <div>
      <h4>تعديل فئة</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات الفئات والتعديل عليها</p>
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
    <form action="{{ route('admin.cv-category.update', ['cv_category' => $category->id]) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="form-layout form-layout-1">
        <div  class="tab-content" data-select2-id="31">
          <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title_ar" value="{{ $category->title_ar }}" placeholder="ادخل عنوان الفئة بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالانجليزي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title" value="{{ $category->title }}" placeholder="ادخل عنوان الفئة بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">السعر بالجنيه: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="cv_price_sdg" value="{{ $category->cv_price_sdg }}" placeholder="ادخل عنوان القسم بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">السعر بالدولار: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="cv_price_dollar" value="{{ $category->cv_price_dollar }}" placeholder="ادخل عنوان القسم بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                <label class="ckbox">
                  <input type="checkbox" name="is_featured" {{ $category->is_featured ? 'checked' : ''}} value="1"><span>الفئة مميزة ؟ <small>الفئات المميزة سيتم عرضها على الصفحة الرئيسية</small></span>
                </label>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
    
  
          <div id="descr-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف الكامل بالعربي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="features_ar" placeholder="ادخل الوصف الكامل بالعربي">{{ $category->features_ar }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف الكامل بالانجليزي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="features" placeholder="ادخل الوصف الكامل بالانجليزي">{{ $category->features }}</textarea>
                </div>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
        </div>
      </div>

      <div class="card-footer mt-2">
        <button class="btn btn-info">تعديل</button>
        <a href="{{ route('admin.cv-category.index') }}" class="btn btn-secondary">الغاء</a>
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