@extends('layout')

@section('content')
  <section class="s-content" id="login-form">
    <div class="row">

      <div class="col-twelve tab-full">

        <h3 class="add-bottom">Login Form</h3>
        @if(session('status'))
          <div class="alert-box alert-box--error hideit">
            <p>{{session('status')}}</p>
            <i class="fa fa-times alert-box__close"></i>
          </div>

        @endif
        @include('admin.errors')
        <form method="post" action="/login">
          {{csrf_field()}}
         <div>
            <label for="email">Email</label>
            <input class="full-width" type="text" id="email" name="email" value="{{old('email')}}">
          </div>
          <div>
            <label for="password">Password</label>
            <input class="full-width" type="password" id="password" name="password">
          </div>
          <input class="btn--primary full-width" type="submit" value="Submit">

        </form>

      </div>
    </div> <!-- end row -->
  </section>
@endsection
