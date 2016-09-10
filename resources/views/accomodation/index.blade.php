@extends('layouts.app')

@section('content')
<style>
.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.m-b-md {
    margin-bottom: 30px;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            Accomodation
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Accomodation Details - MEN</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>From</th>
                            <th>Accomodation At</th>
                            <th>Full</th>
                            <th>Updated at</th>
                        </thead>
                        <tbody>
                            @foreach($accomodations as $acc)
                                <tr>
                                    <th>{{ $acc->id}}</th>
                                    <th>{{ $acc->areaName}}</th>
                                    <th>{{ $acc->locationofAcc}}</th>
                                    <th>@if ($acc->isFull == 1)
                                            Accomodation Full
                                        @else
                                            No
                                        @endif</th>
                                    <th>{{ $acc->updated_at}}</th>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
