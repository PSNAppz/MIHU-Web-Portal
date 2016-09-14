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
            Edit Darshan Details
        </div>
    </div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<hr>
      {{ Form::model($dar, array('route' => array('darshan.update', $dar->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
      {{ Form::label('darshan_time','Darshan time:')}}
      {{ Form::text('darshan_time',$dar->darshan_time,array('class'=> 'form-control','required' => ''))}}
      {{ Form::label('date','Date:')}}
      {{ Form::text('date',$dar->date,array('class'=> 'form-control','required'=> ''))}}
      {{ Form::label('token_loc','Token location:')}}
      {{ Form::text('token_loc',$dar->token_loc,array('class'=> 'form-control','required'=> ''))}}
      {{ Form::label('token_time','Token time:')}}
      {{ Form::text('token_time',$dar->token_time,array('class'=> 'form-control','required'=> ''))}}
      {{ Form::label('contact_name','Contact name:')}}
      {{ Form::text('contact_name',$dar->contact_name,array('class'=> 'form-control','required'=> ''))}}
      {{ Form::label('contact_no','Contact no:')}}
      {{ Form::text('contact_no',$dar->contact_no,array('class'=> 'form-control','required'=> ''))}}
      {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
      <a class="btn btn-danger btn-block" href="{{ url('/accommodation') }}" role="button">Cancel</a>
      {!! Form::close() !!}
		</div>
	</div>

@endsection
<script src="/js/parsley.js"></script>
