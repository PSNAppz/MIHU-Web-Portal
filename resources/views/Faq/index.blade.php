
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
            F.A.Qs
        </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-offset-2" >
              @if(!Auth::guest())
              <a class="btn btn-success btn-lg" href="{{ url('/faq/create') }}" role="button">Add a FAQ</a>
              @endif
          </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($faqs as $faq)
                <div class="panel panel-default">
                    <div class="panel-heading" ><b>#{{$faq->id}} {{$faq->ques}}</b>
                        @if(!Auth::guest())
                        {{ Form::open(['method' => 'DELETE','style'=>'inline-block;', 'route' => ['faq.destroy', $faq->id]]) }}
                        <a style="inline-block;" class="btn btn-warning" href="{{ route('faq.edit', $faq->id,'/edit') }}" role="button">Edit</a>
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                        @endif
                </div>
                    <div class="panel-body">
                        {{ $faq->ans }}
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        {{$faqs->links()}}
    </div>

@include('layouts.footer')

@endsection
