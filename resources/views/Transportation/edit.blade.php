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
            Edit Bus Details
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {{ Form::model($tr, array('route' => array('transportation.update', $tr->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
                    {{ Form::label('busno','Bus No:')}}
                    {{ Form::text('busno',$tr->busno,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('contact','Driver Contact:')}}
                    {{ Form::text('contact',$tr->contact,array('class'=> 'form-control'))}}
                    {{ Form::label('from','From:')}}
                    {{ Form::text('from',$tr->from,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('dest','Destination:')}}
                    {{ Form::text('dest',$tr->dest,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('deptime','Departure Time:')}}
                    {{ Form::text('deptime',$tr->deptime,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('parking','Parking Location:')}}
                    {{ Form::text('parking',$tr->parking,array('class'=> 'form-control'))}}
                    {{ Form::label('status', 'Status:') }}
        			{{ Form::select('status', array('0' => 'Available', '1' => 'Out Of Service'), $tr->status, array('class' => 'form-control'))}}
                    {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
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
