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
            Medical Assistance
        </div>
    </div>
<div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#biotech"><b>Biotech</b></a></li>
    <li><a data-toggle="tab" href="#stage"><b>Main Stage</b></a></li>


  </ul>
  <div class="tab-content">
  <div id="biotech" class="tab-pane active">
        <h3>Biotech</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <hr>
                <div class="panel panel-default">
                    <div class="panel-body">

                        <div class="glyphicon glyphicon-plus">Medical AidPost 1</div>
                        <div id="carbonads-container">
                            <div class="carbonad">
                                <div id="azcarbon">
                                    <span><span class="carbonad-image"><a href="location1" target="_blank"><img width="130" height="100" border="0" src="https://assets.servedby-buysellads.com/p/manage/asset/id/32130" class="carbonad-image carbonad-img" style="max-width:130px;"></a></span>
                                    <span class="carbonad-text">Medical Aid Post 1 near Biotech Canteen</span>
                                </div>
                            </div>
                        </div>

                        <div class="glyphicon glyphicon-plus">Medical AidPost 2</div>
                        <div id="carbonads-container">
                            <div class="carbonad">
                                <div id="azcarbon">
                                    <span><span class="carbonad-image"><a href="location1" target="_blank"><img width="130" height="100" border="0" src="https://assets.servedby-buysellads.com/p/manage/asset/id/32130" class="carbonad-image carbonad-img" style="max-width:130px;"></a></span>
                                    <span class="carbonad-text">Medical Aid Post 2  left side Biotech cannteen</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <div id="stage" class="tab-pane fade">
            <h3>Main Stage</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div class="glyphicon glyphicon-plus">Medical AidPost 1</div>
                            <div id="carbonads-container">
                                <div class="carbonad">
                                    <div id="azcarbon">
                                        <span><span class="carbonad-image"><a href="location1" target="_blank"><img width="130" height="100" border="0" src="https://assets.servedby-buysellads.com/p/manage/asset/id/32130" class="carbonad-image carbonad-img" style="max-width:130px;"></a></span>
                                        <span class="carbonad-text">Medical Aid Post 1  left side Main stage</span>
                                    </div>
                                </div>
                            </div><div class="glyphicon glyphicon-plus">Medical AidPost 1</div>
                            <div id="carbonads-container">
                                <div class="carbonad">
                                    <div id="azcarbon">
                                        <span><span class="carbonad-image"><a href="location1" target="_blank"><img width="130" height="100" border="0" src="https://assets.servedby-buysellads.com/p/manage/asset/id/32130" class="carbonad-image carbonad-img" style="max-width:130px;"></a></span>
                                        <span class="carbonad-text">Medical Aid Post 2  right side Main stage</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</div>
</div>
@include('layouts.footer')

@endsection
