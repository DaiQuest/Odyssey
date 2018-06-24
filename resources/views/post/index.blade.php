@extends('templates.default')
@section('title','News')
@section('content')
<br>
<br>
    @foreach($post as $post)
	
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h5 class="panel-title"><h2><b>{{$post->title}}</b></h2></h5>
					Mis à jour le <b> {{$post->updated_at}} </b>
                </div>
                <div class="panel-body">
				{{$post->content}}
                </div>
                <div class="panel-footer">
                   
                </div>
            </div>
        </div>
    @endforeach
@endsection

