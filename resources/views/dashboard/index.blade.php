@extends('layout.admin', ['modulo' => 'dashboard','selectItem' => 'dashboard'])

@section('content')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><a href="#">Dashboard</a></li>
                        
                    </ol>
                </section>
                
               <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-xs-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">

                                 

                                    <h3 class="box-title"></h3>
                                </div><!-- /.box-header -->


   





                <div class="box-header with-border">

                  <h3 class="box-title">Pacientes sem atendimentos há mais de 180 dias</h3>

                </div><!-- /.box-header -->
                <div class="box-body">

                   @include('partials.alerts')

                  <div class="row">
                    

<div class="col-md-8"> 

@if (count($atendimentos) > 0)                    
   <table id="example" class="table table-bordered table-condensed">                                   
                                        <thead>
                                            <tr>
                                                <th>Data</th>
                                                <th>Paciente</th>
                                                <th>Telefone</th>
                                                <th>Celular</th>
                                                <th>E-mail</th>
                                               
                                                
                                            </tr>
                                        </thead>

                                <tbody>
                                 @foreach($atendimentos as $atendimento)
                                 <tr>
                                     <td>{{date('d/m/Y', strtotime($atendimento->data))}}</td>
                                     <td>{{$atendimento->nome}}</td>
                                     <td>{{$atendimento->telefone}}</td>
                                     <td>{{$atendimento->celular}}</td>
                                     <td>{{$atendimento->email}}</td>
                                 </tr> 
                                 @endforeach
                                </tbody>     
                                    </table>
@else
<ul class="alert alert-warning alert-dimissible">
Nenhum paciente para exibir
</ul>     
@endif                                   
                    </div><!-- /.col -->
                    

                    <div class="col-md-4">




    <div class="col-md-12">
      <div class="list-group">
         <a class="list-group-item active">Quantidade de Atentimentos</a>
        <div class="list-group-item">
          Mês Atual: {{$atendimentosMesAtual}}
        </div>
        <div class="list-group-item">
         Mês Anterior: {{$atendimentosMesAnterior}}
        </div>
    </div>








                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
    
</div><!-- /.box -->



                 
                        </div><!--/.col (left) -->
                        <!-- right column -->
                        
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        
 </div><!-- ./wrapper -->
@endsection

@section('scripts')
@parent
<script src="{{ asset('/js/chartjs/Chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/demo/demochart.js') }}"></script>
@endsection
