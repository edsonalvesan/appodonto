@extends('layout.admin', ['modulo' => 'contrato','selectItem' => 'contratos'])

@section('content')

<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Relação de Antendimentos
                        <small>{{$orcamento->paciente->nome}}</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Cadastro Base</a></li>
                        <li><a href="#">Orçamento</a></li>
                        <li class="active">Atendimentos</li>
                    </ol>
                </section>

                         <!-- btn novo cliente -->
                <div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="{{ route('atendimento.create',['id'=>$orcamento->id])}}" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Atendimento</a>

                    <!-- Navigation - folders-->
                    <div style="margin-top: 15px;">
                    </div>
                </div>
                <!-- end btn novo cliente -->

                <!-- btn novo cliente -->
                <div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="{{ route('atendimento.created',['id'=>$orcamento->id])}}" class="btn btn-block btn-danger" ><i class="fa fa-pencil"></i> Orçamento</a>

                    <!-- Navigation - folders-->
                    <div style="margin-top: 15px;">
                    </div>
                </div>
                <!-- end btn novo cliente -->

                

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

                  <h3 class="box-title">Procedimentos Realizados</h3>

                </div><!-- /.box-header -->
                <div class="box-body">

                   @include('partials.alerts')

                  <div class="row">
                    

<div class="col-md-8">                     
   <table id="example" class="table table-bordered table-condensed">                                   
                                        <thead>
                                            <tr>
                                                <th>Data</th>
                                                <th>Procedimento</th>
                                                <th>Valor</th>
                                                <th>Tipo</th>
                                                <th>Ação</th>
                                                
                                            </tr>
                                        </thead>

                                <tbody>
                                 @foreach($atendimentos as $atendimento)
                                 <tr <?php if($atendimento->tipo_valor == 0) {
                                    
                                    if($atendimento->valor == 0) { 
 
                                      echo 'class="warning"';

                                          }
                                            else  echo 'class="success"';

                                    } 
                                      else { if($atendimento->tipo_valor == 1) 
                                        { echo 'class="danger"';}}?>>
                                     <td>{{$atendimento->data}}</td>
                                     <td>{{$atendimento->procedimento}}</td>
                                     <td>{{$atendimento->valor}}</td>
                                     <td><?php if($atendimento->tipo_valor == 0) {
                                      echo 'Crédito';} 
                                      else { if($atendimento->tipo_valor == 1) 
                                        { echo 'Débito';}}?>
                                        </td>
                                     <td width = '130'>                                            
                                         <a href="{{ route('atendimento.edit',['orcamento_id'=>$orcamento->id,'id'=>$atendimento->id])}}"
                                            class="btn-sm btn-info">
                                            <i class="fa fa-edit"></i></a>                                             
                                            <a  data-id="{{$atendimento->id}}" data-link="usuarios" class="btn-sm btn-danger sa-warning"><i class="fa fa-trash-o "></i></a>

                                     </td>
                                 </tr> 
                                 @endforeach
                                </tbody>     
                                    </table>

                                    {!! $atendimentos->render() !!}
                    </div><!-- /.col -->
                    

                    <div class="col-md-4">




    <div class="col-md-12">
      <div class="list-group">
         <a class="list-group-item active">Resumo Financeiro</a>
        <div class="list-group-item">
          1º Orçamento: {{number_format($saldo,2,',','.')}}      
        </div>
        <div class="list-group-item">
          <span class="label label-success">+</span> Acrescidos: {{number_format(abs($debito),2,',','.')}} 
        </div>
        <div class="list-group-item">
          <span class="label label-primary">=</span> Total: {{number_format($saldo + abs($debito),2,',','.')}} 
        </div>
        <div class="list-group-item">
        <span class="label label-danger">-</span> Pagamentos: {{number_format(abs($credito),2,',','.')}}
        </div>
        <div class="list-group-item">
        <span class="label label-primary">=</span> Saldo Devedor: {{number_format($saldo + abs($debito) - abs($credito),2,',','.')}} 
      </div>
    </div>








                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->




    
    @include('orcamentos.partials.btnFooterAtendimentos')

    
</div><!-- /.box -->



                 
                        </div><!--/.col (left) -->
                        <!-- right column -->
                        
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->

@endsection

@section('scripts')
@parent
<script src="{{ asset('/js/validator.js') }}"></script>
<script src="{{ asset('/js/contratos/contratos.js') }}"></script>
<script src="{{ asset('/js/alert-material-admin.js') }}"></script>
@endsection