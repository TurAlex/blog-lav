@extends('layout')

@section('content')
  <!-- s-content
================================================== -->
  <section class="s-content">
    <div class="row narrow">
      <div class="col-full s-content__header" data-aos="fade-up">
        @if(isset($category))
          <h1>{{$category->title}}</h1>
          <p class="lead">{!! $category->description !!}</p>
        @endif
        @if(isset($tag))
          <h1>{{$tag->title}}</h1>
        @endif


      </div>
    </div>

    <div class="row masonry-wrap">
      <div class="masonry">

        <div class="grid-sizer"></div>

        @foreach($posts as $post)
          <article class="masonry__brick entry format-standard" data-aos="fade-up">

            <div class="entry__thumb">
              <a href="{{route('post.show', [$post->getCategorySlug(), $post->slug])}}" class="entry__thumb-link">
                <img src="{{$post->getImage()}}">
              </a>
            </div>

            <div class="entry__text">
              <div class="entry__header">

                <div class="entry__date">
                  <a href="{{route('post.show', [$post->getCategorySlug(), $post->slug])}}" ></a>
                </div>
                <h1 class="entry__title"><a href="{{route('post.show', [$post->getCategorySlug(), $post->slug])}}">{{$post->title}}</a></h1>

              </div>
              <div class="entry__excerpt">
                <p>{!! $post->intro !!}</p>
              </div>


            </div>

          </article> <!-- end article -->
        @endforeach


      </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->

    <div class="row">
      <div class="col-full">
        <nav class="pgn">
          {{$posts->links()}}
        </nav>
      </div>
    </div>

  </section> <!-- s-content -->

@endsection
