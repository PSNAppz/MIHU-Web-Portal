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
            Add Security Details
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(array('route' => 'security.store','data-parsley-validate' => '')) !!}
                    {{ Form::label('name','Name:')}}
                    {{ Form::text('name',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('iscord', 'Coordinator:') }}
                    {{ Form::select('iscord', array('0' => 'No', '1' => 'Yes'),'0', array('class' => 'form-control'))}}
                    {{ Form::label('location','Location:')}}
                    {{ Form::text('location',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('nearby','Near By:')}}
                    {{ Form::text('nearby',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('from','From Time:')}}
                    {{ Form::text('from',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('to','To Time:')}}
                    {{ Form::text('to',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('batch','Batch:')}}
                    {{ Form::text('batch',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('contact','Contact:')}}
                    {{ Form::text('contact',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::submit('Add Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/security') }}" role="button">Cancel</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
<footer>
    <footer>

<script src="/js/parsley.js"></script>
