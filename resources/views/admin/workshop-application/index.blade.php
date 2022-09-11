<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة تقديمات ورش العمل</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-paper-outline"></i>
    <div>
      <h4>إدارة تقديمات ورش العمل</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات تقديمات ورش العمل والتعديل عليها</p>
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
            <th>إسم المتقدم</th>
            <th>رقم هاتف المتقدم</th>
            <th>بريد المتقدم</th>
            <th>حالة الدفع</th>
            <th>تمت المراسلة</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($applications) > 0)
          @foreach($applications as $index => $application)
          <tr>
            <th scope="row">{{ $application->id }}</th>
            <td>{{ $application->runningWorkshop->workshop->title_ar }}</td>
            <td>{{ $application->candidate_id ? $application->candidate->name : $application->name }}</td>
            <td>{{ $application->candidate_id ? $application->candidate->phone : $application->phone }}</td>
            <td>{{ $application->candidate_id ? $application->candidate->email : $application->email }}</td>
            <td>
              @if($application->payment_confirmed)
                <span class="badge badge-success">مؤكد</span>
                @else
                <span class="badge badge-danger">غير مؤكد</span>
              @endif
            </td>
            <td>
              @if($application->is_replied_to == 0)
              <a href="{{ route('admin.workshop.application.change.status', ['workshop_application' => $application->id, 'is_replied_to' => 1]) }}" class="btn btn-danger btn-icon mg-b-10" title="لم تتم المراسلة بعد"><div><i class="icon ion-ios-close-outline tx-22"></i></div></a>
              @else
              <a href="{{ route('admin.workshop.application.change.status', ['workshop_application' => $application->id, 'is_replied_to' => 0]) }}" class="btn btn-success btn-icon mg-b-10" title="تمت المراسلة"><div><i class="icon ion-ios-checkmark-outline tx-22"></i></div></a>
              @endif
            </td>
            <td>
              <a href="{{ route('admin.workshopApplication.show', ['workshopApplication' => $application->id]) }}" class="btn btn-warning btn-icon btn-sm" title="التفاصيل"><div><i class="icon ion-ios-information-outline"></i></div></a>
              <a href="{{ route('admin.workshopApplication.edit', ['workshopApplication' => $application->id]) }}" class="btn btn-info btn-icon btn-sm {{ $application->payment_confirmed ? 'disabled' : '' }}" title="مراجعة الدفع البنكي وتأكيده"><div><i class="icon ion-cash"></i></div></a>
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
            <th>إسم المتقدم</th>
            <th>رقم هاتف المتقدم</th>
            <th>بريد المتقدم</th>
            <th>حالة الدفع</th>
            <th>تمت المراسلة</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
      {!! $applications->links() !!}
    </div><!-- bd -->
  </div>



</x-admin-layout>