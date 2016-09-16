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
            Add Food Details
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(array('route' => 'food.store','data-parsley-validate' => '')) !!}
                    {{ Form::label('category', 'For:') }}
                    {{ Form::select('category', array('0' => 'common', '1' => 'police','2' => 'special','3' => 'media'), null, array('class' => 'form-control'))}}
                    {{ Form::label('meal','Meal:')}}
                    {{ Form::text('meal',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('time','Timing:')}}
                    {{ Form::text('time',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('counter','Counter:')}}
                    {{ Form::text('counter',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('nearby','Near By:')}}
                    {{ Form::text('nearby',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::submit('Add Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/food') }}" role="button">Cancel</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
<footer>
    <footer>

<script src="/js/parsley.js"></script>
