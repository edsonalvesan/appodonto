@extends('layout.admin', ['modulo' => 'cadastro','selectItem' => 'clinicas'])

@section('content')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Relação de Clinicas
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Cadastro Base</a></li>
                        <li class="active">Clinicas</li>
                    </ol>
                </section>

  
                {{-- btn novo cliente --}}
                <div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="{{ route('clinicas.create') }}" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Nova Clinica</a>
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
@include('partials.search',['serach'=>$search])

 {{--
 <div class="input-group col-sm-6 dave-busca-rapida">
  <input type="text" class="form-control input-sm pull-right" placeholder="Pesqusiar..."/>
   <div class="input-group-btn">
    </div>
     </div> 
--}}

 @if(count($clinicas) > 0)
<table id="example" class="table table-bordered table-striped bootstrap-datatable datatable">
                                     
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Nome</th>
                                                <th>Ação</th>
                                                
                                            </tr>
                                        </thead>

                                <tbody>
                                 @foreach($clinicas as $clinica)
                                 <tr>
                                     <td>{{$clinica->id}}</td>
                                     <td>{{$clinica->nome}}</td>
                                     <td>
                                         
                                        {{-- 
                                         <a href="{{ route('clinicas.view',['id'=>$clinica->id])}}" 
                                            class="btn-sm btn-success" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-search-plus "></i></a>
                                         --}}

                                         <a href="{{ route('clinicas.edit',['id'=>$clinica->id])}}"
                                            class="btn-sm btn-info">
                                            <i class="fa fa-edit "></i></a>  
                                           <!-- href="{{ route('clinicas.destroy',['id'=>$clinica->id])}}" -->
                                           
                                            <a  data-id="{{$clinica->id}}" data-link="clinicas" class="btn-sm btn-danger sa-warning"><i class="fa fa-trash-o "></i></a>

                                     </td>
                                 </tr>
                                 @endforeach
                                </tbody>     
                                    </table>

                                    {!! $clinicas->render() !!}
 @else
   <ul class="alert alert-warning alert-dismissible">
       Nenhuma Clinica encontrada
        
   </ul>
  @endif 
                 

                                    
                                    
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
<script src="{{ asset('/js/clinicas/clinicas.js') }}"></script>
@endsection
