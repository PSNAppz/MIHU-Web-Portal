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
            Add Coordinator Details
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(array('route' => 'volunteer.store','data-parsley-validate' => '')) !!}
                    {{ Form::label('occupation', 'For:') }}
                    {{ Form::select('occupation', array('1' => 'Student', '2' => 'Faculty','3' => 'Others'), null, array('class' => 'form-control'))}}
                    {{ Form::label('name','Name:')}}
                    {{ Form::text('name',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('seva','Seva:')}}
                    {{ Form::text('seva',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('contact','Contact No:')}}
                    {{ Form::text('contact',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::submit('Add Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
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
