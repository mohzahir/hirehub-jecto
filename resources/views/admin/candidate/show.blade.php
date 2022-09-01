<x-admin-layout>


    <x-slot name="header">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
            <a class="breadcrumb-item" href="{{ route('admin.candidate.index') }}">إدارة عميلات الوظائف</a>
            <span class="breadcrumb-item active">{{ $candidate->name }}</span>
        </nav>
    </x-slot>
    <x-slot name="title">
        <i class="icon icon ion-ios-people-outline"></i>
        <div>
            <h4>{{ $candidate->name }}</h4>
            <p class="mg-b-0">هنا يمكنك ادارة معلومات عميلات الوظائف والتعديل عليها</p>
        </div>

    </x-slot>

    @include('flash-message')

    <div class="card pd-25">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#basic-info" role="tab" aria-controls="home" aria-selected="true">البيانات الاساسية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#descr-info" role="tab" aria-controls="profile" aria-selected="false">التعليم والتواصل الاجتماعي</a>
            </li>
        </ul>
        <div class="form-layout form-layout-1">
            <div class="tab-content" data-select2-id="31">
                <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">الاسم</label>
                                <input readonly class="form-control" type="text" name="name" value="{{ $candidate->name }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">رقم الهاتف</label>
                                <input readonly class="form-control" type="text" name="phone" value="{{ $candidate->phone }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">البريد الإلكتروني</label>
                                <input readonly class="form-control" type="text" name="email" value="{{ $candidate->email }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">تاريخ الميلاد</label>
                                <input readonly class="form-control" type="text" name="date_of_birth" value="{{ $candidate->date_of_birth }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">المسمى الوظيفي</label>
                                <input readonly class="form-control" type="text" name="job_title" value="{{ $candidate->job_title }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">الدرجة الوظيفية</label>
                                <input readonly class="form-control" type="text" name="position" value="{{ $candidate->position }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">الراتب الحالي</label>
                                <input readonly class="form-control" type="text" name="salary" value="{{ $candidate->salary }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-groub">
                                <label for="">صورة العميل</label>
                                <img style="width: 200px;height: 200px;display: block" src="{{ asset($candidate->photo ?? 'bracketplus1.4/app/img/img11.jpg') }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                            <label class="ckbox">
                                <input readonly disabled type="checkbox" name="is_featured" {{ $candidate->is_featured ? 'checked' : ''}} value="1"><span>العميل مميز ؟ </span>
                            </label>
                        </div><!-- col-8 -->
                    </div>
                </div><!-- tab-pane -->


                <div id="descr-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">مجال التعليم</label>
                                <input readonly class="form-control" type="text" name="education_field" value="{{ $candidate->education_field }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">الدرجة العلمية</label>
                                <input readonly class="form-control" type="text" name="education_degree" value="{{ $candidate->education_degree }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">الجامعة\المعهد</label>
                                <input readonly class="form-control" type="text" name="education_institute" value="{{ $candidate->education_institute }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">سنوات الدراسة</label>
                                <input readonly class="form-control" type="text" name="education_year" value="{{ $candidate->education_year }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">رابط فيسبوك</label>
                                <input readonly class="form-control" type="text" name="facebook_link" value="{{ $candidate->facebook_link }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">رابط تويتر</label>
                                <input readonly class="form-control" type="text" name="twitter_link" value="{{ $candidate->twitter_link }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">رابط انستقرام</label>
                                <input readonly class="form-control" type="text" name="instagram_link" value="{{ $candidate->instagram_link }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">رابط لينكدان</label>
                                <input readonly class="form-control" type="text" name="linkedin_link" value="{{ $candidate->linkedin_link }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                    </div>
                </div><!-- tab-pane -->
            </div>
        </div>
    </div>

</x-admin-layout>