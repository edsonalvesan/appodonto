@extends('layout.admin', ['modulo' => 'contrato','selectItem' => 'contratos'])

@section('content')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Relação de Orçamentos
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Orçamentos</a></li>
                        <li class="active">Orçamentos</li>
                    </ol>
                </section>
                <!-- btn novo cliente -->
                <div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="{{ route('orcamentos.create') }}" class="btn btn-block btn-danger" ><i class="fa fa-pencil"></i> Novo Orçamento</a>
                    <!-- Navigation - folders-->
                    <div style="margin-top: 15px;">
                    </div>
                </div>
                <!-- end btn novo cliente -->
                
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="text-center">
  

                            <div class="box">
                                <div class="box-body table-responsive">

@include('partials.alerts')

                 <h1></h1>

                                    <table id="example" class="table table-bordered table-striped bootstrap-datatable datatable">
                                     
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Paciente</th>
                                                <th>Descrição</th>
                                                <th>Valor</th>
                                                <th>Ação</th>
                                                
                                            </tr>
                                        </thead>

                                <tbody>
                                 @foreach($orcamentos as $orcamento)
                                 <tr>
                                     <td>{{$orcamento->id}}</td>
                                     <td>{{$orcamento->paciente->nome}}</td>
                                     <td>{{$orcamento->descricao}}</td>
                                     <td>{{number_format($orcamento->soma() + $orcamento->valor,2,',','.') }}</td>
                                     <td width = '130'>                                            
                                         <a href="{{ route('orcamentos.edit',['id'=>$orcamento->id])}}"
                                            class="btn-sm btn-info">
                                            <i class="fa fa-calendar"></i></a>                                             
                                            <a  data-id="{{$orcamento->id}}" data-link="orcamentos" class="btn-sm btn-danger sa-warning"><i class="fa fa-trash-o "></i></a>

                                     </td>
                                 </tr>
                                 @endforeach
                                </tbody>     
                                    </table>
                                   
                                    {!! $orcamentos->render() !!}
                                  
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

            <!-- COMPOSE MESSAGE MODAL -->
           
            <!-- END COMPOSE MESSAGE MODAL -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        
 </div><!-- ./wrapper -->
@endsection

@section('scripts')
@parent
<script src="{{ asset('/js/alert-material-admin.js') }}"></script>
@endsection
