<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة ورشة عمل</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-calculator-outline"></i>
    <div>
      <h4>إدارة ورشة عمل</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات ورشة عمل والتعديل عليها</p>
    </div>
    <div class="text-left w-100">
      <a href="{{ route('admin.workshop.create') }}" class="btn btn-teal btn-icon rounded-circle" title="إضافة"> <div><i class="icon ion-ios-plus-outline" style="font-size: 25px; color: #fff"></i></div></a>
    </div>
    
  </x-slot>

  @include('flash-message');

  <div class="card pd-25">

    <div class=" table-responsive">
      <table class="table display responsive nowrap dataTable no-footer dtr-inline collapsed">
        <thead class="">
          <tr>
            <th>ID</th>
            <th>الصورة</th>
            <th>العنوان</th>
            <th>القسم</th>
            <th>المدرب</th>
            <th>الحالة</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($workshops) > 0)
          @foreach($workshops as $index => $workshop)
          <tr>
            <th scope="row">{{ $workshop->id }}</th>
            <td><img style="width: 50px;height: 50px;" src="{{ asset($workshop->img) }}" class="img-fluid img-thumbnail" alt=""></td>
            <td>{{ $workshop->title_ar }}</td>
            <td>{{ $workshop->category->title_ar }}</td>
            <td>{{ $workshop->trainer_name_ar }}</td>
            <td>
              @if($workshop->status == 'active')
              <a href="{{ route('admin.workshop.change.status', ['workshop' => $workshop->id, 'status' => 'inactive']) }}" class="btn btn-success btn-icon mg-b-10" title="إخقاء"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @else
              <a href="{{ route('admin.workshop.change.status', ['workshop' => $workshop->id, 'status' => 'active']) }}" class="btn btn-danger btn-icon mg-b-10" title="إظهار"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @endif
            </td>
            <td>
              <div style="display: flex;justify-content: space-evenly;">
                <a href="{{ route('admin.workshop.show', ['workshop' => $workshop->id]) }}" class="btn btn-warning btn-icon btn-sm" title="التفاصيل"><div><i class="icon ion-ios-information-outline"></i></div></a>
                <a href="{{ route('admin.workshop.edit', ['workshop' => $workshop->id]) }}" class="btn btn-info btn-icon btn-sm" title="تعديل"><div><i class="icon ion-android-create"></i></div></a>
                <button onclick="x = confirm('هل انت متأكد ؟'); if(x){ $('.form-delete{{ $index }}').submit() }" class="btn btn-danger btn-icon btn-sm" title="حذف"><div><i class="icon ion-android-remove-circle"></i></div></button>
              </div>
              <form class="form-delete{{ $index }}" method="post" action="{{ route('admin.workshop.destroy', ['workshop' => $workshop->id]) }}">
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
            <th>الصورة</th>
            <th>العنوان</th>
            <th>القسم</th>
            <th>المدرب</th>
            <th>الحالة</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- bd -->
  </div>



</x-admin-layout>