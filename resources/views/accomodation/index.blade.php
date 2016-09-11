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
        <div class="col-md-10 col-md-offset-1">
            @if(!Auth::guest())
            <a class="btn btn-success" href="{{ url('/accomodation/create') }}" role="button">Add New Accomodation Details</a>
        @endif
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">Accomodation Details - MEN</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>From</th>
                            <th>Accomodation At</th>
                            <th>Status</th>
                            <th>Updated at</th>
                            @if(!Auth::guest())
                            <th></th>
                            <th></th>
                        @endif
                        </thead>
                        <tbody>
                            @foreach($accomodations as $acc)
                                <tr>
                                    <th>{{ $acc->id}}</th>
                                    <th>{{ $acc->areaName}}</th>
                                    <th>{{ $acc->locationofAcc}}</th>
                                    <th>@if ($acc->isFull == 1)
                                            <span class="label label-danger">Accomodation Full</span>
                                        @else
                                            <span class="label label-success">Available</span>
                                        @endif</th>

                                    <th>{{ $acc->updated_at}}</th>
                                    @if(!Auth::guest())
                                    <th><a class="btn btn-warning" href="{{ url('/accomodation/up') }}" role="button">Update</a></th>
                                    <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['accomodation.destroy', $acc->id]]) }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}</th>
                                @endif
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
