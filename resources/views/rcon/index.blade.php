@extends('templates.default')
@section('title','Rcon')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => 'RconCmd']) !!}
            <div class="form-group">
                {{ Form::label('name', null, ['class' => 'control-label']) }}
                {!! Form::text('name', null, ['class' => 'form-control'])!!}
            </div>
            <div class="form-group">
                {{ Form::label('cmd', null, ['class' => 'control-label']) }}
                {!! Form::textarea('cmd', null, ['class' => 'form-control'])!!}
            </div>
            {!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}
        </div>
    </div>
        {!! Form::close() !!}
</div>
<br>
<br>
<div class="container-fluid">
    <div class="row">
        @if($isconnected)
            <div class="col-md-12" style="background-color: #1b1e21;color: white">
                Vous etes connecté à RCON.
                @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
            </div>
        @endif
    </div>
</div>



@endsection
