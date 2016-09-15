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
            Edit F.A.Q
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {{ Form::model($faq, array('route' => array('faq.update', $faq->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
                    {{ Form::label('ques','Question:')}}
                    {{ Form::text('ques',$faq->ques,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('ans','Answer')}}
                    {{ Form::textarea('ans',$faq->ans,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::submit('Edit FAQ',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/faq') }}" role="button">Cancel</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
<footer>
    <footer>

<script src="/js/parsley.js"></script>
