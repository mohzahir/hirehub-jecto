<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة الصفحات</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-briefcase"></i>
    <div>
      <h4>إدارة الصفحات</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات الصفحات والتعديل عليها</p>
    </div>
    <div class="text-left w-100">
      <a href="{{ route('admin.page.create') }}" class="btn btn-teal btn-icon rounded-circle" title="إضافة"> <div><i class="icon ion-ios-plus-outline" style="font-size: 25px; color: #fff"></i></div></a>
    </div>
    
  </x-slot>

  @include('flash-message');

  <div class="card pd-25">

    <div class=" table-responsive">
      <table class="table display responsive nowrap dataTable no-footer dtr-inline collapsed">
        <thead class="">
          <tr>
            <th>ID</th>
            <th>الاسم العربي</th>
            <th>الاسم الانجليزي</th>
            <th>المكان</th>
            <th>الحالة</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($pages) > 0)
          @foreach($pages as $index => $page)
          <tr>
            <th scope="row">{{ $page->id }}</th>
            <td>{{ $page->title_ar }}</td>
            <td>{{ $page->title }}</td>
            <td>
              @if($page->is_navbar_page)
              <div class="tx-bold">
                <span class="badge badge-warning">القائمة العلوية</span>
              </div>
              @endif
              @if($page->is_footer_page)
              <div class="tx-bold">
                <span class="badge badge-warning">القائمة السفلية</span>
              </div>
              @endif
            </td>
            <td>
              @if($page->status == 'active')
              <a href="{{ route('admin.page.change.status', ['page' => $page->id, 'status' => 'inactive']) }}" class="btn btn-success btn-icon mg-b-10" title="إخقاء"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @else
              <a href="{{ route('admin.page.change.status', ['page' => $page->id, 'status' => 'active']) }}" class="btn btn-danger btn-icon mg-b-10" title="إظهار"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @endif
            </td>
            <td>
              <div style="display: flex;justify-content: space-evenly;">
                <!-- <a href="{{ route('admin.page.show', ['page' => $page->id]) }}" class="btn btn-warning btn-icon btn-sm" title="التفاصيل"><div><i class="icon ion-ios-information-outline"></i></div></a> -->
                <a href="{{ route('admin.page.edit', ['page' => $page->id]) }}" class="btn btn-info btn-icon btn-sm" title="تعديل"><div><i class="icon ion-android-create"></i></div></a>
                <button onclick="x = confirm('هل انت متأكد ؟'); if(x){ $('.form-delete{{ $index }}').submit() }" class="btn btn-danger btn-icon btn-sm" title="حذف"><div><i class="icon ion-android-remove-circle"></i></div></button>
              </div>
              <form class="form-delete{{ $index }}" method="post" action="{{ route('admin.page.destroy', ['page' => $page->id]) }}">
                @csrf
                @method('DELETE')
              </form>
            </td>
          </tr>
          @endforeach
          @else
          <tr class="text-center">
            <td colspan="10">لا يوجد بيانات لعرضها</td>
          </tr>
          @endif
        </tbody>
        <tfoot class="">
          <tr>
            <th>ID</th>
            <th>الاسم العربي</th>
            <th>الاسم الانجليزي</th>
            <th>المكان</th>
            <th>الحالة</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- bd -->
  </div>



</x-admin-layout>