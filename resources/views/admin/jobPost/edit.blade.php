<x-admin-layout>


  @push('links')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  @endpush

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
          <a class="breadcrumb-item" href="{{ route('admin.jobPost.index') }}">إدارة إعلانات الوظائف</a>
          <span class="breadcrumb-item active">{{ $jobPost->title_ar }}</span>
          <span class="breadcrumb-item active">تعديل</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-android-notifications"></i>
    <div>
      <h4>تعديل إعلان</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات إعلانات الوظائف والتعديل عليها</p>
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
    <form action="{{ route('admin.jobPost.update', ['jobPost' => $jobPost->id]) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="form-layout form-layout-1">
        <div  class="tab-content" data-select2-id="31">
          <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">الوظيفة<span class="tx-danger">*</span></label>
                  <select name="job_id" id="" class="form-control">
                    <option value="">إختر الوظيفة</option>
                    @foreach($jobs as $job)
                    <option {{ $jobPost->job_id== $job->id ? 'selected' : '' }} value="{{ $job->id }}">{{ $job->title_ar }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">المدينة<span class="tx-danger">*</span></label>
                  <select name="city_id" id="" class="form-control">
                    <option value="">إختر المدينة</option>
                    @foreach($cities as $city)
                    <option {{ $jobPost->city_id == $city->id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name_ar }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title_ar" value="{{ $jobPost->title_ar }}" placeholder="ادخل عنوان الإعلان بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالانجليزي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title" value="{{ $jobPost->title }}" placeholder="ادخل عنوان الإعلان بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">الراتب من: </label>
                  <input class="form-control" type="text" name="salary_from" value="{{ $jobPost->salary_from }}" placeholder="3000">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">الراتب الى: </label>
                  <input class="form-control" type="text" name="salary_to" value="{{ $jobPost->salary_to }}" placeholder="5000">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">العملة: </label>
                  <select name="currency" id="" class="form-control">
                    <option value="">إختر العملة</option>
                    <option {{ $jobPost->currency == 'dollar' ? 'selected' : '' }} value="dollar">دولار</option>
                    <option {{ $jobPost->currency == 'SAR' ? 'selected' : '' }} value="SAR">ريال سعودي</option>
                    <option {{ $jobPost->currency == 'SDG' ? 'selected' : '' }} value="SDG">جنيه سوداني</option>
                    <option {{ $jobPost->currency == 'AED' ? 'selected' : '' }} value="AED">درهم إماراتي</option>
                    <option {{ $jobPost->currency == 'QAR' ? 'selected' : '' }} value="QAR">ريال قطري</option>
                    <option {{ $jobPost->currency == 'EGP' ? 'selected' : '' }} value="EGP">جنيه مصري</option>
                    <option {{ $jobPost->currency == 'KWD' ? 'selected' : '' }} value="KWD">درهم كويتي</option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">سنوات الخبرة: <span class="tx-danger">بالسنين</span></label>
                  <input class="form-control" type="number" name="experience" value="{{ $jobPost->experience }}" placeholder="0">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">مدة التعاقد: <span class="tx-danger">بالسنين</span></label>
                  <input class="form-control" type="number" name="duration" value="{{ $jobPost->duration }}" placeholder="2">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">نوع الوظيفة: </label>
                  <select name="job_type" id="" class="form-control">
                    <option {{ $jobPost->job_type == 'fulltime' ? 'selected' : '' }} value="fulltime">دوام كامل</option>
                    <option {{ $jobPost->job_type == 'remote' ? 'selected' : '' }} value="remote">عن بعد</option>
                    <option {{ $jobPost->job_type == 'parttime' ? 'selected' : '' }} value="parttime">دوام جزئي</option>
                    <option {{ $jobPost->job_type == 'temporary' ? 'selected' : '' }} value="temporary">توظيف مؤقت</option>
                    <option {{ $jobPost->job_type == 'internship' ? 'selected' : '' }} value="internship">تدريب وظيفي</option>
                    <option {{ $jobPost->job_type == 'freelancer' ? 'selected' : '' }} value="freelancer">مستقل</option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                <label class="ckbox">
                  <input type="checkbox" name="is_featured" {{ $jobPost->is_featured ? 'checked' : ''}} value="1"><span>الإعلان مميزة ؟ <small>إعلانات الوظائف المميزة سيتم عرضها على الصفحة الرئيسية</small></span>
                </label>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
    
  
          <div id="descr-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف القصير بالعربي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="short_descr_ar" placeholder="ادخل الوصف القصير بالعربي">{{ $jobPost->short_descr_ar }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف القصير بالانجليزي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="short_descr" placeholder="ادخل الوصف القصير بالانجليزي">{{ $jobPost->short_descr }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف الكامل بالعربي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="descr_ar" placeholder="ادخل الوصف الكامل بالعربي">{{ $jobPost->descr_ar }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف الكامل بالانجليزي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="descr" placeholder="ادخل الوصف الكامل بالانجليزي">{{ $jobPost->descr }}</textarea>
                </div>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
        </div>
      </div>

      <div class="card-footer mt-2">
        <button class="btn btn-info">تعديل</button>
        <a href="{{ route('admin.jobPost.index') }}" class="btn btn-secondary">الغاء</a>
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