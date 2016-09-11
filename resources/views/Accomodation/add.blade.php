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
            Add Accomodation Details
        </div>
    </div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<hr>
            {!! Form::open(array('route' => 'accomodation.store')) !!}
            {{ Form::label('areaName','From Location:')}}
            {{ Form::text('areaName',null,array('class'=> 'form-control'))}}
            {{ Form::label('locationofAcc','Accomodation At:')}}
            {{ Form::text('locationofAcc',null,array('class'=> 'form-control'))}}
            {{ Form::label('isFull', 'Status:') }}
			{{ Form::select('isFull', array('0' => 'Available', '1' => 'Not Available'), null, array('class' => 'form-control'))}}
            {{ Form::submit('Add Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
            {!! Form::close() !!}
		</div>
	</div>

@endsection
