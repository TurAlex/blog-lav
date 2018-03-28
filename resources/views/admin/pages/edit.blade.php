@extends('admin.layout')

@section('content')
  <!-- Title -->
  <div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h5 class="txt-dark">Изменить Страницу</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#"><span>Страницы</span></a></li>
        <li class="active"><span>Изменить страницу</span></li>
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
            <h6 class="panel-title txt-dark">Изменение страницы</h6>
            @include('admin.errors')
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body">
            <div class="form-wrap">
              {{Form::open(['route' => ['pages.update', $page->id], 'method' => 'put']) }}
                <div class="form-group">
                  <label class="control-label mb-10 text-left">Название</label>
                  <input type="text" class="form-control" value="{{$page->title}}" name="title" autofocus>
                </div>
              <div class="form-group col-sm-12">
                <label class="control-label mb-10 text-left">Содержимое страницыв</label>
                <textarea class="form-control" rows="5" name="content">{{$page->content}}</textarea>
              </div>
              <div class="form-group mb-10 ">
                {{Form::checkbox('status', '1', $page->status,['class' => 'js-switch js-switch-1', 'data-color' => '#469408', 'data-size' => 'small' ])}}
                <label class="control-label d-block mt-10 mr-10" for="published">Опубликовано</label>
              </div>
                <div class="form-group ">
                  <a href="{{route('pages.index')}}" type="button" class="btn btn-default btn-anim pull-left"><i class="fas fa-arrow-left pt-10"></i><span class="btn-text">Назад</span></a>
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