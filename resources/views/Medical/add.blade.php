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
            Add Medical Details
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(array('route' => 'medical.store','data-parsley-validate' => '')) !!}
                    {{ Form::label('side', 'Select area:') }}
                    {{ Form::select('side', array('0' => 'Ashram', '1' => 'College'), null, array('class' => 'form-control'))}}
                    {{ Form::label('loc','Location:')}}
                    {{ Form::text('loc',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('doc','Doctor name:')}}
                    {{ Form::text('doc',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('contact','Phone:')}}
                    {{ Form::text('contact',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('dis', 'Discipline:') }}
        			      {{ Form::select('dis', array('Allopathy' => 'Allopathy', 'Ayurveda' => 'Ayurveda'), null, array('class' => 'form-control'))}}
                    {{ Form::submit('Add Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/medical') }}" role="button">Cancel</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
<footer>
    <footer>

<script src="/js/parsley.js"></script>
