<x-admin-layout>


  @push('links')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  @endpush

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
          <a class="breadcrumb-item" href="{{ route('admin.cv-sample.index') }}">إدارة السير زاتية</a>
          <span class="breadcrumb-item active">إضافة سيرة الزاتية</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-briefcase"></i>
    <div>
      <h4>إضافة سيرة الزاتية</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات السير زاتية والتعديل عليها</p>
    </div>
    
  </x-slot>

  @include('flash-message')

  <div class="card pd-25">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#basic-info" role="tab" aria-controls="home" aria-selected="true">البيانات الاساسية</a>
      </li>
    </ul>
    <form action="{{ route('admin.cv-sample.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-layout form-layout-1">
        <div  class="tab-content" data-select2-id="31">
          <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">القسم<span class="tx-danger">*</span></label>
                  <select name="cv_category_id" id="" class="form-control">
                    <option value="">إختر القسم</option>
                    @foreach($categories as $category)
                    <option {{ old('cv_category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title_ar }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title_ar" value="{{ old('title_ar') }}" placeholder="ادخل عنوان السيرة الزاتية بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالانجليزي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="ادخل عنوان السيرة الزاتية بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-groub">
                  <label for="">صورة السيرة الزاتية <span class="tx-danger">*</span></label>
                  <img style="width: 200px;height: 200px;display: block" src="{{ asset('bracketplus1.4/app/img/img11.jpg') }}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-group">
                  <input id="customFile" class="custom-file-input" type="file" name="photo" value="{{ old('photo') }}" placeholder="ادخل عنوان السيرة الزاتية بالانجليزي">
                  <label style="top: 213px;width: 200px;" class="custom-file-label m-3" for="customFile"></label>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">السيرة الزاتية pdf: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="pdf" value="{{ old('pdf') }}">
                </div>
              </div><!-- col-4 -->
            </div>
          </div><!-- tab-pane -->
        </div>
      </div>

      <div class="card-footer mt-2">
        <button class="btn btn-info">إضافة</button>
        <a href="{{ route('admin.cv-sample.index') }}" class="btn btn-secondary">الغاء</a>
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