<!-- s-extra
================================================== -->
<section class="s-extra">

  <div class="row top">

    <div class="col-eight md-six tab-full popular">
      <h3>Popular Posts</h3>

      <div class="block-1-2 block-m-full popular__posts">
        @foreach($popularPosts as $popPost)
          <article class="col-block popular__post">
            <a href="{{route('post.show', $popPost->slug)}}" class="popular__thumb">
              <img src="{{$popPost->getImage()}}" alt="">
            </a>
            <h5><a href="{{route('post.show', $popPost->slug)}}">{{$popPost->title}}</a></h5>
            <section class="popular__meta">
              <span class="popular__author"><span>By</span> <a href="/assets/#0"> {{$popPost->author->name}}</a></span>
              <span class="popular__date"><span>on</span> {{$popPost->getDate()}}</span>
            </section>
          </article>
        @endforeach
      </div> <!-- end popular_posts -->
    </div> <!-- end popular -->

    <div class="col-four md-six tab-full about">
      <h3>About Philosophy</h3>

      <p>
        Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
      </p>

      <ul class="about__social">
        <li>
          <a href="/assets/#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="/assets/#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="/assets/#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="/assets/#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        </li>
      </ul> <!-- end header__social -->
    </div> <!-- end about -->

  </div> <!-- end row -->

  <div class="row bottom tags-wrap">
    <div class="col-full tags">
      <h3>Tags</h3>

      <div class="tagcloud">
        @foreach($tags_data as $tag)
          <a href="/tags/{{$tag->slug}}">{{$tag->title}}</a>
        @endforeach
      </div> <!-- end tagcloud -->
    </div> <!-- end tags -->
  </div> <!-- end tags-wrap -->

</section> <!-- end s-extra -->
