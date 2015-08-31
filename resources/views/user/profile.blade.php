@extends('layout.admin', ['modulo' => '','selectItem' => ''])

@section('content')

           <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <i class="fa fa-user"></i> Perfil de Usuário
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Usuário</a></li>
                        <li class="active">Perfil</li>
                    </ol>
                </section>
                <!-- btn novo cliente -->
                <div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <div style="margin-top: 15px;">
                    </div>
                </div>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                          <div class="text-center">  
                            <div class="box">
 

  {{-- Alert --}}
  @if(Session::has('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Sucesso!</strong> {{Session::get('success')}}
  </div>
  @endif

  <table class="table table-bordered table-striped">
    <tbody>
      <tr>
        <td><strong>Nome</strong></td>
        <td>{{$user->name}}</td>
        </tr>
      <tr>
        <td><strong>E-mail</strong></td>
        <td>{{$user->email}}</td>
      </tr>
      <tr>
        <td><strong>Criado em</strong></td>
        <td>{{ Auth::user()->created_at }}</td>
      </tr>
      <tr>
        <td width="1%" nowrap><strong>Atualizado em</strong></td>
        <td>{{ Auth::user()->updated_at}}</td>
      </tr>
      <tr>
        <td colspan="2">
          <a href="{{route('profile.edit')}}" class="btn btn-primary">
            <i class="fa fa-pencil"></i>
            Editar
          </a>
          <a href="{{route('profile.password')}}" class="btn btn-danger">
            <i class="fa fa-lock"></i>
            Alterar senha
          </a>
        </td>
      </tr>
    </tbody>
  </table>

  


                            </div><!-- /.box -->
                        </div>
                    </div>

            <!-- COMPOSE MESSAGE MODAL -->


                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
            <!-- END COMPOSE MESSAGE MODAL -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        
 </div><!-- ./wrapper -->

@endsection