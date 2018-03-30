@extends('layout')


@section('content')
  <section class="s-content s-content--narrow">
    <div class="row">
      {!! $page->content !!}

      @if($page->slug == 'contact')
        @if(session('status'))
          <div class="alert-box alert-box--success hideit">
            <p>{{session('status')}}</p>
            <i class="fa fa-times alert-box__close"></i>
          </div>

        @endif

          @include('pages.errors')

          <form name="cForm" id="cForm" method="post" action="/sendmail" method="post">
    <fieldset>
      {{csrf_field()}}
      <div class="form-field">
        <input name="name" type="text" id="cName" class="full-width" placeholder="Ваше Имя" value="{{old('name')}}">
      </div>

      <div class="form-field">
        <input name="email" type="text" id="cEmail" class="full-width" placeholder="Ваш Email" value="{{old('email')}}">
      </div>

      <div class="form-field">
        <input id="phone" name="phone" type="text" id="cEmail" class="full-width" placeholder="Ваш Телефон" value="{{old('phone')}}">
      </div>


      <div class="message form-field">
        <textarea name="message" id="cMessage" class="full-width" placeholder="Ваше Сообщение">{{old('message')}}</textarea>
      </div>

            <div class="g-recaptcha" data-sitekey="6Ld2xk8UAAAAAIt3uHJL1xNUhZzFbJiNSuOcffRD"></div>

      <button type="submit" class="submit btn btn--primary full-width" style="margin-top: 2rem">Submit</button>

    </fieldset>
          </form>

      @endif
    </div>
  </section>
@endsection
