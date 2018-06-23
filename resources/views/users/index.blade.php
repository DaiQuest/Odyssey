@extends('templates.default')
@section('content')


		  <div class="panel panel-default">
        <div class="panel-heading"</div>
        <div class="panel-body">

            Nom :<strong>{{auth()->user()->name}}</strong> <br>

            E-mail : {{auth()->user()->email}}
         
        </div>
    </div>


    {!! Form::model($user, ['route'=>['modif', $user->id]]) !!}

    {!! Form::label('name') !!}
    {!! Form::text('name') !!}

<br>
        {!! Form::label('password') !!}
        {!! Form::password('password') !!}
<br>
    {!! Form::label('email') !!}
    {!! Form::text('email') !!}

    <br>
    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
	@endsection

	@if($message)
	<pre>
	{{var_dump($message)}}
	</pre>
	@endif