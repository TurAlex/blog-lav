    @include('admin.layout.header')

    @include('admin.layout.top_menu')

    @include('admin.layout.left_sidebar')

    <div class="page-wrapper">
      <div class="container-fluid">
        @yield('content')
        <footer class="footer container-fluid pl-30 pr-30">
          <div class="row">
            <div class="col-sm-12">
              <p>2017 &copy; Doodle. Pampered by Hencework</p>
            </div>
          </div>
        </footer>
      </div>
    </div>

    @include('admin.layout.footer')
