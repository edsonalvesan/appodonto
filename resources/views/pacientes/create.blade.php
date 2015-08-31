@extends('layout.admin', ['modulo' => 'cadastro','selectItem' => 'proprietarios'])

@section('content')

<aside class="right-side">
                
                <section class="content-header">
                    <h1>
                        Paciente
                        <small>Novo</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Cadastro Base</a></li>
                        <li><a href="#">Paciente</a></li>
                        <li class="active">Novo</li>
                    </ol>
                </section>

                
                <section class="content">
                    <div class="row">
                        
                        <div class="col-xs-12">
                            
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>
                                </div>


   
    <?php $disabled = ''; ?>
    {!!Form::open(['route'=>'pacientes.store','id' => 'project-form'])!!}
 
    @include('pacientes.partials.form')
    
    @include('pacientes.partials.btnFooter')

    {!!Form::close()!!}
</div>



                 
                        </div>
                        
                        </div>
                    </div> 
                </section>
@endsection

@section('scripts')
@parent
<script src="{{ asset('/js/pacientes/pacientes.js') }}"></script>
@endsection
