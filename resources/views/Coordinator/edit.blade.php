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
            Edit Coordinator Details
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {{ Form::model($cord, array('route' => array('coordinator.update', $cord->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
                    {{ Form::label('department', 'Department:') }}
                    {{ Form::text('department',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('name','Name:')}}
                    {{ Form::text('name',$cord->name,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('seva','Seva:')}}
                    {{ Form::text('seva',$cord->seva,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('contact','Contact No:')}}
                    {{ Form::text('contact',$cord->contact,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/coordinator') }}" role="button">Cancel</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
<footer>
    <footer>

<script src="/js/parsley.js"></script>
