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
            Add Accommodation Details
        </div>
    </div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<hr>
            {!! Form::open(array('route' => 'accommodation.store','data-parsley-validate' => '')) !!}
            {{ Form::label('gender', 'For:') }}
            {{ Form::select('gender', array('0' => 'Men', '1' => 'Women','2' => 'Police Men','3' => 'Ploice Women'), null, array('class' => 'form-control'))}}
            {{ Form::label('areaName','From Location:')}}
            {{ Form::text('areaName',null,array('class'=> 'form-control','required' => ''))}}
            {{ Form::label('locationofAcc','Accommodation At:')}}
            {{ Form::text('locationofAcc',null,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('nearby','Near By:')}}
            {{ Form::text('nearby',null,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('isFull', 'Status:') }}
			{{ Form::select('isFull', array('0' => 'Available', '1' => 'Not Available'), null, array('class' => 'form-control'))}}
            {{ Form::submit('Add Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
            {!! Form::close() !!}
		</div>
	</div>
<script src="/js/parsley.js"></script>
@endsection
