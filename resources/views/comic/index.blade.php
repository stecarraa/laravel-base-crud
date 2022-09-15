@extends('layouts.mainContent')




@section('main-content')
    <div class="container-lg">
        <h3 class="mb-4">Comics:</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    
                    <th scope="col">ID</th>
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
                        <td colspan="2"><a href="{{route('comic.show', $comic->id)}}">{{$comic->title}}</a></td>
                        <td>{{$comic->price}}$</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td>
                            <a href="{{route('comic.edit', $comic->id)}}">
                                <button type="button" class="btn btn-sm btn-success">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('comic.destroy', $comic->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul>
        </ul>
    </div>
@endsection