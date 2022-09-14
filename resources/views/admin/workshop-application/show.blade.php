<x-admin-layout>


    <x-slot name="header">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
            <a class="breadcrumb-item" href="{{ route('admin.cv-application.index') }}">إدارة السيرة زاتية</a>
            <span class="breadcrumb-item active">{{ $application->name }}</span>
        </nav>
    </x-slot>
    <x-slot name="title">
        <i class="icon ion-ios-calculator-outline"></i>
        <div>
            <h4>{{ $application->name }}</h4>
            <p class="mg-b-0">هنا يمكنك ادارة معلومات السيرة زاتية والتعديل عليها</p>
        </div>

    </x-slot>

    @include('flash-message')

    <div class="card pd-25">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#basic-info" role="tab" aria-controls="home" aria-selected="true">البيانات الاساسية</a>
            </li>
        </ul>
        <div class="form-layout form-layout-1">
            <div class="tab-content" data-select2-id="31">
                <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">ورشة العمل</label>
                                <input readonly class="form-control" type="text" value="{{ $application->runningWorkshop->workshop->title_ar }}" placeholder="ادخل عنوان الإعلان بالعربي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">الاسم</label>
                                <input readonly class="form-control" type="text" name="title_ar" value="{{ $application->name }}" placeholder="ادخل عنوان الإعلان بالعربي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">رقم الهاتف</label>
                                <input readonly class="form-control" type="text" name="title" value="{{ $application->phone }}" placeholder="ادخل عنوان الإعلان بالانجليزي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">الايميل</label>
                                <input readonly class="form-control" type="text" name="salary_from" value="{{ $application->email }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">زمن الدفع</label>
                                <input readonly class="form-control" type="text" name="salary_to" value="{{ $application->payment_time }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">طريقة الدفع</label>
                                <input readonly class="form-control" type="text" name="currency" value="{{ $application->payment_method }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">رسوم الورشة بالدولار</label>
                                <input readonly class="form-control" type="text" name="experience" value="{{ $application->runningWorkshop->price_dollar}}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">رسوم الورشة بالجنيه</label>
                                <input readonly class="form-control" type="text" name="experience" value="{{ $application->runningWorkshop->price_sdg}}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">حالة تاكيد الدفع</label>
                                <input readonly class="form-control" type="text" name="experience" value="{{ $application->payment_confirmed}}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">القيمة المدفوعة</label>
                                <input readonly class="form-control" type="text" name="duration" value="{{ $application->paid_amount }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">عملة الدفع</label>
                                <input readonly class="form-control" type="text" name="job_type" value="{{ $application->paid_currency}}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">ملاحظات العميل</label>
                                <input readonly class="form-control" type="text" name="job_type" value="{{ $application->notes }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                            <label class="ckbox">
                                <input readonly disabled type="checkbox" name="is_replied_to" {{ $application->is_replied_to ? 'checked' : ''}} value="1"><span>هل تم الرد ؟ </span>
                            </label>
                        </div><!-- col-8 -->
                        @if($application->payment_method == 'bank')
                        <div class="col-lg-6">
                            <div class="form-groub">
                                <label for="">صورة الدفع</label>
                                <img style="width: 200px;height: 200px;display: block" src="{{ asset($application->payment_photo) }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                        </div><!-- col-4 -->
                        @endif
                    </div>
                </div><!-- tab-pane -->
            </div>
        </div>
    </div>

</x-admin-layout>