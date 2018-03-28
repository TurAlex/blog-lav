@extends('layout')

@section('content')
  <section class="s-content" id="profile-form">
    <div class="row">

      <div class="col-twelve tab-full">

        <h3 class="add-bottom">Profile</h3>
        @if(session('status'))
          <div class="alert-box alert-box--success hideit">
            <p>{{session('status')}}</p>
            <i class="fa fa-times alert-box__close"></i>
          </div>
        @endif

        @include('admin.errors')
        
        <form method="post" action="/profile" enctype="multipart/form-data">
          {{csrf_field()}}
          <div>
            <img src="{{$user->getAvatar()}}" alt="">
          </div>
          <div>
            <label for="name">Name</label>
            <input class="full-width" type="text" id="name" name="name" value="{{$user->name}}" autofocus>
          </div>
          <div>
            <label for="email">Email</label>
            <input class="full-width" type="text" id="email" name="email" value="{{$user->email}}">
          </div>
          <div>
            <label for="password">Password</label>
            <input class="full-width" type="password" id="password" name="password">
          </div>
          <div>
            <label for="file-upload"></label>
            <input type="file" name="avatar" id="file-upload">
          </div>
          <input class="btn--primary full-width" type="submit" value="Submit">

        </form>

      </div>
    </div> <!-- end row -->
  </section>
@endsection
