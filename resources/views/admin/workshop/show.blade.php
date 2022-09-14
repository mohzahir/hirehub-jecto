<x-admin-layout>


    <x-slot name="header">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
            <a class="breadcrumb-item" href="{{ route('admin.workshop.index') }}">إدارة الوظائف</a>
            <span class="breadcrumb-item active">{{ $workshop->title_ar }}</span>
        </nav>
    </x-slot>
    <x-slot name="title">
        <i class="icon ion-ios-calculator-outline"></i>
        <div>
            <h4>{{ $workshop->title_ar }}</h4>
            <p class="mg-b-0">هنا يمكنك ادارة معلومات الوظائف والتعديل عليها</p>
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
        <div class="form-layout form-layout-1">
            <div class="tab-content" data-select2-id="31">
                <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">القسم</label>
                                <input readonly class="form-control" type="text" name="category" value="{{ $workshop->category->name_ar }}" placeholder="ادخل عنوان الوظيفة بالعربي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">العنوان بالعربي</label>
                                <input readonly class="form-control" type="text" name="title_ar" value="{{ $workshop->title_ar }}" placeholder="ادخل عنوان الوظيفة بالعربي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">العنوان بالانجليزي</label>
                                <input readonly class="form-control" type="text" name="title" value="{{ $workshop->title }}" placeholder="ادخل عنوان الوظيفة بالانجليزي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-groub">
                                <label for="">صورة الوظيفة</label>
                                <img style="width: 200px;height: 200px;display: block" src="{{ asset($workshop->img) }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                            <label class="ckbox">
                                <input readonly disabled type="checkbox" name="is_featured" {{ $workshop->is_featured ? 'checked' : ''}} value="1"><span>الوظيفة مميزة ؟ </span>
                            </label>
                        </div><!-- col-8 -->
                    </div>
                </div><!-- tab-pane -->


                <div id="descr-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف الكامل بالعربي</label>
                                <!-- <textarea readonly class="form-control summernote" rows="10" type="text" name="description_ar" placeholder="ادخل الوصف الكامل بالعربي">{!! $workshop->description_ar !!}</textarea> -->
                                <div style="border: 1px dashed rgb(188, 185, 185); padding: 10px">{!! $workshop->description_ar !!}</div>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف الكامل بالانجليزي</label>
                                <!-- <textarea readonly class="form-control summernote" rows="10" type="text" name="description" placeholder="ادخل الوصف الكامل بالانجليزي">{!! $workshop->description !!}</textarea> -->
                                <div style="border: 1px dashed rgb(188, 185, 185); padding: 10px">{!! $workshop->description !!}</div>

                            </div>
                        </div><!-- col-8 -->
                    </div>
                </div><!-- tab-pane -->

                <div id="trainer-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label">الإسم بالعربي: <span class="tx-danger">*</span></label>
                          <input readonly class="form-control" type="text" name="trainer_name_ar" value="{{ $workshop->trainer_name_ar }}" placeholder="محمد زاهر عبدالله">
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label">الإسم بالانجليزي: <span class="tx-danger">*</span></label>
                          <input readonly class="form-control" type="text" name="trainer_name" value="{{ $workshop->trainer_name }}" placeholder="Mohammed zahir">
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label">المسمى الوظيفي بالعربي: <span class="tx-danger">*</span></label>
                          <input readonly class="form-control" type="text" name="trainer_job_title_ar" value="{{ $workshop->trainer_job_title_ar }}" placeholder="مهندس برمجيات">
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label">المسمى الوظيفي بالانجليزي: <span class="tx-danger">*</span></label>
                          <input readonly class="form-control" type="text" name="trainer_job_title" value="{{ $workshop->trainer_job_title }}" placeholder="Software Engineer">
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-12">
                        <div class="form-group mg-b-10-force">
                          <label class="form-control-label">الوصف بالعربي: <span class="tx-danger">*</span></label>
                          <!-- <textarea readonly class="form-control summernote" type="text" name="trainer_descr_ar" placeholder="ادخل الوصف بالعربي">{{ $workshop->trainer_descr_ar }}</textarea> -->
                            <div style="border: 1px dashed rgb(188, 185, 185); padding: 10px">{!! $workshop->trainer_descr_ar !!}</div>

                        </div>
                      </div><!-- col-8 -->
                      <div class="col-lg-12">
                        <div class="form-group mg-b-10-force">
                          <label class="form-control-label">الوصف بالانجليزي: <span class="tx-danger">*</span></label>
                          <!-- <textarea readonly class="form-control summernote" type="text" name="trainer_descr" placeholder="ادخل الوصف بالانجليزي">{{ $workshop->trainer_descr }}</textarea> -->
                            <div style="border: 1px dashed rgb(188, 185, 185); padding: 10px">{!! $workshop->trainer_descr !!}</div>

                        </div>
                      </div><!-- col-8 -->
                    </div>
                  </div><!-- tab-pane -->
            </div>
        </div>
    </div>

</x-admin-layout>