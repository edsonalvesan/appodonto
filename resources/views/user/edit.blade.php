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

                  @include('partials.alerts')

                    <div class="row">
                        <div class="col-xs-12">
                          <div class="text-center">  
                            <div class="box">

  {!! Form::open(['route' => 'profile.update']) !!}

  <table class="table table-bordered table-striped">
    <tbody>
      <tr>
      </tr>
      <tr>
        <td><strong>Nome</strong></td>
        <td>
          {!!Form::text('name', $user->name, ['class' => 'form-control'])!!}
        </td>
      </tr>
      <tr>
        <td><strong>E-mail</strong></td>
        <td>{!!Form::text('email', $user->email, ['class' => 'form-control'])!!}</td>
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
          <div class="row">
            <div class="col-md-6"><a href="{{route('profile.index')}}" class="btn btn-default">
              <i class="fa fa-arrow-left"></i>
              voltar
            </a></div>
            <div class="col-md-6 text-right"><button class="btn btn-primary" type="submit">
              Salvar
              <i class="fa fa-check"></i>
            </button></div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>

  {!! Form::close() !!}

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