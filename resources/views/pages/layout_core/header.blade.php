<!-- pageheader
================================================== -->
<section class="s-pageheader s-pageheader--home">

  <header class="header">
    <div class="header__content row">

      <div class="header__logo">
        <a class="logo" href="/">
          <img src="/assets/images/logo.svg" alt="Homepage">
        </a>
      </div> <!-- end header__logo -->

      <ul class="header__social">
        <li>
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </li>
        <li>
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </li>
        <li>
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </li>
        <li>
          <i class="fa fa-pinterest" aria-hidden="true"></i>
        </li>
      </ul> <!-- end header__social -->



      <div class="header__login" >
        @if(Auth::check())
          <a href="/profile#profile-form"><span style="padding-right: 20px">Профиль</span></a>
          <a href="/logout"><span>Выйти</span></a>
        @else
          <a href="/login#login-form"><span style="padding-right: 20px">Login</span></a>
          <a href="/register#register-form"><span>Register</span></a>
        @endif
      </div>






      <a class="header__toggle-menu" href="/assets/#0" title="Menu"><span>Menu</span></a>

      <nav class="header__nav-wrap">

        <h2 class="header__nav-heading h6">Site Navigation</h2>

        <ul class="header__nav">
          <li class="current"><a href="/" title="">Home</a></li>
          <li class="has-children">
            <a href="#">Categories</a>
            <ul class="sub-menu">
              @foreach($categories_data as $m_category)
                <li><a href="/category/{{$m_category->slug}}">{{$m_category->title}}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="/about" title="">About</a></li>
          <li><a href="contacts" title="">Contact</a></li>
        </ul> <!-- end header__nav -->

        <a href="/assets/#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

      </nav> <!-- end header__nav-wrap -->

    </div> <!-- header-content -->
  </header> <!-- header -->