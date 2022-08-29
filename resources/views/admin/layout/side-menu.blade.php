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
        <a href="#" class="br-menu-link with-sub {{ request()->is('admin/service/*') || request()->routeIs('service.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-star-outline tx-22"></i>
          <span class="menu-item-label">الخدمات</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('admin.service.index') }}" class="sub-link {{ request()->routeIs('service.index') ? 'active' : '' }}">عرض الخدمات</a></li>
          <li class="sub-item"><a href="{{ route('admin.service.create') }}" class="sub-link {{ request()->routeIs('service.create') ? 'active' : '' }}">إضافة خدمة</a></li>
        </ul>
      </li><!-- br-menu-item -->

      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub {{ request()->is('admin/client/*') || request()->routeIs('client.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-people-outline tx-22"></i>
          <span class="menu-item-label">العملاء</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('admin.client.index') }}" class="sub-link {{ request()->routeIs('client.index') ? 'active' : '' }}">عرض العملاء</a></li>
          <li class="sub-item"><a href="{{ route('admin.client.create') }}" class="sub-link {{ request()->routeIs('client.create') ? 'active' : '' }}">إضافة عميل</a></li>
        </ul>
      </li><!-- br-menu-item -->

      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub {{ request()->is('admin/project/*') || request()->routeIs('project.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-stats-bars tx-22"></i>
          <span class="menu-item-label">المشاريع</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('admin.project.index') }}" class="sub-link {{ request()->routeIs('project.index') ? 'active' : '' }}">عرض المشاريع</a></li>
          <li class="sub-item"><a href="{{ route('admin.project.create') }}" class="sub-link {{ request()->routeIs('project.create') ? 'active' : '' }}">إضافة مشروع</a></li>
        </ul>
      </li><!-- br-menu-item -->

      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub {{ request()->is('admin/product/*') || request()->routeIs('product.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-bag tx-22"></i>
          <span class="menu-item-label">المنتجات</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('admin.product.index') }}" class="sub-link {{ request()->routeIs('product.index') ? 'active' : '' }}">عرض المنتجات</a></li>
          <li class="sub-item"><a href="{{ route('admin.product.create') }}" class="sub-link {{ request()->routeIs('product.create') ? 'active' : '' }}">إضافة منتج</a></li>
        </ul>
      </li><!-- br-menu-item -->

      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub {{ request()->is('admin/employee/*') || request()->routeIs('employee.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-body-outline tx-22"></i>
          <span class="menu-item-label">فريق العمل</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('admin.employee.index') }}" class="sub-link {{ request()->routeIs('employee.index') ? 'active' : '' }}">عرض الموظفين</a></li>
          <li class="sub-item"><a href="{{ route('admin.employee.create') }}" class="sub-link {{ request()->routeIs('employee.create') ? 'active' : '' }}">إضافة موظف</a></li>
        </ul>
      </li><!-- br-menu-item -->
      
      <li class="br-menu-item">
        <a href="{{ route('admin.about.index') }}" class="br-menu-link {{ request()->routeIs('about.index') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-information-outline tx-24"></i>
          <span class="menu-item-label">معلومات الشركة</span>
        </a><!-- br-menu-link -->
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