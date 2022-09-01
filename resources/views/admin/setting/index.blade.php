<x-admin-layout>

  <x-slot name="header">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
      <span class="breadcrumb-item active">إدارة الإعدادات</span>
    </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-settings"></i>
    <div>
      <h4>إدارة الإعدادات</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات الموقع والتعديل عليها</p>
    </div>
    <div class="text-left w-100">
    </div>

  </x-slot>

  @include('flash-message');
  <form action="{{ route('admin.setting.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card">
      <div class="card-header">
        <div class="hidden-xs-down">
          <h3>إعدادات التواصل</h3>
        </div>
      </div>
      <div class="card-body">
        <div class="form-layout form-layout-7">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رقم الهاتف 1:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="phone1"value="{{ $setting->phone1 }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              البريد الإلكتروني 1:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="email1"value="{{ $setting->email1 }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              العنوان 1:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="address1"value="{{ $setting->address1 }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              العنوان العربي 1:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="address1_ar"value="{{ $setting->address1_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رقم الهاتف 2:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="phone2"value="{{ $setting->phone2 }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              البريد الإلكتروني 2:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="email2"value="{{ $setting->email2 }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              العنوان 2:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="address2"value="{{ $setting->address2 }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              العنوان العربي 2:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="address2_ar"value="{{ $setting->address2_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رقم الهاتف 3:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="phone3"value="{{ $setting->phone3 }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              البريد الإلكتروني 3:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="email3"value="{{ $setting->email3 }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              العنوان 3:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="address3"value="{{ $setting->address3 }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              العنوان العربي 3:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="address3_ar"value="{{ $setting->address3_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <div class="hidden-xs-down">
          <h3>إعدادات مميزات الشركة باللغة الإنجليزية</h3>
        </div>
      </div>
      <div class="card-body">
        <div class="form-layout form-layout-7">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 1:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature1_title"value="{{ $setting->feature1_title }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 1:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature1_descr"value="{{ $setting->feature1_descr }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 2:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature2_title"value="{{ $setting->feature2_title }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 2:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature2_descr"value="{{ $setting->feature2_descr }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 3:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature3_title"value="{{ $setting->feature3_title }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 3:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature3_descr"value="{{ $setting->feature3_descr }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 4:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature4_title"value="{{ $setting->feature4_title }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 4:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature4_descr"value="{{ $setting->feature4_descr }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 5:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature5_title"value="{{ $setting->feature5_title }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 5:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature5_descr"value="{{ $setting->feature5_descr }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 6:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature6_title"value="{{ $setting->feature6_title }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 6:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature6_descr"value="{{ $setting->feature6_descr }}">
            </div><!-- col-8 -->
          </div><!-- row -->
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <div class="hidden-xs-down">
          <h3>إعدادات مميزات الشركة باللغة العربية</h3>
        </div>
      </div>
      <div class="card-body">
        <div class="form-layout form-layout-7">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 1:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature1_title_ar"value="{{ $setting->feature1_title_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 1:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature1_descr_ar"value="{{ $setting->feature1_descr_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 2:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature2_title_ar"value="{{ $setting->feature2_title_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 2:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature2_descr_ar"value="{{ $setting->feature2_descr_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 3:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature3_title_ar"value="{{ $setting->feature3_title_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 3:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature3_descr_ar"value="{{ $setting->feature3_descr_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 4:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature4_title_ar"value="{{ $setting->feature4_title_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 4:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature4_descr_ar"value="{{ $setting->feature4_descr_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 5:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature5_title_ar"value="{{ $setting->feature5_title_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 5:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature5_descr_ar"value="{{ $setting->feature5_descr_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              عنوان الميزة 6:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature6_title_ar"value="{{ $setting->feature6_title_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              وصف الميزة 6:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="feature6_descr_ar"value="{{ $setting->feature6_descr_ar }}">
            </div><!-- col-8 -->
          </div><!-- row -->
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <div class="hidden-xs-down">
          <h3>إعدادات ساعات العمل</h3>
        </div>
      </div>
      <div class="card-body">
        <div class="form-layout form-layout-7">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              بداية الأسبوع:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <select class="form-control" name="opining_week_day"value="{{ $setting->opining_week_day }}">
                <option value="sat">السبت</option>
                <option value="sun">الأحد</option>
                <option value="mon">الإثنين</option>
                <option value="tue">الثلاثاء</option>
                <option value="wed">الأربعاء</option>
                <option value="thu">الخميس</option>
                <option value="fri">الجمعة</option>
              </select>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              نهاية الإسبوع:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <select class="form-control" name="closing_week_day"value="{{ $setting->closing_week_day }}">
                <option value="sat">السبت</option>
                <option value="sun">الأحد</option>
                <option value="mon">الإثنين</option>
                <option value="tue">الثلاثاء</option>
                <option value="wed">الأربعاء</option>
                <option value="thu">الخميس</option>
                <option value="fri">الجمعة</option>
              </select>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              باية ساعات العمل:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input type="time" class="form-control" name="opining_hour" value="{{ $setting->opining_hour }}">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              نهاية ساعات العمل:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input type="time" class="form-control" name="closing_hour"value="{{ $setting->closing_hour }}">
            </div><!-- col-8 -->
          </div><!-- row -->
      </div>
    </div>


    <div class="card bd-0">
      <div class="card-header">
        <div class="hidden-xs-down">
          <h3>اعدادات الموقع</h3>
        </div>
      </div><!-- card-header -->
      <div class="card-body">
        <div class="form-layout form-layout-7">
          
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              1 اللوقو
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <div class="row">
                <div class="col-sm-6">
                  <img width="100" class="thumbnail" height="100" src="{{ asset($setting->logo1) }}" alt="">
                </div>
                <div class="col-sm-6">
                  <label for=""><small class="text-danger">الابعاد المناسبة هي (30*115)</small></label>
                  <input type="file" class="form-control" name="logo1"value="{{ $setting->logo1 }}">
                </div>
              </div>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اللوقو 2
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <div class="row">
                <div class="col-sm-6">
                  <img width="100" class="thumbnail" height="100" src="{{ asset($setting->logo2) }}" alt="">
                </div>
                <div class="col-sm-6">
                  <label for=""><small class="text-danger">الابعاد المناسبة هي (30*115)</small></label>
                  <input type="file" class="form-control" name="logo2"value="{{ $setting->logo2 }}" >
                </div>
              </div>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط موقع الشركة على قوقل ماب
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="google_map_link"value="{{ $setting->google_map_link }}" >
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط الفيسبوك
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="facebook_link"value="{{ $setting->facebook_link }}" >
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط تويتر
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="twitter_link"value="{{ $setting->twitter_link }}" >
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط لينكدان
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="linkedin_link"value="{{ $setting->linkedin_link }}" >
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط يوتيوب
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="youtube_link"value="{{ $setting->youtube_link }}" >
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط انستقرام
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="instagram_link"value="{{ $setting->instagram_link }}" >
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط الفيديو التعريفي بالشركة
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="ceo_video_link"value="{{ $setting->ceo_video_link }}" >
            </div><!-- col-8 -->
          </div><!-- row -->
        </div>
      </div><!-- card-body -->
      <div class="card-footer">
        <div class="text-right">
          <button class="btn btn-primary">حفظ البيانات</button>
        </div>
      </div>

    </div>
  </form>



</x-admin-layout>