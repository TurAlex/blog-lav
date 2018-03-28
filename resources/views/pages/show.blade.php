@extends('layout')

@section('content')
  <!-- s-content
    ================================================== -->
  <section class="s-content s-content--narrow s-content--no-padding-bottom">
    @if(session('status'))
      <div class="alert-box alert-box--success hideit">
        <p>{{session('status')}}</p>
        <i class="fa fa-times alert-box__close"></i>
      </div>

    @endif
    <article class="row format-standard">

      <div class="s-content__header col-full">
        <h1 class="s-content__header-title">
          {{$post->title}}
        </h1>
        <ul class="s-content__header-meta">
          <li class="date">{{$post->getDate()}}</li>
          @if($post->hasCategory())
            <li class="cat"><span>In </span><a href="{{route('category.show',$post->category->slug)}}">{{$post->getCategoryTitle()}}</a>
            </li>
          @endif
        </ul>
      </div> <!-- end s-content__header -->

      <div class="s-content__media col-full">
        <div class="s-content__post-thumb">
          <img src="{{$post->getImage()}}" alt="">
        </div>
      </div> <!-- end s-content__media -->

      <div class="col-full s-content__main">
        {!!  $post->content!!}


        @if($post->hasTags())
          <p class="s-content__tags">
            <span>Post Tags</span>

            <span class="s-content__tag-list">
             @foreach($post->tags as $tag)
                <a href="{{route('tag.show',$tag->title)}}">{{$tag['title']}}</a>
              @endforeach
          </span>
          </p> <!-- end s-content__tags -->
        @endif
        <div class="s-content__author">
          <img src="images/avatars/user-03.jpg" alt="">

          <div class="s-content__author-about">
            <h4 class="s-content__author-name">
              <a href="#0">{{$post->author->name}}</a>
            </h4>

            <p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit laudantium magni
              maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum. Lorem ipsum dolor sit amet, consectetur
              adipisicing elit.
            </p>

            <ul class="s-content__author-social">
              <li><a href="#0">Facebook</a></li>
              <li><a href="#0">Twitter</a></li>
              <li><a href="#0">GooglePlus</a></li>
              <li><a href="#0">Instagram</a></li>
            </ul>
          </div>
        </div>

        <div class="s-content__pagenav">
          <div class="s-content__nav">
            @if($post->hasPrevious())
              <a href="{{route('post.show', $post->getPrevious()->slug)}}" rel="prev">
                <div class="s-content__prev">
                  <span>Previous Post</span>
                  {{$post->getPrevious()->title}}
                  <small
                      style="display:block; font-size: 0.9rem; margin-top: 10px; font-weight: normal">{{$post->getPrevious()->getDate()}}</small>
                </div>
              </a>
            @endif
            @if($post->hasNext())
              <a href="{{route('post.show', $post->getNext()->slug)}}" rel="next">
                <div class="s-content__next">
                  <span>Next Post</span>
                  {{$post->getNext()->title}}
                  <small
                      style="display:block; font-size: 0.9rem; margin-top: 10px; font-weight: normal">{{$post->getNext()->getDate()}}</small>
                </div>
              </a>
            @endif
          </div>
        </div> <!-- end s-content__pagenav -->

      </div> <!-- end s-content__main -->

    </article>


    <!-- comments
    ================================================== -->
    <div class="comments-wrap">

      <div id="comments" class="row">
        <div class="col-full">
          @if(( $comments_num = $post->hasComments() ) )
            <h3 class="h2">{{$comments_num == 1 ? "1 Comment" : $comments_num . " Comments"}}</h3>
          @foreach($post->getComments() as $comment)
            <ol class="commentlist">

            <li class="depth-1 comment">

              <div class="comment__avatar">
                <img width="50" height="50" class="avatar" src="{{$comment->author->getAvatar()}}" alt="">
              </div>

              <div class="comment__content">

                <div class="comment__info">
                  <cite>{{$comment->author->name}}</cite>

                  <div class="comment__meta">
                    <time class="comment__time">{{$comment->created_at->diffForHumans()}}</time>
                  </div>
                </div>

                <div class="comment__text">
                  <p>{!! $comment->content!!}</p>
                </div>

              </div>

            </li>


          </ol>
          @endforeach
          @else
            <h3 class="h2">No Comments yet</h3>
          @endif
          <!-- respond
          ================================================== -->
          <div class="respond">
            @if(Auth::check())

              <h3 class="h2">Add Comment</h3>

              <form id="contactForm" method="post" action="/users-comments">
              {{csrf_field()}}
              <input type="hidden" name="post_id" value="{{$post->id}}" >
                <div class="message form-field">
                  <textarea name="content" id="cMessage" class="full-width" placeholder="Your Message"></textarea>
                </div>

                <button type="submit" class="submit btn--primary btn--large full-width">Post Comment</button>

            </form> <!-- end form -->
            @else
              <a href="/login">
                <h3 class="h2">Authorize to add comments</h3>
              </a>
            @endif

          </div> <!-- end respond -->
        </div> <!-- end col-full -->

      </div> <!-- end row comments -->
    </div> <!-- end comments-wrap -->

  </section> <!-- s-content -->

@endsection