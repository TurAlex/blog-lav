@if($errors->any())
  @foreach($errors->all() as $error)
    <div class="alert-box alert-box--error">
      <p>{{$error}}</p>
      <i class="fa fa-times alert-box__close"></i>
    </div>
  @endforeach
@endif