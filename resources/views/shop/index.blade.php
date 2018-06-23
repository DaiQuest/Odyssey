@extends('templates.default')
@section('title','Shop')
@section('content')

    @foreach($shop as $shop)
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$shop->name}}</h3>
                </div>
                <div class="panel-body">
                   <img src="{{$shop->img}}" width="100" height="100">
                </div>
                <div class="panel-footer">
                    {{$shop->valeur}}
					{{$shop->id}}
                </div>
            </div>
        </div>
    @endforeach
@endsection

