<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة إعلانات ورش العمل</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-calculator-outline"></i>
    <div>
      <h4>إدارة إعلانات ورش العمل</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات إعلانات ورش العمل والتعديل عليها</p>
    </div>
    <div class="text-left w-100">
      <a href="{{ route('admin.running_workshop.create') }}" class="btn btn-teal btn-icon rounded-circle" title="إضافة"> <div><i class="icon ion-ios-plus-outline" style="font-size: 25px; color: #fff"></i></div></a>
    </div>
    
  </x-slot>

  @include('flash-message');

  <div class="card pd-25">

    <div class=" table-responsive">
      <table class="table display responsive nowrap dataTable no-footer dtr-inline collapsed">
        <thead class="">
          <tr>
            <th>ID</th>
            <th>ورشة العمل</th>
            <th>السعر بالجنيه</th>
            <th>السعر بالدولار</th>
            <th>تاريخ البداية</th>
            <th>تاريخ النهاية</th>
            <th>عدد ساعات المحاضرة</th>
            <th>عدد الساعات الكلي</th>
            <th>المكان</th>
            <th>حالة الظهور</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($running_workshops) > 0)
          @foreach($running_workshops as $index => $running_workshop)
          <tr>
            <th scope="row">{{ $running_workshop->id }}</th>
            <td>{{ $running_workshop->workshop->title_ar }}</td>
            <td>{{ $running_workshop->price_sdg }}</td>
            <td>{{ $running_workshop->price_dollar}}</td>
            <td>{{ $running_workshop->start_date}}</td>
            <td>{{ $running_workshop->finish_date}}</td>
            <td>{{ $running_workshop->lecture_hours}}</td>
            <td>{{ $running_workshop->total_hours}}</td>
            <td>{{ $running_workshop->location}}</td>
            <td>
              @if($running_workshop->shown == 1)
              <a href="{{ route('admin.running_workshop.change.status', ['running_workshop' => $running_workshop->id, 'status' => '0']) }}" class="btn btn-success btn-icon mg-b-10" title="إخقاء"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @else
              <a href="{{ route('admin.running_workshop.change.status', ['running_workshop' => $running_workshop->id, 'status' => '1']) }}" class="btn btn-danger btn-icon mg-b-10" title="إظهار"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @endif
            </td>
            <td class="text-center tx-bold">
              <span class="badge badge-info rounded ">{{ $running_workshop->workshopApplications->count() }}</span>
            </td>
            <td>
              <div style="display: flex;justify-content: space-evenly;">
                <!-- <a href="{{ route('admin.running_workshop.show', ['running_workshop' => $running_workshop->id]) }}" class="btn btn-warning btn-icon btn-sm" title="التفاصيل"><div><i class="icon ion-ios-information-outline"></i></div></a> -->
                <a href="{{ route('admin.running_workshop.edit', ['running_workshop' => $running_workshop->id]) }}" class="btn btn-info btn-icon btn-sm" title="تعديل"><div><i class="icon ion-android-create"></i></div></a>
                @if($running_workshop->workshopApplications->count() == 0)
                <button onclick="x = confirm('هل انت متأكد ؟'); if(x){ $('.form-delete{{ $index }}').submit() }" class="btn btn-danger btn-icon btn-sm" title="حذف"><div><i class="icon ion-android-remove-circle"></i></div></button>
                @endif
              </div>
              <form class="form-delete{{ $index }}" method="post" action="{{ route('admin.running_workshop.destroy', ['running_workshop' => $running_workshop->id]) }}">
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
            <th>ورشة العمل</th>
            <th>السعر بالجنيه</th>
            <th>السعر بالدولار</th>
            <th>تاريخ البداية</th>
            <th>تاريخ النهاية</th>
            <th>عدد ساعات المحاضرة</th>
            <th>عدد الساعات الكلي</th>
            <th>المكان</th>
            <th>حالة الظهور</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
      {!! $running_workshops->links() !!}
    </div><!-- bd -->
  </div>



</x-admin-layout>