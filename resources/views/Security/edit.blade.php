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
            Edit Security Details
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {{ Form::model($sec, array('route' => array('security.update', $sec->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
                    {{ Form::label('name','Name:')}}
                    {{ Form::text('name',$sec->name,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('iscord', 'Coordinator:') }}
                    {{ Form::select('iscord', array('0' => 'No', '1' => 'Yes'),$sec->iscord, array('class' => 'form-control'))}}
                    {{ Form::label('location','Location:')}}
                    {{ Form::text('location',$sec->location,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('nearby','Near By:')}}
                    {{ Form::text('nearby',$sec->nearby,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('from','From Time:')}}
                    {{ Form::text('from',$sec->from,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('to','To Time:')}}
                    {{ Form::text('to',$sec->to,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('batch','Batch:')}}
                    {{ Form::text('batch',$sec->batch,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('contact','Contact:')}}
                    {{ Form::text('contact',$sec->contact,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
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
