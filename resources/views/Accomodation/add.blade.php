@extends('layouts.app')

@section('content')
<style>
.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.m-b-md {
    margin-bottom: 30px;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            Add Accomodation Details
        </div>
    </div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(array('route' => 'accomodation.store', 'data-parsley-validate' => '', 'files' => true)) !!}
				{{ Form::label('areaName', 'Area Name:') }}
				{{ Form::text('From Location', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('locationofAcc', 'Acc Loc:') }}
				{{ Form::text('locationofAcc', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}


				{{ Form::label('isFull', 'Accomodation Full:') }}
				<select class="form-control" name="category_id">
						<option value=0>No</option>
                        <option value=1>Yes</option>
				</select>

                <div class="row">

					<div class="col-sm-6">
						{{ Form::submit('Add Details', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
					</div>
                    <div class="col-sm-6">
						<button class="btn btn-danger btn-lg btn-block" style="margin-top: 20px;">Cancel</button>
					</div>
				</div>



			{!! Form::close() !!}
		</div>
	</div>

@endsection
