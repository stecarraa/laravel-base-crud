@extends('layouts.mainContent')

@section('title', 'ComicsList')

@section('main-content')
    <div class="container-lg">
        <h3 class="mb-4">Comics:</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    
                    <th scope="col"><a href="{{route('comic.show', $comic->id)}}">ID</a> </th>
                    <th scope="col" colspan="2">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic->id}}</th>
                        <td colspan="2">{{$comic->title}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul>
        </ul>
    </div>
@endsection