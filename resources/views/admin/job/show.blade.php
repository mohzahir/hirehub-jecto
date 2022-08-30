<x-admin-layout>


    <x-slot name="header">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
            <a class="breadcrumb-item" href="{{ route('admin.job.index') }}">إدارة الوظائف</a>
            <span class="breadcrumb-item active">{{ $job->title_ar }}</span>
        </nav>
    </x-slot>
    <x-slot name="title">
        <i class="icon ion-ios-briefcase"></i>
        <div>
            <h4>{{ $job->title_ar }}</h4>
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
        </ul>
        <div class="form-layout form-layout-1">
            <div class="tab-content" data-select2-id="31">
                <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">العنوان بالعربي</label>
                                <input readonly class="form-control" type="text" name="title_ar" value="{{ $job->title_ar }}" placeholder="ادخل عنوان الوظيفة بالعربي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">العنوان بالانجليزي</label>
                                <input readonly class="form-control" type="text" name="title" value="{{ $job->title }}" placeholder="ادخل عنوان الوظيفة بالانجليزي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-groub">
                                <label for="">صورة الوظيفة</label>
                                <img style="width: 200px;height: 200px;display: block" src="{{ asset($job->photo) }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                            <label class="ckbox">
                                <input readonly disabled type="checkbox" name="is_featured" {{ $job->is_featured ? 'checked' : ''}} value="1"><span>الوظيفة مميزة ؟ </span>
                            </label>
                        </div><!-- col-8 -->
                    </div>
                </div><!-- tab-pane -->


                <div id="descr-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف الكامل بالعربي</label>
                                <textarea readonly class="form-control summernote" rows="10" type="text" name="description_ar" placeholder="ادخل الوصف الكامل بالعربي">{!! $job->description_ar !!}</textarea>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف الكامل بالانجليزي</label>
                                <textarea readonly class="form-control summernote" rows="10" type="text" name="description" placeholder="ادخل الوصف الكامل بالانجليزي">{!! $job->description !!}</textarea>
                            </div>
                        </div><!-- col-8 -->
                    </div>
                </div><!-- tab-pane -->
            </div>
        </div>
    </div>

</x-admin-layout>