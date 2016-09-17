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
            Edit Special Event Details
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {{ Form::model($se, array('route' => array('specialevents.update', $se->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
                    {{ Form::label('category', 'Event:') }}
                    {{ Form::select('category', array('0' => 'Saree Distribution', '1' => 'Pension','2' => 'Marriage'), null, array('class' => 'form-control'))}}
                    {{ Form::label('date','Date:')}}
                    {{ Form::text('date',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('location','Location:')}}
                    {{ Form::text('location',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('time','Time:')}}
                    {{ Form::text('time',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('coordinator','Coordinator:')}}
                    {{ Form::text('coordinator',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('contact','Time:')}}
                    {{ Form::text('contact',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::submit('Add Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/specialevents') }}" role="button">Cancel</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
<footer>
    <footer>

<script src="/js/parsley.js"></script>
