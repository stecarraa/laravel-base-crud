@extends('layouts.mainContent')

@section('title', 'edit')

@section('main-content')

<div class="container">
    <form action="{{ route('comic.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title" value="{{$comic->title}}">
              </div>
              <div class="form-group col-md-6">
                <label for="title">Series</label>
                    <input name="series" type="text" class="form-control" id="title" placeholder="Enter title" value="{{$comic->series}}">
              </div>
              <div class="form-group col-md-6">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control">value="{{$comic->description}}"</textarea>
              </div>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input name="price" type="text" class="form-control" id="price"  placeholder="dilli-ding dilli-dong" value="{{$comic->price}}">
            </div>
            <div class="form-group">
                <label for="price">Image Url</label>
                 <input name="thumb" type="text" class="form-control" id="imgUrl"  placeholder="Incolla url" value="{{$comic->thumb}}">
            </div>
            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input name="sale_date" type="date" class="form-control" id="date" value="{{$comic->sale_date}}">
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="type">Type</label>
                    <select class="form-select" name="type" id="type">
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                        <option value="other">Other</option>
                    </select>
              </div>
            
            </div>
           
            <button type="submit" class="btn btn-primary m-4 ms-0">Edit Comic</button>
          </form>
</div>


@endsection