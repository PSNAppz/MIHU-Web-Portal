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
            Edit Food Details
        </div>
    </div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<hr>
            {{ Form::model($food, array('route' => array('food.update', $food->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
            {{ Form::label('meal','Meal:')}}
            {{ Form::text('meal',$food->meal,array('class'=> 'form-control','required' => ''))}}
            {{ Form::label('time','Timing:')}}
            {{ Form::text('time',$food->time,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('counter','Counter:')}}
            {{ Form::text('counter',$food->counter,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('nearby','Near By:')}}
            {{ Form::text('nearby',$food->nearby,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
            <a class="btn btn-danger btn-block" href="{{ url('/accommodation') }}" role="button">Cancel</a>
            {!! Form::close() !!}
		</div>
	</div>

@endsection
<script src="/js/parsley.js"></script>
