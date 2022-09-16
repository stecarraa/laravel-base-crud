@extends('layouts.mainContent')

@section('title', 'create')

@section('main-content')

<div class="container">
  @if ($errors->any())
  <div class="alert alert-danger" role="alert">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
    <form action="{{ route('comic.store') }}" method="post">
        @csrf
        
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
              </div>
              <div class="form-group col-md-6">
                <label for="title">Series</label>
                    <input name="series" type="text" class="form-control" id="title" placeholder="Enter title">
              </div>
              <div class="form-group col-md-6">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input name="price" type="text" class="form-control" id="price"  placeholder="dilli-ding dilli-dong">
            </div>
            <div class="form-group">
                <label for="price">Image Url</label>
                <input name="thumb" type="text" class="form-control" id="imgUrl"  placeholder="Incolla url">
            </div>
            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input name="sale_date" type="date" class="form-control" id="date">
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="type">Type</label>
                    <select class="form-select" name="type" id="type">
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                        <option value="action comic">Action Comic</option>
                        <option value="other">Other</option>
                    </select>
              </div>
            
            </div>
           
            <button type="submit" class="btn btn-primary m-4 ms-0">Add Comic</button>
          </form>
</div>


@endsection