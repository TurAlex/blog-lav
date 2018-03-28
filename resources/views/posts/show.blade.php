@extends('layouts.master')

@section('top_widgets')
  @include('layouts.widgets.slider_main')
@endsection

@section('content')
  <div>{{$post->id}}</div>
  <div>{{$post->title}}</div>
  <div>{{$post->url}}</div>
  <div>{{$post->intro}}</div>
  <div>{{$post->content}}</div>
  <div>{{$post->active}}</div>
  <div>{{$post->category_id}}</div>
  <div>{{$post->tags_list}}</div>
  <div>{{$post->created_at}}</div>
  <div>{{$post->updated_at}}</div>
  <div><a href="/posts">Back</a></div>
@endsection