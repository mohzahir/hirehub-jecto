<x-admin-layout>


  @push('links')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  @endpush

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
          <a class="breadcrumb-item" href="{{ route('admin.workshop.index') }}">إدارة ورش العمل</a>
          <span class="breadcrumb-item active">إضافة ورشة العمل</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-calculator-outline"></i>
    <div>
      <h4>إضافة ورشة العمل</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات ورش العمل والتعديل عليها</p>
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
      <li class="nav-item">
        <a class="nav-link" id="trainer-tab" data-toggle="tab" href="#trainer-info" role="tab" aria-controls="profile" aria-selected="false">بيانات المدرب</a>
      </li>
    </ul>
    <form action="{{ route('admin.workshop.store') }}" method="post" enctype="multipart/form-data">
      @csrf
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
                    <option {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title_ar }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title_ar" value="{{ old('title_ar') }}" placeholder="اصطياد الوظيفة">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالانجليزي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="how to hunt a job">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-groub">
                  <label for="">صورة ورشة العمل <span class="tx-danger">*</span></label>
                  <img style="width: 200px;height: 200px;display: block" src="{{ asset('bracketplus1.4/app/img/img11.jpg') }}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-group">
                  <input id="customFile" class="custom-file-input" type="file" name="img" value="{{ old('img') }}" placeholder="ادخل عنوان ورشة العمل بالانجليزي">
                  <label style="top: 213px;width: 200px;" class="custom-file-label m-3" for="customFile"></label>
                </div>
              </div><!-- col-4 -->
              
            </div>
          </div><!-- tab-pane -->
    
  
          <div id="descr-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف بالعربي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="description_ar" placeholder="ادخل الوصف بالعربي">{{ old('description_ar') }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف بالانجليزي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="description" placeholder="ادخل الوصف بالانجليزي">{{ old('description') }}</textarea>
                </div>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
          <div id="trainer-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">الإسم بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="trainer_name_ar" value="{{ old('trainer_name_ar') }}" placeholder="محمد زاهر عبدالله">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">الإسم بالانجليزي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="trainer_name" value="{{ old('trainer_name') }}" placeholder="Mohammed zahir">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">المسمى الوظيفي بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="trainer_job_title_ar" value="{{ old('trainer_job_title_ar') }}" placeholder="مهندس برمجيات">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">المسمى الوظيفي بالانجليزي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="trainer_job_title" value="{{ old('trainer_job_title') }}" placeholder="Software Engineer">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف بالعربي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="trainer_descr_ar" placeholder="ادخل الوصف بالعربي">{{ old('trainer_descr_ar') }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف بالانجليزي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="trainer_descr" placeholder="ادخل الوصف بالانجليزي">{{ old('trainer_descr') }}</textarea>
                </div>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
        </div>
      </div>

      <div class="card-footer mt-2">
        <button class="btn btn-info">إضافة</button>
        <a href="{{ route('admin.workshop.index') }}" class="btn btn-secondary">الغاء</a>
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