<div class="br-header">
    <div class="br-header-left">
      <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- br-header-left -->
    <div class="br-header-right">
      <nav class="nav">
        <div class="dropdown">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name hidden-md-down">{{ auth()->user()->name }}</span>
            <img src="{{ asset('bracketplus1.4/app/img/img11.jpg') }}" class="wd-32 rounded-circle" alt="">
            <span class="square-10 bg-success"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-250">
            <div class="tx-center">
              <a href=""><img src="{{ asset('bracketplus1.4/app/img/img11.jpg') }}" class="wd-80 rounded-circle" alt=""></a>
              <h6 class="logged-fullname">{{ auth()->user()->name }}</h6>
              <p>{{ auth()->user()->email }}</p>
            </div>
            <hr>
            <!-- <div class="tx-center">
              <span class="profile-earning-label">Earnings After Taxes</span>
              <h3 class="profile-earning-amount">$13,230 <i class="icon ion-ios-arrow-thin-up tx-success"></i></h3>
              <span class="profile-earning-text">Based on list price.</span>
            </div> -->
            <!-- <hr> -->
            <ul class="list-unstyled user-profile-nav">
              <!-- <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
              <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
              <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
              <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
              <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li> -->
              <li><a href="#" onclick="$('#logout').submit()"><i class="icon ion-power"></i> تسجيل الخروج</a></li>
              <form  id="logout" style="display: none;" action="{{ route('admin.logout') }}" method="post">
                @csrf
              </form>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </nav>
      <div class="navicon-right">
        <a target="_blank" title="الذهاب الى الموقع" href="{{ route('home') }}" class="pos-relative">
          <i class="icon ion-android-globe"></i>
          <!-- start: if statement -->
          <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
          <!-- end: if statement -->
        </a>
      </div><!-- navicon-right -->
    </div><!-- br-header-right -->
  </div><!-- br-header -->