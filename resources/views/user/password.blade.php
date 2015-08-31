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
                        <li class="active">Trocar Senha</li>
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

  <h1 class="page-header">
    <i class="fa fa-lock"></i>
    Trocar Senha
    <small>{!! $user->name !!}</small>
  </h1>


  {{-- Alert --}}
  @if(Session::has('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Sucesso!</strong> {{Session::get('success')}}
  </div>
  @endif

  {{-- Alert --}}
  @if(Session::has('error'))
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Atenção!</strong>
    <p>
    @foreach(Session::get('error')->all() as $error)
    &bull; {{$error}} <br>
    @endforeach
    </p>
  </div>
  @endif

  {!! Form::open(['route' => 'profile.savePassword']) !!}

  <table class="table table-bordered table-striped">
    <tbody>
      <tr>
      </tr>
      <tr>
        <td><strong>Nova senha</strong></td>
        <td>
          {!!Form::password('password', ['class' => 'form-control', 'autofocus' => 'autofocus'])!!}
        </td>
      </tr>
      <tr>
        <td width="1%" nowrap><strong>Confirmar a senha</strong></td>
        <td>{!!Form::password('password_confirmation', ['class' => 'form-control'])!!}</td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="row">
            <div class="col-md-6 text-left">
              <a href="{!! route('profile.index') !!}" class="btn btn-default">
                <i class="fa fa-user"></i> Perfil do Usuário</a>
            </div>
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