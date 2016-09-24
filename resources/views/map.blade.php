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
            MAP
        </div>
    </div>
    <div class="container">
      <div class="col-md-12 ">
        <div class="panel panel-default">
          <div class="panel-body">
              <div style="overflow-x:auto;">

            <img src="{{asset('/images/map.jpeg')}}">
        </div>
          </div>
        </div>
      </div>
    </div>
@include('layouts.footer')
@endsection
