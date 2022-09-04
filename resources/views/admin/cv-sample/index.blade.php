<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة السير زاتية</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-briefcase"></i>
    <div>
      <h4>إدارة السير زاتية</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات السير زاتية والتعديل عليها</p>
    </div>
    <div class="text-left w-100">
      <a href="{{ route('admin.cv-sample.create') }}" class="btn btn-teal btn-icon rounded-circle" title="إضافة"> <div><i class="icon ion-ios-plus-outline" style="font-size: 25px; color: #fff"></i></div></a>
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
            <th>القسم</th>
            <th>الصورة</th>
            <th>pdf</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($cv_samples) > 0)
          @foreach($cv_samples as $index => $cv_sample)
          <tr>
            <th scope="row">{{ $cv_sample->id }}</th>
            <td>{{ $cv_sample->title_ar }}</td>
            <td>{{ $cv_sample->title }}</td>
            <td>{{ $cv_sample->category->title_ar }}</td>
            <td><img style="width: 50px;height: 50px;" src="{{ asset($cv_sample->photo) }}" class="img-fluid img-thumbnail" alt=""></td>
            <td><a href="{{ asset($cv_sample->pdf) }}"> <i class="icon ion-link tx-22"></i></a></td>
            
            <td>
              <div style="display: flex;justify-content: space-evenly;">
                <button onclick="x = confirm('هل انت متأكد ؟'); if(x){ $('.form-delete{{ $index }}').submit() }" class="btn btn-danger btn-icon btn-sm" title="حذف"><div><i class="icon ion-android-remove-circle"></i></div></button>
              </div>
              <form class="form-delete{{ $index }}" method="post" action="{{ route('admin.cv-sample.destroy', ['cv_sample' => $cv_sample->id]) }}">
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
            <th>القسم</th>
            <th>الصورة</th>
            <th>pdf</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- bd -->
  </div>



</x-admin-layout>