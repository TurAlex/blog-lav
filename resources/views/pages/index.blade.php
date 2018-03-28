@extends('layout')

@section('content')
  <!-- s-content
================================================== -->
  <section class="s-content">

    <div class="row masonry-wrap">
      <div class="masonry">

        <div class="grid-sizer"></div>

        @foreach($posts as $post)
        <article class="masonry__brick entry format-standard" data-aos="fade-up">

          <div class="entry__thumb">
            <a href="{{route('post.show', $post->slug)}}" class="entry__thumb-link">
              <img src="{{$post->getImage()}}">

            </a>
          </div>

          <div class="entry__text">
            <div class="entry__header">

              <div class="entry__date">
                <a href="{{route('post.show', $post->slug)}}">{{$post->getDate()}} </a>
              </div>
              <h1 class="entry__title"><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h1>

            </div>
            <div class="entry__excerpt">
              <p>{!! $post->intro !!}</p>
            </div>
            <div class="entry__meta">
                <span class="entry__meta-links">
                    <a href="{{route('category.show',$post->category->slug)}}">{{$post->getCategoryTitle()}}</a>
                </span>
            </div>
          </div>

        </article> <!-- end article -->
        @endforeach


      </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->



  </section> <!-- s-content -->

@endsection
