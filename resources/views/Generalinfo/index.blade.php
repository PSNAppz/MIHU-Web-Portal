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

.full-height2 {
      height:130vh;
      background-image:url(./images/general.jpg);
      background-repeat: no-repeat;
      //background-attachment: fixed;
      background-position: center;
}
.full-height3 {
      height:130vh;
      background-image:url(./images/general2.jpg);
      background-repeat: no-repeat;
      //background-attachment: fixed;
      background-position: center;
}
</style>
    <div class="content">
        <div class="title m-b-md">
          General Info
        </div>
        <hr>
  </ul>
  <div class ="row">
      <div class = "flex-center position-ref full-height2">
     </div>
     <hr>
     <div class = "flex-center position-ref full-height3">
    </div>
 </div>

</div>
</div>
@include('layouts.footer')

@endsection
