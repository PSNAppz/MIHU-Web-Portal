@extends('layouts.app')

@section('content')
<style>
.content {
    text-align: center;
}

.title {
    font-size: 6vw;
}

.m-b-md {
    margin-bottom: 30px;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            Schedules
        </div>
    </div>
    <div class="container">
      <div class="col-md-12 ">
        <div class="panel panel-default">
          <div class="panel-body">
            <table class ="table">
              <thead>
                <tr>
                  <th><center/>Date</th>
                  <th><center/><center/>Test</th>
                  <th><center/><center/><center/>Timing</th>
                  <th><center/>Available At</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@include('layouts.footer')
@endsection
