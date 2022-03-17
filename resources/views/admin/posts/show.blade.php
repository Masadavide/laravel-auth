@extends('layouts.app')

@section('title','prodotto')

@section('content')
    <div>
        {{$post->title}}
        {{$post->author}}
        {{$post->post_date}}
        {{$post->content}}
        {{$post->published}}
        {{$post->slug}}
    </div>
    <button>
        <a href="{{ route('admin.posts.index')}}">
            indietro
        </a>
    </button>
@endsection