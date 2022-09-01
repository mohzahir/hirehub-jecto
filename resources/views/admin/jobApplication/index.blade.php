<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة تقديمات الوظائف</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-android-bookmark"></i>
    <div>
      <h4>إدارة تقديمات الوظائف</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات تقديمات الوظائف والتعديل عليها</p>
    </div>
    
  </x-slot>

  @include('flash-message');

  <div class="card pd-25">

    <div class=" table-responsive">
      <table class="table display responsive nowrap dataTable no-footer dtr-inline collapsed">
        <thead class="">
          <tr>
            <th>ID</th>
            <th>الوظيفة</th>
            <th>الإعلان</th>
            <th>إسم المتقدم</th>
            <th>رقم هاتف المتقدم</th>
            <th>بريد المتقدم</th>
            <th>السيرة الزاتية</th>
            <th>رسالة التقديم</th>
            <th>تمت المراسلة</th>
          </tr>
        </thead>
        <tbody>
          @if(count($jobApplications) > 0)
          @foreach($jobApplications as $index => $jobApplication)
          <tr>
            <th scope="row">{{ $jobApplication->id }}</th>
            <td>{{ $jobApplication->jobPost->job->title_ar }}</td>
            <td>{{ $jobApplication->jobPost->title_ar }}</td>
            <td>{{ $jobApplication->candidate_id ? $jobApplication->candidate->name : $jobApplication->name }}</td>
            <td>{{ $jobApplication->candidate_id ? $jobApplication->candidate->phone : $jobApplication->phone }}</td>
            <td>{{ $jobApplication->candidate_id ? $jobApplication->candidate->email : $jobApplication->email }}</td>
            <td class="text-center"><a target="_blank" href="{{ asset($jobApplication->cv) }}"><i class="icon ion-link tx-22 text-success"></i></a></td>
            <td>{{ $jobApplication->cover_letter }}</td>
            <td>
              @if($jobApplication->is_replied_to == 0)
              <a href="{{ route('admin.jobApplication.change.status', ['jobApplication' => $jobApplication->id, 'is_replied_to' => 1]) }}" class="btn btn-danger btn-icon mg-b-10" title="لم تتم المراسلة بعد"><div><i class="icon ion-ios-close-outline tx-22"></i></div></a>
              @else
              <a href="{{ route('admin.jobApplication.change.status', ['jobApplication' => $jobApplication->id, 'is_replied_to' => 0]) }}" class="btn btn-success btn-icon mg-b-10" title="تمت المراسلة"><div><i class="icon ion-ios-checkmark-outline tx-22"></i></div></a>
              @endif
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
            <th>الوظيفة</th>
            <th>الإعلان</th>
            <th>إسم المتقدم</th>
            <th>رقم هاتف المتقدم</th>
            <th>بريد المتقدم</th>
            <th>السيرة الزاتية</th>
            <th>رسالة التقديم</th>
            <th>تمت المراسلة</th>
          </tr>
        </tfoot>
      </table>
      {!! $jobApplications->links() !!}
    </div><!-- bd -->
  </div>



</x-admin-layout>