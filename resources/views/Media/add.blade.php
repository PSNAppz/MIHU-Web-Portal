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
            Add Media Details
        </div>
    </div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<hr>
            {{ Form::model($media, array('route' => array('media.store', $media->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
            {{ Form::label('mediaroom','Media room:')}}
            {{ Form::text('mediaroom',$media->mediaroom,array('class'=> 'form-control','required' => ''))}}
            {{ Form::label('mediaenc','Media enclosure:')}}
            {{ Form::text('mediaenc',$media->mediaenc,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('name','Contact Name:')}}
            {{ Form::text('name',$media->name,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::label('phone','Phone:')}}
            {{ Form::text('phone',$media->phone,array('class'=> 'form-control','required'=> ''))}}
            {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
            <a class="btn btn-danger btn-block" href="{{ url('/media') }}" role="button">Cancel</a>
            {!! Form::close() !!}
		</div>
	</div>

@endsection
<script src="/js/parsley.js"></script>
