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
            Edit Medical Details
        </div>
    </div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<hr>
            {{ Form::model($medical, array('route' => array('medical.update', $medical->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
            {{ Form::label('loc','Location:')}}
            {{ Form::text('loc',$medical->areaName,array('class'=> 'form-control','required' => ''))}}
            {{ Form::label('doc','Doctor name:')}}
            {{ Form::text('doc',$medical->locationofAcc,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('contact','Phone:')}}
            {{ Form::text('contact',$medical->nearby,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('shift','Shift:')}}
            {{ Form::text('shift',null,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('dis', 'Discipline:') }}
			      {{ Form::select('dis', array('Allopathy' => 'Allopathy', 'Ayurveda' => 'Ayurveda'), $medical->dis, array('class' => 'form-control'))}}
            {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
            <a class="btn btn-danger btn-block" href="{{ url('/medical') }}" role="button">Cancel</a>
            {!! Form::close() !!}
		</div>
	</div>

@endsection
<script src="/js/parsley.js"></script>
