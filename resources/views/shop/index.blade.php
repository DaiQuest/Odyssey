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
                   <img src="{{$shop->img}}">
                </div>
                <div class="panel-footer">
                    {{$shop->valeur}}
                </div>
            </div>
        </div>
    @endforeach
@endsection