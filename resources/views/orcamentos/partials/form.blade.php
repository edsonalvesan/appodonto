<div class="box-body">
    <!-- Nome Form Input  -->

                 
    <div class="panel panel-default">
    <div class="panel-heading">
    <small></small>  
    </div>
    <div class="panel-body">
    @include('partials.alerts')   
    <div class="row">

     <div class="form-group col-sm-12">
        {!!Form::label('nome','Paciente')!!}
        <div class="input-group col-sm-12"> 
        {!! Form::select('paciente_id', [''=>''] + $pacientesForSelect, null, ['id' => 'locador', 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group col-sm-12">
        {!!Form::label('descricao','Descrição')!!}                                  
        <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
        {!!Form::text('descricao',null,['class'=>'form-control','placeholder'=>'','id'=>'valor_contrato',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">
        {!!Form::label('valor','Valor')!!}                                  
        <div class="input-group col-sm-6">
        <span class="input-group-addon"><i class="fa fa-money"></i></span>
        {!!Form::text('valor',null,['class'=>'form-control','placeholder'=>'','id'=>'valor_pago_servico',$disabled])!!}
        </div>
    </div>

        </div> {{-- Paginação End --}}
    </div>
</div> 

  

 

   </div>