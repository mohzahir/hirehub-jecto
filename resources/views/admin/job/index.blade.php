<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة الوظائف</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-briefcase"></i>
    <div>
      <h4>إدارة الوظائف</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات الوظائف والتعديل عليها</p>
    </div>
    <div class="text-left w-100">
      <a href="{{ route('admin.job.create') }}" class="btn btn-teal btn-icon rounded-circle" title="إضافة"> <div><i class="icon ion-ios-plus-outline" style="font-size: 25px; color: #fff"></i></div></a>
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
            <th>الاسم العربي</th>
            <th>الاسم الانجليزي</th>
            <th>الحالة</th>
            <th>الوظيفة مميز</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($jobs) > 0)
          @foreach($jobs as $index => $job)
          <tr>
            <th scope="row">{{ $job->id }}</th>
            <td><img style="width: 50px;height: 50px;" src="{{ asset($job->photo) }}" class="img-fluid img-thumbnail" alt=""></td>
            <td>{{ $job->title_ar }}</td>
            <td>{{ $job->title }}</td>
            <td>
              @if($job->status == 'active')
              <a href="{{ route('admin.job.change.status', ['job' => $job->id, 'status' => 'inactive']) }}" class="btn btn-success btn-icon mg-b-10" title="إخقاء"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @else
              <a href="{{ route('admin.job.change.status', ['job' => $job->id, 'status' => 'active']) }}" class="btn btn-danger btn-icon mg-b-10" title="إظهار"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @endif
            </td>
            <td>
              @if($job->is_featured)
              <div class="text-center tx-bold tx-success">
                <i class="icon ion-ios-checkmark-outline tx-22"></i>
              </div>
              @else
              <div class="text-center tx-bold tx-danger">
                <i class="icon ion-ios-close-outline tx-22"></i>
              </div>
              @endif
            </td>
            <td>
              <div style="display: flex;justify-content: space-evenly;">
                <a href="{{ route('admin.job.show', ['job' => $job->id]) }}" class="btn btn-warning btn-icon btn-sm" title="التفاصيل"><div><i class="icon ion-ios-information-outline"></i></div></a>
                <a href="{{ route('admin.job.edit', ['job' => $job->id]) }}" class="btn btn-info btn-icon btn-sm" title="تعديل"><div><i class="icon ion-android-create"></i></div></a>
                <button onclick="x = confirm('هل انت متأكد ؟'); if(x){ $('.form-delete{{ $index }}').submit() }" class="btn btn-danger btn-icon btn-sm" title="حذف"><div><i class="icon ion-android-remove-circle"></i></div></button>
              </div>
              <form class="form-delete{{ $index }}" method="post" action="{{ route('admin.job.destroy', ['job' => $job->id]) }}">
                @csrf
                @method('DELETE')
              </form>
            </td>
          </tr>
          @endforeach
          @else
          <tr>
            <td colspan="10">لا يوجد بيانات لعرضها</td>
          </tr>
          @endif
        </tbody>
        <tfoot class="">
          <tr>
            <th>ID</th>
            <th>الصورة</th>
            <th>الاسم العربي</th>
            <th>الاسم الانجليزي</th>
            <th>الحالة</th>
            <th>الوظيفة مميزة</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- bd -->
  </div>



</x-admin-layout>