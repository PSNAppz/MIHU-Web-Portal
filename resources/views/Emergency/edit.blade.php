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
            Edit Emergency Details
        </div>
    </div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<hr>
            {{ Form::model($emergency, array('route' => array('emergency.update', $emergency->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
            {{ Form::label('service','Service:')}}
            {{ Form::select('service', array('Ambulance' => 'Ambulance', 'Wheelchair' => 'Wheelchair'), $emergency->service, array('class' => 'form-control'))}}
            {{ Form::label('name','Contact name:')}}
            {{ Form::text('name',$emergency->name,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('contact','Phone:')}}
            {{ Form::text('contact',$emergency->contact,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
            <a class="btn btn-danger btn-block" href="{{ url('/medical') }}" role="button">Cancel</a>
            {!! Form::close() !!}
		</div>
	</div>

@endsection
<script src="/js/parsley.js"></script>
