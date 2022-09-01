<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة العملاء</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon icon ion-ios-people-outline"></i>
    <div>
      <h4>إدارة العملاء</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات العملاء والتعديل عليها</p>
    </div>
    
  </x-slot>

  @include('flash-message');

  <div class="card pd-25">

    <div class=" table-responsive">
      <table class="table display responsive nowrap dataTable no-footer dtr-inline collapsed">
        <thead class="">
          <tr>
            <th>ID</th>
            <th>صورة</th>
            <th>الإسم</th>
            <th>رقم الهاتف</th>
            <th>البريد الإلكتروني</th>
            <!-- <th>تاريخ الميلاد</th> -->
            <th>المسمى الوظيفي</th>
            <!-- <th>الدرجة الوظيفية</th> -->
            <!-- <th>الراتب الحالي</th> -->
            <!-- <th>مجال الدراسة</th> -->
            <!-- <th>الدرجة العلمية</th> -->
            <!-- <th>الجامعة\المعهد</th> -->
            <th>السيرة الزاتية</th>
            <th>الحالة</th>
            <th>العميل مميز</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($candidates) > 0)
          @foreach($candidates as $index => $candidate)
          <tr>
            <th scope="row">{{ $candidate->id }}</th>
            <td><img style="width: 50px;height: 50px;" src="{{ asset($candidate->photo ?? 'bracketplus1.4/app/img/img11.jpg') }}" class="img-fluid img-thumbnail" alt=""></td>
            <td>{{ $candidate->name ?? '-' }}</td>
            <td>{{ $candidate->phone ?? '-' }}</td>
            <td>{{ $candidate->email ?? '-' }}</td>
            <!-- <td>{{ $candidate->date_of_birth ?? '-' }}</td> -->
            <td>{{ $candidate->job_title ?? '-' }}</td>
            <!-- <td>{{ $candidate->position ?? '-' }}</td> -->
            <!-- <td>{{ $candidate->salary ?? '-' }}</td> -->
            <!-- <td>{{ $candidate->education_field ?? '-' }}</td> -->
            <!-- <td>{{ $candidate->education_degree ?? '-' }}</td> -->
            <!-- <td>{{ $candidate->education_institute ?? '-' }}</td> -->
            <td class="text-center">
              @if($candidate->cv)
              <a target="_blank" href="{{ asset($candidate->cv) }}"><i class="icon ion-link tx-22 text-success"></i></a>
              @else
              -
              @endif
            </td>
            <td>
              @if($candidate->status == 'active')
              <a href="{{ route('admin.candidate.change.status', ['candidate' => $candidate->id, 'status' => 'inactive']) }}" class="btn btn-success btn-icon mg-b-10" title="إخقاء"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @else
              <a href="{{ route('admin.candidate.change.status', ['candidate' => $candidate->id, 'status' => 'active']) }}" class="btn btn-danger btn-icon mg-b-10" title="إظهار"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @endif
            </td>
            <td>
              @if($candidate->is_featured)
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
                <a href="{{ route('admin.candidate.show', ['candidate' => $candidate->id]) }}" class="btn btn-warning btn-icon btn-sm" title="التفاصيل"><div><i class="icon ion-ios-information-outline"></i></div></a>
                <a href="{{ route('admin.candidate.edit', ['candidate' => $candidate->id]) }}" class="btn btn-info btn-icon btn-sm" title="تعديل"><div><i class="icon ion-android-create"></i></div></a>
              </div>
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
            <th>صورة</th>
            <th>الإسم</th>
            <th>رقم الهاتف</th>
            <th>البريد الإلكتروني</th>
            <!-- <th>تاريخ الميلاد</th> -->
            <th>المسمى الوظيفي</th>
            <!-- <th>الدرجة الوظيفية</th> -->
            <!-- <th>الراتب الحالي</th> -->
            <!-- <th>مجال الدراسة</th> -->
            <!-- <th>الدرجة العلمية</th> -->
            <!-- <th>الجامعة\المعهد</th> -->
            <th>السيرة الزاتية</th>
            <th>الحالة</th>
            <th>العميل مميز</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
      {!! $candidates->links() !!}
    </div><!-- bd -->
  </div>



</x-admin-layout>