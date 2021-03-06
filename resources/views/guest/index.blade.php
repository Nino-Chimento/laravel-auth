@extends('layouts.app')
@section('content')


    <h1>Tutti i post </h1>
    <table class="table">
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Body</th>
            <th>Autore</th>
            <th>image</th>
        </tr>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                 <td>{{$post->id}}</td>
                 <td><a href="{{route("postsShow",$post)}}">{{$post->title}}</a></td>
                <td>{{$post->body}}</td>
                <td>{{$post->user->name}}</td> 
                 <td><img src="{{asset("storage/".$post->img)}}" alt=""></td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection