@extends('layouts.dashboard')

@section('title', 'Blog')

@section('content')
    @foreach ($posts as $element)
        <ul>
            <li>{{$element->title}}</li>
            <li>{{$element->author}}</li>
            <li>{{$element->post_date}}</li>
            <li>{{$element->content}}</li>
            <li>{{$element->published}}</li>
            <li>{{$element->slug}}</li>
        </ul>
    @endforeach
@endsection


