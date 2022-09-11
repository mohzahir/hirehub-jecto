<x-admin-layout>


  @push('links')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  @endpush

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
          <a class="breadcrumb-item" href="{{ route('admin.workshop.index') }}">إدارة إعلانات الوظائف</a>
          <span class="breadcrumb-item active">إضافة إعلان</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-android-notifications"></i>
    <div>
      <h4>إضافة إعلان</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات إعلانات الوظائف والتعديل عليها</p>
    </div>
    
  </x-slot>

  @include('flash-message')

  <div class="card pd-25">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#basic-info" role="tab" aria-controls="home" aria-selected="true">البيانات الاساسية</a>
      </li>
    </ul>
    <form action="{{ route('admin.running_workshop.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-layout form-layout-1">
        <div  class="tab-content" data-select2-id="31">
          <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">الوظيفة<span class="tx-danger">*</span></label>
                  <select name="workshop_id" id="" class="form-control">
                    <option value="">إختر الوظيفة</option>
                    @foreach($workshops as $workshop)
                    <option {{ old('workshop_id') == $workshop->id ? 'selected' : '' }} value="{{ $workshop->id }}">{{ $workshop->title_ar }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">السعر بالجنيه: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="price_sdg" value="{{ old('price_sdg') }}" placeholder="5000">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">السعر بالدولار: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="price_dollar" value="{{ old('price_dollar') }}" placeholder="100">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">تاريخ البداية: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="start_date" value="{{ old('start_date') }}" placeholder="ادخل عنوان الإعلان بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">تاريخ النهاية: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="finish_date" value="{{ old('finish_date') }}" placeholder="ادخل عنوان الإعلان بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">عدد ساعات المحاضرة: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="lecture_hours" value="{{ old('lecture_hours') }}" placeholder="2">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">عدد الساعات الكلي للورشة: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="total_hours" value="{{ old('total_hours') }}" placeholder="20">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">المكان: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="location" value="{{ old('location') }}" placeholder="مبنى الوكالة">
                </div>
              </div><!-- col-4 -->
            </div>
          </div><!-- tab-pane -->
        </div>
      </div>

      <div class="card-footer mt-2">
        <button class="btn btn-info">إضافة</button>
        <a href="{{ route('admin.running_workshop.index') }}" class="btn btn-secondary">الغاء</a>
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