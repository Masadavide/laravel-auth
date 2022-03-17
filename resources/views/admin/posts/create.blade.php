@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <form action="{{route("posts.store")}}" method="POST">
    @csrf

        <ul>
            <li>{{$element->title}}</li>
            <li>{{$element->author}}</li>
            <li>{{$element->post_date}}</li>
            <li>{{$element->content}}</li>
            <li>{{$element->published}}</li>
            <li>{{$element->slug}}</li>
        </ul>
        <button>
            <a href="{{ route('admin.posts.show', $element->id)}}">
                visualizza prodotto {{$element->title}}
            </a>
        </button>

    </form> 
@endsection