@extends('admin.layout')

@section('content')
  <!-- Title -->
  <div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h5 class="txt-dark">Добавить коментарий</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="index.html">Dashboard</a></li>
        <li><a href="#"><span>Коментарии</span></a></li>
        <li class="active"><span>Добавление коментария</span></li>
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
            <h6 class="panel-title txt-dark">Добавляем коментарий</h6>
            @include('admin.errors')
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body">
            <div class="form-wrap">
              {{ Form::open(['route' => 'comments.store']) }}
              <div class="form-group col-sm-6">
                <label class="control-label mb-10 text-left">Автор</label>
                <input type="text" class="form-control" value="" name="author_id">
              </div>
              <div class="form-group col-sm-6">
                <label class="control-label mb-10 text-left">Пост</label>
                <input type="text" class="form-control" value="" name="post_id">
              </div>
              <div class="form-group col-sm-12">
                <label class="control-label mb-10 text-left">Текст коментария</label>
                <textarea class="form-control" rows="5" name="content"></textarea>
              </div>
              <div class="form-group col-sm-12">
                <a href="{{route('comments.index')}}" type="button" class="btn btn-default btn-anim pull-left"><i class="fas fa-arrow-left pt-10"></i><span class="btn-text">Назад</span></a>
                <button type="submit" class="btn btn-success btn-anim pull-right"><i class="icon-rocket"></i><span class="btn-text">Добавить</span></button>
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