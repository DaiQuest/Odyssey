@extends('templates.default')
@section('title','Shop')
@section('content')
 @foreach($user as $user)
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$user->name}}</h3>
                </div>
                <div class="panel-body">
                </div>
                <div class="panel-footer">
				{{ auth()->user()->name }}
                    {{$user->email}}
                </div>
            </div>
        </div>
    @endforeach
	@endsection