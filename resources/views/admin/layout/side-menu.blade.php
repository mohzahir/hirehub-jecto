<div class="br-logo"><a href=""><span>[</span>Alpha <i>Beta</i><span>]</span></a></div>
  <div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
      <li class="br-menu-item">
        <a href="{{ route('admin.dashboard') }}" class="br-menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
          <span class="menu-item-label">لوحة التحكم</span>
        </a><!-- br-menu-link -->
      </li><!-- br-menu-item -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub {{ request()->is('admin/category/*') || request()->routeIs('admin.category.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-star-outline tx-22"></i>
          <span class="menu-item-label">الأقسام</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('admin.category.index') }}" class="sub-link {{ request()->routeIs('admin.category.index') ? 'active' : '' }}">عرض الأقسام</a></li>
          <li class="sub-item"><a href="{{ route('admin.category.create') }}" class="sub-link {{ request()->routeIs('admin.category.create') ? 'active' : '' }}">إضافة قسم</a></li>
        </ul>
      </li><!-- br-menu-item -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub {{ request()->is('admin/job/*') || request()->routeIs('admin.job.index') || request()->is('admin/jobPost/*') || request()->routeIs('admin.jobPost.index') || request()->is('admin/jobApplication/*') || request()->routeIs('admin.jobApplication.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-briefcase tx-22"></i>
          <span class="menu-item-label">الوظائف</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('admin.job.index') }}" class="sub-link {{ request()->routeIs('admin.job.index') || request()->is('admin/job/*') ? 'active' : '' }}">عرض الوظائف</a></li>
          <li class="sub-item"><a href="{{ route('admin.jobPost.index') }}" class="sub-link {{ request()->routeIs('admin.jobPost.index') || request()->is('admin/jobPost/*') ? 'active' : '' }}">إعلانات الوظائف</a></li>
          <li class="sub-item"><a href="{{ route('admin.jobApplication.index') }}" class="sub-link {{ request()->routeIs('admin.jobApplication.index') || request()->is('admin/jobApplication/*') ? 'active' : '' }}">تقديمات الوظائف</a></li>
        </ul>
      </li><!-- br-menu-item -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub {{ request()->is('admin/job/*') || request()->routeIs('admin.workshop.index') || request()->is('admin/running_workshop/*') || request()->routeIs('admin.running_workshop.index') || request()->is('admin/workshopApplication/*') || request()->routeIs('admin.workshopApplication.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-briefcase tx-22"></i>
          <span class="menu-item-label">ورش العمل</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('admin.workshop.index') }}" class="sub-link {{ request()->routeIs('admin.workshop.index') || request()->is('admin/workshop/*') ? 'active' : '' }}">عرض ورش العمل</a></li>
          <li class="sub-item"><a href="{{ route('admin.running_workshop.index') }}" class="sub-link {{ request()->routeIs('admin.running_workshop.index') || request()->is('admin/running_workshop/*') ? 'active' : '' }}">إعلانات ورش العمل</a></li>
          <li class="sub-item"><a href="{{ route('admin.workshopApplication.index') }}" class="sub-link {{ request()->routeIs('admin.workshopApplication.index') || request()->is('admin/workshopApplication/*') ? 'active' : '' }}">تقديمات ورش العمل</a></li>
        </ul>
      </li><!-- br-menu-item -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub {{ request()->is('admin/cv-sample/*') || request()->is('admin/cv-application/*') || request()->is('admin/cv-category/*') || request()->routeIs('admin.cv-sample.index') || request()->routeIs('admin.cv-category.index') || request()->routeIs('admin.cv-application.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
          <span class="menu-item-label">خدمة السيرة الزاتية</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('admin.cv-sample.index') }}" class="sub-link {{ request()->is('admin/cv-sample/*') || request()->routeIs('admin.cv-sample.index') ? 'active' : '' }}">نمازج السير الزاتية</a></li>
          <li class="sub-item"><a href="{{ route('admin.cv-category.index') }}" class="sub-link {{ request()->is('admin/cv-category/*') || request()->routeIs('admin.cv-category.index') ? 'active' : '' }}">فئات السير الزاتية</a></li>
          <li class="sub-item"><a href="{{ route('admin.cv-application.index') }}" class="sub-link {{ request()->is('admin/cv-application/*') || request()->routeIs('admin.cv-application.index') ? 'active' : '' }}">تقديمات السير الزاتية</a></li>
        </ul>
      </li><!-- br-menu-item -->
      <li class="br-menu-item">
        <a href="{{ route('admin.candidate.index') }}" class="br-menu-link {{ request()->routeIs('candidate.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
          <span class="menu-item-label">العملاء</span>
        </a><!-- br-menu-link -->
      </li><!-- br-menu-item -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub {{ request()->is('admin/blog/*') || request()->routeIs('blog.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-android-clipboard tx-22"></i>
          <span class="menu-item-label">المقالات</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('admin.blog.index') }}" class="sub-link {{ request()->routeIs('blog.index') ? 'active' : '' }}">عرض المقالات</a></li>
          <li class="sub-item"><a href="{{ route('admin.blog.create') }}" class="sub-link {{ request()->routeIs('blog.create') ? 'active' : '' }}">إضافة مقال</a></li>
        </ul>
      </li><!-- br-menu-item -->
      <li class="br-menu-item">
        <a href="{{ route('admin.setting.index') }}" class="br-menu-link {{ request()->routeIs('setting.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-settings tx-24"></i>
          <span class="menu-item-label">الإعدادات</span>
        </a><!-- br-menu-link -->
      </li><!-- br-menu-item -->
      
    </ul><!-- br-sideleft-menu -->

    <br>
  </div><!-- br-sideleft -->