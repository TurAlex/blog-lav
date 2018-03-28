<div class="pageheader-content row">
  <div class="col-full">

    <div class="featured">
      <div class="featured__column featured__column--big">
        <div class="entry" style="background-image:url('{{$sliderPosts[0]->getImage()}}');">

          <div class="entry__content">
            <span class="entry__category"><a href="/assets/#0">{{$sliderPosts[0]->getCategoryTitle()}}</a></span>

            <h1><a href="/assets/#0" title="">{{$sliderPosts[0]->title}}</a></h1>

            <div class="entry__info">
              <a href="/assets/#0" class="entry__profile-pic">
                <img class="avatar" src="{{$sliderPosts[0]->author->getAvatar()}}" alt="">
              </a>

              <ul class="entry__meta">
                <li><a href="/assets/#0">{{$sliderPosts[0]->author->name}}</a></li>
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
            <span class="entry__category"><a href="/assets/#0">{{$sliderPosts[$i]->getCategoryTitle()}}</a></span>

            <h1><a href="/assets/#0" title="">{{$sliderPosts[$i]->title}}</a></h1>

            <div class="entry__info">
              <a href="/assets/#0" class="entry__profile-pic">
                <img class="avatar" src="{{$sliderPosts[$i]->author->name}}" alt="">
              </a>

              <ul class="entry__meta">
                <li><a href="/assets/#0">{{$sliderPosts[$i]->author->name}}</a></li>
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