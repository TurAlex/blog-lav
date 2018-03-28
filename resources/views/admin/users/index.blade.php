@extends('admin.layout')

@section('content')
  <!-- Title -->
  <div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h5 class="txt-dark">Пользователи</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li class="active"><span>Пользователи</span></li>
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
            <h6 class="panel-title txt-dark">Листинг пользователей</h6>
          </div>
          <div class="clearfix"></div>
            <a href="{{route('users.create')}}" class="btn  btn-success btn-sm btn-rounded btn-icon left-icon mt-40 ml-20"><i class="fas fa-plus pr-20"></i> <span>Добавить</span></a>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body">
            <div class="table-wrap">
              <div class="table-responsive">
                <table id="datable_1" class="table table-hover display  pb-30" >
                  <thead>
                    <tr>
                      <th style="width: 6%">ID</th>
                      <th style="width: 10%">Аватар</th>
                      <th style="width: 20%">Имя</th>
                      <th>E-mail</th>
                      <th style="width: 15%">Дата создания</th>
                      <th style="width: 10%">Действие</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th >ID</th>
                      <th>Аватар</th>
                      <th>Имя</th>
                      <th>E-mail</th>
                      <th>Дата создания</th>
                      <th>Действие</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td><img src="{{$user->getAvatar()}}" alt="" class="user-auth-img img-circle" style="width: 40px;height: auto"></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>

                        <td style="white-space: nowrap">
                          <a href="{{route('users.edit', $user->id)}}" data-toggle="tooltip" data-original-title="Изменить"><button class="btn btn-primary btn-icon-anim btn-square"><i class="fas fa-pencil-alt"></i></button></a>
                          {{Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete', 'style' => 'display:inline-block'])}}
                            <button onclick="return confirm('Вы уверены что хотите удалить пользователя?')" type="submit"  data-toggle="tooltip" data-original-title="Удалить" class=" btn btn-info btn-icon-anim btn-square"><i class="fas fa-trash-alt"></i></button>
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