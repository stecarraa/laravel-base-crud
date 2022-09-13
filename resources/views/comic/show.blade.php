@extends("layouts.mainContent")

@section('pageTitle')
{{$comic->title}}
@endsection
@section('content')
<div class="container">
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}">
   
</div>
@endsection