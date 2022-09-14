<x-admin-layout>


    <x-slot name="header">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
            <a class="breadcrumb-item" href="{{ route('admin.workshopApplication.index') }}">إدارة الدفع البنكي</a>
            <span class="breadcrumb-item active">{{ $application->name }}</span>
        </nav>
    </x-slot>
    <x-slot name="title">
        <i class="icon ion-ios-calculator-outline"></i>
        <div>
            <h4>{{ $application->name }}</h4>
            <p class="mg-b-0">هنا يمكنك ادارة معلومات الدفع البنكي والتأكد من عملية الدفع</p>
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
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">حالة تاكيد الدفع</label>
                                <input readonly class="form-control" type="text" name="experience" value="{{ $application->payment_confirmed}}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">القيمة المدفوعة المؤكدة</label>
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
                                <label class="form-control-label">سعر الخدمة</label>
                                <input readonly class="form-control" type="text" name="duration" value="{{ $application->runningWorkshop->price_sdg }}" placeholder="لا يوجد">
                            </div>
                        </div><!-- col-4 -->
                        @if($application->payment_method == 'bank')
                        <div class="col-lg-12">
                            <div class="form-groub">
                                <label for="">صورة الدفع</label>
                                <img onclick="location.assign('{{ asset($application->payment_photo) }}')" style="display: block" src="{{ asset($application->payment_photo) }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                        </div><!-- col-4 -->
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form id="confirmation_form" action="{{ route('admin.workshopApplication.update', ['workshopApplication' => $application->id]) }}" method="post">
                                @method('PATCH')
                                @csrf
                                <p class="text-danger">الرجاء مراحعة إشعار الدفع المرفق والحساب البنكي قبل الضغط على ذر تأكيد الدفع</p>
                                <button onclick="x = confirm('هل انت متاكد من حالة الدفع ؟'); if(x){$('#confirmation_form').submit()}" class="btn btn-success ml-3">تأكيد الدفع</button>
                                <a href="{{ route('admin.workshopApplication.index') }}" class="btn btn-warning">رجوع</a>
                            </form>
                        </div>
                    </div>
                </div><!-- tab-pane -->
            </div>
        </div>
    </div>

</x-admin-layout>