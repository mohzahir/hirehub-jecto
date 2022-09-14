<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة الشركات</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-bell-outline"></i>
    <div>
      <h4>إدارة الشركات</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات الشركات والتعديل عليها</p>
    </div>
    <div class="text-left w-100">
      <a href="{{ route('admin.company.create') }}" class="btn btn-teal btn-icon rounded-circle" title="إضافة"> <div><i class="icon ion-ios-plus-outline" style="font-size: 25px; color: #fff"></i></div></a>
    </div>
    
  </x-slot>

  @include('flash-message');

  <div class="card pd-25">

    <div class=" table-responsive">
      <table class="table display responsive nowrap dataTable no-footer dtr-inline collapsed">
        <thead class="">
          <tr>
            <th>ID</th>
            <th>اللوقو</th>
            <th>الاسم العربي</th>
            <th>الاسم الانجليزي</th>
            <th>الحالة</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($companies) > 0)
          @foreach($companies as $index => $company)
          <tr>
            <th scope="row">{{ $company->id }}</th>
            <td><img style="width: 50px;height: 50px;" src="{{ asset($company->logo) }}" class="img-fluid img-thumbnail" alt=""></td>
            <td>{{ $company->name_ar }}</td>
            <td>{{ $company->name }}</td>
            <td>
              @if($company->status == 'active')
              <a href="{{ route('admin.company.change.status', ['company' => $company->id, 'status' => 'inactive']) }}" class="btn btn-success btn-icon mg-b-10" title="إخقاء"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @else
              <a href="{{ route('admin.company.change.status', ['company' => $company->id, 'status' => 'active']) }}" class="btn btn-danger btn-icon mg-b-10" title="إظهار"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @endif
            </td>
            <td>
              <div style="display: flex;justify-content: space-evenly;">
                <button onclick="x = confirm('هل انت متأكد ؟'); if(x){ $('.form-delete{{ $index }}').submit() }" class="btn btn-danger btn-icon btn-sm" title="حذف"><div><i class="icon ion-android-remove-circle"></i></div></button>
              </div>
              <form class="form-delete{{ $index }}" method="post" action="{{ route('admin.company.destroy', ['company' => $company->id]) }}">
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
            <th>اللوقو</th>
            <th>الاسم العربي</th>
            <th>الاسم الانجليزي</th>
            <th>الحالة</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- bd -->
  </div>



</x-admin-layout>