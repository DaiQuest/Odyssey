@extends('templates.default')
@section('title','Profil de' )
@section('content')
 @foreach($user as $user)
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"></h3>
                </div>
                <div class="panel-body">
				Name : {{$user->name}}
				<br>
				<br>
				e-mail : {{$user->email}}
				<br>
				<br>
				Password : {{$user->password}}
                </div>
                <div class="panel-footer">
				
                    
                </div>
            </div>
        </div>
    @endforeach
	@endsection
