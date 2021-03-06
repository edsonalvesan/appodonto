@extends('layout.admin', ['modulo' => 'contrato','selectItem' => 'contratos'])

@section('content')

<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Orçamento
                        <small>Novo</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Cadastro Base</a></li>
                        <li><a href="#">Orçamento</a></li>
                        <li class="active">Novo</li>
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


   
    <?php $disabled = ''; ?>
    {!!Form::open(['route'=>'orcamentos.store','id' => 'project-form'])!!}
 
    @include('orcamentos.partials.form')
    
    @include('orcamentos.partials.btnFooter')

    {!!Form::close()!!}
</div><!-- /.box -->



                 
                        </div><!--/.col (left) -->
                        <!-- right column -->
                        
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
@endsection

@section('scripts')
@parent
{{-- <script src="{{ asset('/js/validator.js') }}"></script> --}}
<script src="{{ asset('/js/contratos/contratos.js') }}"></script>
<script src="{{ asset('/js/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/datepicker/js/bootstrap-datepicker.js') }}"></script>
@endsection
