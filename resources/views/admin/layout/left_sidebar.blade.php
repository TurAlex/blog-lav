<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
  <ul class="nav navbar-nav side-nav nicescroll-bar">
    <li class="navigation-header">
      <span>Main Navigation</span>
    </li>
    <li>
      <a href="/admin">
        <div class="pull-left">
          <i class="fas fa-tachometer-alt mr-20"></i>
          <span class="right-nav-text">Админ панель</span>
        </div>
        <div class="clearfix"></div>
      </a>
    </li>
    <li>
      <a href="{{route('pages.index')}}">
        <div class="pull-left">
          <i class="fas fa-file mr-20"></i>
          <span class="right-nav-text">Страницы</span>
        </div>
        <div class="clearfix"></div>
      </a>
    </li>
    <li>
      <a href="{{route('posts.index')}}">
        <div class="pull-left">
          <i class="far fa-file-alt mr-20"></i>
          <span class="right-nav-text">Посты</span>
        </div>
        <div class="clearfix"></div>
      </a>
    </li>
    <li>
      <a href="{{route('categories.index')}}">
        <div class="pull-left">
          <i class="fas fa-list-ul mr-20"></i>
          <span class="right-nav-text">Категории</span>
        </div>
        <div class="clearfix"></div>
      </a>
    </li>
    <li>
      <a href="{{route('tags.index')}}">
        <div class="pull-left">
          <i class="fas fa-tags mr-20"></i>
          <span class="right-nav-text">Теги</span>
        </div>
        <div class="clearfix"></div>
      </a>
    </li>
    <li>
      <a href="{{route('comments.index')}}">
        <div class="pull-left">
          <i class="far fa-comments mr-20"></i>
          <span class="right-nav-text">Коментарии</span>
        </div>
        <div class="pull-right">
          <span class="label label-success">{{$lockedComments}}</span>
        </div>
        <div class="clearfix"></div>
      </a>
    </li>





    <li>
      <a href="{{route('users.index')}}">
        <div class="pull-left">
          <i class="fas fa-users mr-20"></i>
          <span class="right-nav-text">Пользователи</span>
        </div>
        <div class="clearfix"></div>
      </a>
    </li>
  </ul>
</div>
<!-- /Left Sidebar Menu -->
