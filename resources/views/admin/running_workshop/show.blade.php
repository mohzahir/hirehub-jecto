<x-admin-layout>


    <x-slot name="header">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
            <a class="breadcrumb-item" href="{{ route('admin.jobPost.index') }}">إدارة إعلانات الوظائف</a>
            <span class="breadcrumb-item active">{{ $jobPost->title_ar }}</span>
        </nav>
    </x-slot>
    <x-slot name="title">
        <i class="icon ion-ios-calculator-outline"></i>
        <div>
            <h4>{{ $jobPost->title_ar }}</h4>
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
        <div class="form-layout form-layout-1">
            <div class="tab-content" data-select2-id="31">
                <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">القسم</label>
                                <input readonly class="form-control" type="text" value="{{ $jobPost->category->title_ar }}" placeholder="ادخل عنوان الإعلان بالعربي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">الوظيفة</label>
                                <input readonly class="form-control" type="text" value="{{ $jobPost->job->title_ar}}" placeholder="ادخل عنوان الإعلان بالانجليزي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">الدولة</label>
                                <input readonly class="form-control" type="text" value="{{ $jobPost->country->name_ar }}" placeholder="ادخل عنوان الإعلان بالعربي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">المدينة</label>
                                <input readonly class="form-control" type="text" value="{{ $jobPost->city->name_ar }}" placeholder="ادخل عنوان الإعلان بالانجليزي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">العنوان بالعربي</label>
                                <input readonly class="form-control" type="text" name="title_ar" value="{{ $jobPost->title_ar }}" placeholder="ادخل عنوان الإعلان بالعربي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">العنوان بالانجليزي</label>
                                <input readonly class="form-control" type="text" name="title" value="{{ $jobPost->title }}" placeholder="ادخل عنوان الإعلان بالانجليزي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">الراتب من</label>
                                <input readonly class="form-control" type="text" name="salary_from" value="{{ $jobPost->salary_from }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">الراتب الى</label>
                                <input readonly class="form-control" type="text" name="salary_to" value="{{ $jobPost->salary_to }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">العملة</label>
                                <input readonly class="form-control" type="text" name="currency" value="{{ $jobPost->currency }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">سنوات الخبرة</label>
                                <input readonly class="form-control" type="text" name="experience value="{{ $jobPost->experience }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">مدة التعاقد</label>
                                <input readonly class="form-control" type="text" name="duration" value="{{ $jobPost->duration }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">نوع التوظيف</label>
                                <input readonly class="form-control" type="text" name="job_type" value="{{ $jobPost->job_type }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                            <label class="ckbox">
                                <input readonly disabled type="checkbox" name="is_featured" {{ $jobPost->is_featured ? 'checked' : ''}} value="1"><span>الإعلان مميزة ؟ </span>
                            </label>
                        </div><!-- col-8 -->
                    </div>
                </div><!-- tab-pane -->


                <div id="descr-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف القصير بالعربي</label>
                                <textarea readonly class="form-control summernote" rows="3" type="text" name="short_descr_ar" placeholder="لا يوجد">{!! $jobPost->short_descr_ar !!}</textarea>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف القصير بالعربي</label>
                                <textarea readonly class="form-control summernote" rows="3" type="text" name="short_descr" placeholder="لا يوجد">{!! $jobPost->short_descr !!}</textarea>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف الكامل بالعربي</label>
                                <textarea readonly class="form-control summernote" rows="10" type="text" name="description_ar" placeholder="ادخل الوصف الكامل بالعربي">{!! $jobPost->description_ar !!}</textarea>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف الكامل بالانجليزي</label>
                                <textarea readonly class="form-control summernote" rows="10" type="text" name="description" placeholder="ادخل الوصف الكامل بالانجليزي">{!! $jobPost->description !!}</textarea>
                            </div>
                        </div><!-- col-8 -->
                    </div>
                </div><!-- tab-pane -->
            </div>
        </div>
    </div>

</x-admin-layout>