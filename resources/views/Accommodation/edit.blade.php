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
            Edit Accommodation Details
        </div>
    </div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<hr>
            {{ Form::model($acc, array('route' => array('accommodation.update', $acc->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
            {{ Form::label('gender', 'For:') }}
            {{ Form::select('gender', array('0' => 'Men', '1' => 'Women','2' => 'Police Men','3' => 'Police Women', '4' => 'VIP'), $acc->gender, array('class' => 'form-control'))}}
            {{ Form::label('areaName','From Location:')}}
            {{ Form::text('areaName',$acc->areaName,array('class'=> 'form-control','required' => ''))}}
            {{ Form::label('locationofAcc','Accommodation At:')}}
            {{ Form::text('locationofAcc',$acc->locationofAcc,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('nearby','Near By:')}}
            {{ Form::text('nearby',$acc->nearby,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('isFull', 'Status:') }}
			{{ Form::select('isFull', array('0' => 'Available', '1' => 'Not Available'), $acc->isFull, array('class' => 'form-control'))}}
            {{ Form::label('coord','Coordinator:')}}
            {{ Form::text('coord',$acc->coord,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('contact','Phone:')}}
            {{ Form::text('contact',$acc->contact,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
            <a class="btn btn-danger btn-block" href="{{ url('/accommodation') }}" role="button">Cancel</a>
            {!! Form::close() !!}
		</div>
	</div>

@endsection
<script src="/js/parsley.js"></script>
