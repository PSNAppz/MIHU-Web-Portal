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
            Edit Volunteer Details
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{ Form::model($volunteers, array('route' => array('volunteer.update', $volunteers->id),'data-parsley-validate' => '', 'method' => 'PUT')) }}
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('campus','Campus:')}}
                    {{ Form::select('campus', array('1' => 'Amritapuri', '2' => 'Kochi','3' => 'Coimbatore','4' => 'Mysore'), null, array('class' => 'form-control'))}}
                    {{ Form::label('batch','Batch:')}}
                    {{ Form::text('batch',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('seva','Seva:')}}
                    {{ Form::text('seva',null,array('class'=> 'form-control','required' => ''))}}
                    {{ Form::label('contact','Contact:')}}
                    {{ Form::text('contact',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('cordname','Coordinator:')}}
                    {{ Form::text('cordname',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('cordcontact','Coordinator Contact:')}}
                    {{ Form::text('cordcontact',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::submit('Edit Details',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/volunteer') }}" role="button">Cancel</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
<footer>
    <footer>

<script src="/js/parsley.js"></script>
