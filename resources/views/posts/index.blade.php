@extends('layouts.master')

@section('top_widgets')
  @include('layouts.widgets.slider_main')

  @include('layouts.widgets.top')
@endsection

@section('content')
  <h3 class="pb-3 mb-5 font-italic border-bottom"><a href="/posts/create">From the Firehose</a></h3>
  @foreach($posts as $post)
    <div class="blog-post mb-4">
      <h2 class="blog-post-title">{{$post->title}}</h2>
      <p class="blog-post-meta"><?= date_create($post->created_at)->Format('Y-m-d D');?> by <a href="#">Jacob</a></p>
      <div>{{$post->intro}}</div>
      <div><a href="/posts/{{$post->id}}">show more</a></div>
    </div><!-- /.blog-post -->
  @endforeach

    <!-- Blog Pagination Begins -->
  <nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
  </nav>
     <!-- Blog Pagination Ends -->
@endsection