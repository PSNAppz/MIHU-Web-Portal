@extends('layouts.app')

@section('content')
<style>
.content {
    text-align: center;
}

.title {
    font-size: 5vw;
}

.m-b-md {
    margin-bottom: 30px;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            Edit Lost &amp; Found
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {{ Form::model($lost, array('files' => true,'route' => array('lost.update', $lost->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
                    {{ Form::label('category', 'Category:') }}
                    {{ Form::select('category', array('0' => 'Valuables', '1' => 'People'), null, array('class' => 'form-control'))}}
                    {{ Form::label('image','Image:')}}
                    {!! Form::file('image', array('class' => 'image')) !!}
                    {{ Form::label('location','Location:')}}
                    {{ Form::text('location',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('description','Description:')}}
                    {{ Form::text('description',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::submit('Add Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/lost') }}" role="button">Cancel</a>


                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
<footer>
    <footer>

<script src="/js/parsley.js"></script>
