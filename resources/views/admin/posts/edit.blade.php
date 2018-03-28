@extends('admin.layout')

@section('content')
  <!-- Title -->
  <div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h5 class="txt-dark">Изменить пользователя</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#"><span>Пользователи</span></a></li>
        <li class="active"><span>Изменить пользователя</span></li>
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
            <h6 class="panel-title txt-dark">Изменение Пользователя</h6>
            @include('admin.errors')
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body">
            <div class="form-wrap">
              {{Form::open(['route' => ['posts.update', $post->id], 'method' => 'put', 'files' => true]) }}
              <div class="form-group ">
                <label class="control-label mb-10 text-left">Название</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}">
              </div>
              <div>
                <img src="{{$post->getImage()}}" alt="image" class="img-circle" width="100">
              </div>
              <div class="form-group mb-30">
                <label class="control-label mb-10 text-left">Изменить картинку</label>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                  <div class="form-control" data-trigger="fileinput">
                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                    <span class="fileinput-filename"></span>
                  </div>
                  <span class="input-group-addon fileupload btn btn-info btn-anim btn-file">
                    <i class="fa fa-upload"></i>
                    <span class="fileinput-new btn-text">Выберите файл</span>
                    <span class="fileinput-exists btn-text">Изменить</span>
										<input type="file" name="image">
									</span>
                  <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists"
                     data-dismiss="fileinput">
                    <i class="fa fa-trash"></i>
                    <span class="btn-text">Удалить</span>
                  </a>
                </div>
              </div>
              <div class="form-group mb-10">
                <label class="control-label mb-10">Категория</label>
                {{Form::select('category_id',
                  $categories,
                  $post->getCategoryID(),
                  ['class' => 'form-control select2'])
                  }}
              </div>
              <div class="form-group mb-10">
                <label class="control-label mb-10">Теги</label>
                {{Form::select('tags[]',
                  $tags,
                  $selectedTags,
                  ['class' => 'form-control select2', 'multiple' => 'multiple', 'data-placeholder' => 'Выберите теги'])
                  }}
              </div>

              <div class="form-group mb-10 ">
                {{Form::checkbox('status', '1', $post->status,['class' => 'js-switch js-switch-1', 'data-color' => '#469408', 'data-size' => 'small' ])}}
                <label class="control-label d-block mt-10 mr-10" for="published">Опубликовано</label>
              </div>
              <div class="form-group mb-10">
                <label class="control-label mb-10 text-left">Интро</label>
                <textarea class="form-control" rows="2" name="intro">{{$post->intro}}</textarea>
              </div>
              <div class="form-group mb-10">
                <label class="control-label mb-10 text-left">Полный текст</label>
                <textarea class="form-control" rows="5" name="content">{{$post->content}}</textarea>
              </div>
                <div class="form-group ">
                  <a href="{{route('posts.index')}}" type="button" class="btn btn-default btn-anim pull-left"><i class="fas fa-arrow-left pt-10"></i><span class="btn-text">Назад</span></a>
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