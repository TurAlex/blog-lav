@extends('layout')


@section('content')
  <section class="s-content s-content--narrow">
    <div class="row">
      {!! $page->content!!}

      @if($page->slug == 'contacts')
        <form name="cForm" id="cForm" method="post" action="/sendmail" method="post">
    <fieldset>
      {{csrf_field()}}
      <div class="form-field">
        <input name="name" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
      </div>

      <div class="form-field">
        <input name="email" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
      </div>


      <div class="message form-field">
        <textarea name="content" id="cMessage" class="full-width" placeholder="Your Message"></textarea>
      </div>

      <button type="submit" class="submit btn btn--primary full-width">Submit</button>

    </fieldset>
  </form>
      @endif
    </div>
  </section>
@endsection
