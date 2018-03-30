<div class="pageheader-content row">
  <div class="col-full">

    <div class="featured">
      <div class="featured__column featured__column--big">
        <div class="entry" style="background-image:url('{{$sliderPosts[0]->getImage()}}');">

          <div class="entry__content">
            <span class="entry__category">
              <a href="/{{$sliderPosts[0]->category->slug}}">{{$sliderPosts[0]->getCategoryTitle()}}</a>
            </span>

            <h1><a href="{{route('post.show', [$sliderPosts[0]->getCategorySlug(), $sliderPosts[0]->slug])}}" title="">{{$sliderPosts[0]->title}}</a></h1>

            <div class="entry__info">


              <ul class="entry__meta">
                <li>{{$sliderPosts[0]->author->name}}</li>
                <li>{{$sliderPosts[0]->getDate()}}</li>
              </ul>
            </div>
          </div> <!-- end entry__content -->

        </div> <!-- end entry -->
      </div> <!-- end featured__big -->

      <div class="featured__column featured__column--small">

        @for($i = 1;$i<=2;$i++)

        <div class="entry" style="background-image:url('{{$sliderPosts[$i]->getImage()}}');">

          <div class="entry__content">
            <span class="entry__category"><a href="/{{$sliderPosts[$i]->category->slug}}">{{$sliderPosts[$i]->getCategoryTitle()}}</a></span>

            <h1><a href="{{route('post.show', [$sliderPosts[$i]->getCategorySlug(), $sliderPosts[$i]->slug])}}" title="">{{$sliderPosts[$i]->title}}</a></h1>

            <div class="entry__info">
              <ul class="entry__meta">
                <li>{{$sliderPosts[$i]->author->name}}</li>
                <li>{{$sliderPosts[$i]->getDate()}}</li>
              </ul>
            </div>
          </div> <!-- end entry__content -->
        </div> <!-- end entry -->
          @endfor

      </div> <!-- end featured__small -->

    </div> <!-- end featured -->

  </div> <!-- end col-full -->
</div> <!-- end pageheader-content row -->

</section> <!-- end s-pageheader -->