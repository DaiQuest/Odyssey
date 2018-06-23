@extends('templates.default')
@section('content')


		  <div class="panel panel-default">
        <div class="panel-heading"</div>
        <div class="panel-body">

        <h3>    Profil of :<strong>{{auth()->user()->name}}</strong> <br></h3>

      <!--      E-mail : {{auth()->user()->email}} -->
         
        </div>
    </div>

<br>
 &nbsp; &nbsp;  {!! Form::model($user, ['route'=>['modif', $user->id]]) !!}
&nbsp; &nbsp;
    {!! Form::label('name') !!}
&nbsp;   &nbsp;  &nbsp; &nbsp;
&nbsp; &nbsp;{!! Form::text('name', $user->name,['required' => 'required']) !!}
<br>
<br>
 &nbsp;  &nbsp;     {!! Form::label('password') !!}
  &nbsp;  &nbsp;    {!! Form::password('password', ['required' => 'required']) !!}
<br>		
<br>
 &nbsp; &nbsp;  {!! Form::label('email') !!}
 &nbsp; &nbsp;  &nbsp; &nbsp;
 &nbsp; &nbsp;{!! Form::email('email', $user->email,['required' => 'required']) !!}
<br>
    <br>
	<br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;{!! Form::submit('Enregistrer') !!}

  {!! Form::close() !!}

<br>
	@endsection

@if (session('success'))
	<div class="alert alert-success">
	{{ session('success') }}
	</div>
	@endif
	
	@if (session('error'))
	<div class="alert alert-success">
	{{ session('e') }}
	</div>
	@endif