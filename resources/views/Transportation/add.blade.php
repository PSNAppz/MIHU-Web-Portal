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
            Add Bus Details
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(array('route' => 'transportation.store','data-parsley-validate' => '')) !!}
                    {{ Form::label('busno','Bus No:')}}
                    {{ Form::text('busno',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('contact','Driver Contact:')}}
                    {{ Form::text('contact',null,array('class'=> 'form-control'))}}
                    {{ Form::label('from','From:')}}
                    {{ Form::text('from',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('dest','Destination:')}}
                    {{ Form::text('dest',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('deptime','Departure Time:')}}
                    {{ Form::text('deptime',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('parking','Parking Location:')}}
                    {{ Form::text('parking',null,array('class'=> 'form-control'))}}
                    {{ Form::label('status', 'Status:') }}
        			{{ Form::select('status', array('0' => 'Available', '1' => 'Out Of Service'), 0, array('class' => 'form-control'))}}
                    {{ Form::submit('Add Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/transportation') }}" role="button">Cancel</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
<footer>
    <footer>

<script src="/js/parsley.js"></script>
