@extends('layout')

@section('content')
  <section class="s-content" id="register-form">
    <div class="row">

    <div class="col-twelve tab-full">

      <h3 class="add-bottom" >Register Form</h3>
      @include('admin.errors')
      <form method="post" action="/register">
        {{csrf_field()}}
        <div>
          <label for="name">Name</label>
          <input class="full-width" type="text" id="name" name="name" value="{{old('name')}}" autofocus>
        </div>
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
