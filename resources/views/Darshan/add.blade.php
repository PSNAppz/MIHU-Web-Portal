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
            Add Darshan timings
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(array('route' => 'darshan.store','data-parsley-validate' => '')) !!}
                    {{ Form::label('darshan_time','Darshan time :')}}
                    {{ Form::text('darshan_time',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('date','Date :')}}
                    {{ Form::text('date',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('token_loc','Token location:')}}
                    {{ Form::text('token_loc',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('token_time','Token time:')}}
                    {{ Form::text('token_time',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::submit('Add Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/darshan') }}" role="button">Cancel</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
<footer>
    <footer>

<script src="/js/parsley.js"></script>
