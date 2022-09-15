@extends("layouts.mainContent")

@section('pageTitle')
{{$comic->title}}
@endsection
@section('main-content')

<div class="container">
  @if (session('created'))
  <div class="alert alert-success" role="alert">
      <strong>{{session('created')}} has been added to te liste here it is!</strong> 
  </div>
@endif

<div class="d-flex p-5">
   <div class="row justify-content-center w-100">
    <div class="col-4">
        <div class="card">
            <img class="card-img-top p-2" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <p class="card-text text-secondary">{{$comic->price}}$</p>
              <p class="card-text">{{$comic->description}}$</p>
              <p class="card-text"><small class="text-muted">{{$comic->sale_date}}</small></p>
              <a href="{{route('comic.index')}}" class="btn btn-primary w-100">Go back</a>
            </div>
          </div>
    </div>
  </div>
   </div>
</div>

@endsection