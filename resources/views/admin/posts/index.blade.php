@extends('admin.layout')

@section('content')
  <!-- Title -->
  <div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h5 class="txt-dark">Посты</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li class="active"><span>Посты</span></li>
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
            <h6 class="panel-title txt-dark">Листинг постов</h6>
          </div>
          <div class="clearfix"></div>
            <a href="{{route('posts.create')}}" class="btn  btn-success btn-sm btn-rounded btn-icon left-icon mt-40 ml-20"><i class="fas fa-plus pr-20"></i> <span>Добавить</span></a>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body">
            <div class="table-wrap">
              <div class="table-responsive">
                <table id="datable_1" class="table table-hover display  pb-30" >
                  <thead>
                    <tr>
                      <th style="width: 6%">ID</th>
                      <th style="width: 25%">Название</th>
                      <th style="width: 10%">Категория</th>
                      <th style="width: 20%">Теги</th>
                      <th style="width: 5%">Картинка</th>
                      <th style="width: 5%">Создан</th>
                      <th style="width: 5%">Редакция</th>
                      <th style="width: 10%">Действие</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th>Категория</th>
                      <th>Теги</th>
                      <th>Картинка</th>
                      <th>Создан</th>
                      <th>Редакция</th>
                      <th>Действие</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($posts as $post)
                      <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->getCategoryTitle()}}</td>
                        <td>{{$post->getTagsTitles()}}</td>
                        <td><img src="{{$post->getImage()}}" alt="" class="post-auth-img img-circle" style="width: 40px;height: auto"></td>
                        <td>{{$post->created_at->format('d.m.y')}}</td>
                        <td>{{$post->updated_at->format('d.m.y')}}</td>
                        <td style="white-space: nowrap">
                          @if($post->status == 1)
                            <a href="/admin/posts/toggle/{{$post->id}}" data-toggle="tooltip" data-original-title="Снять с публикации"><button class="btn btn-danger btn-icon-anim btn-square"><i class="fas fa-lock"></i></button></a>
                          @else
                            <a href="/admin/posts/toggle/{{$post->id}}" data-toggle="tooltip" data-original-title="Опубликовать"><button class="btn btn-success btn-icon-anim btn-square"><i class="fas fa-lock-open"></i></button></a>
                          @endif
                          <a href="{{route('posts.edit', $post->id)}}" data-toggle="tooltip" data-original-title="Изменить"><button class="btn btn-primary btn-icon-anim btn-square"><i class="fas fa-pencil-alt"></i></button></a>
                          {{Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'style' => 'display:inline-block'])}}
                            <button onclick="return confirm('Вы уверены что хотите удалить пост?')" type="submit"  data-toggle="tooltip" data-original-title="Удалить" class=" btn btn-info btn-icon-anim btn-square"><i class="fas fa-trash-alt"></i></button>
                          {{Form::close()}}
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Row -->

@endsection