@extends('admin.layout')

@section('content')
  <!-- Title -->
  <div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h5 class="txt-dark">Добавить пользователя</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="index.html">Dashboard</a></li>
        <li><a href="#"><span>Пользователи</span></a></li>
        <li class="active"><span>Добавление пользователя</span></li>
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
            <h6 class="panel-title txt-dark">Добавляем пользователя</h6>
            @include('admin.errors')
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body">
            <div class="form-wrap">
              {{ Form::open(['route' => 'users.store', 'files'=>true]) }}
                <div class="form-group ">
                  <label class="control-label mb-10 text-left">Имя</label>
                  <input type="text" class="form-control" value="{{old('name')}}" name="name">
                </div>
                <div class="form-group ">
                  <label class="control-label mb-10" for="email_de">email:</label>
                  <input type="text" class="form-control" id="email_de" value="{{old('email')}}" name="email">
                </div>
                <div class="form-group">
                  <label class="control-label mb-10" for="pwd_de">Password:</label>
                  <input type="password" class="form-control" name="password">
                </div>
              <div class="form-group mb-30">
                <label class="control-label mb-10 text-left">Загрузите аватар</label>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                  <div class="form-control" data-trigger="fileinput">
                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                    <span class="fileinput-filename"></span>
                  </div>
                  <span class="input-group-addon fileupload btn btn-info btn-anim btn-file">
                    <i class="fa fa-upload"></i>
                    <span class="fileinput-new btn-text">Выберите файл</span>
                    <span class="fileinput-exists btn-text">Изменить</span>
										<input type="file" name="avatar">
									</span>
                  <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput">
                    <i class="fa fa-trash"></i>
                    <span class="btn-text">Удалить</span>
                  </a>
                </div>
              </div>
                <div class="form-group col-12">
                  <a href="{{route('users.index')}}" type="button" class="btn btn-default btn-anim pull-left"><i
                        class="fas fa-arrow-left pt-10"></i><span class="btn-text">Назад</span></a>
                  <button type="submit" class="btn btn-success btn-anim pull-right"><i class="icon-rocket"></i><span
                        class="btn-text">Добавить</span></button>
                </div>
              {{ Form::close() }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- /Row -->

@endsection