@extends('admin.layout')

@section('content')
  <!-- Title -->
  <div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h5 class="txt-dark">Изменить тэг</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#"><span>Тэги</span></a></li>
        <li class="active"><span>Изменить тэг</span></li>
      </ol>
    </div>
    <!-- /Breadcrumb -->
  </div>
  <!-- /Title -->

  <!-- Row -->
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default card-view">
        <div class="panel-heading">
          <div class="pull-left">
            <h6 class="panel-title txt-dark">Изменение тэга</h6>
            @include('admin.errors')
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body">
            <div class="form-wrap">
              {{Form::open(['route' => ['tags.update', $tag->id], 'method' => 'put']) }}
                <div class="form-group">
                  <label class="control-label mb-10 text-left">Название</label>
                  <input type="text" class="form-control" value="{{$tag->title}}" name="title" autofocus>
                </div>
                <div class="form-group mb-10 ">
                  {{Form::checkbox('status', '1', $tag->status,['class' => 'js-switch js-switch-1', 'data-color' => '#469408', 'data-size' => 'small' ])}}
                  <label class="control-label d-block mt-10 mr-10" for="published">Опубликовано</label>
                </div>
                <div class="form-group ">
                  <a href="{{route('tags.index')}}" type="button" class="btn btn-default btn-anim pull-left"><i class="fas fa-arrow-left pt-10"></i><span class="btn-text">Назад</span></a>
                  <button type="submit" class="btn btn-success btn-anim pull-right"><i class="icon-rocket"></i><span class="btn-text">Изменить</span></button>
                </div>
              {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Row -->

@endsection