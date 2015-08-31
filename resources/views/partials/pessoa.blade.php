    <div class="form-group col-sm-12">
        {!!Form::label('nome','Nome')!!}
        <div class="input-group col-sm-12"> 
        <span class="input-group-addon"><i class="fa fa-user"></i></span> 
        {!!Form::text('nome',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">
        {!!Form::label('nacimento','Data de Nascimento')!!}
        <div class="input-group date col-sm-6">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        {!!Form::text('nacimento',null,['class'=>'form-control date-picker','id'=>'data_inicio','data-date-format'=>'dd/mm/yyyy','placeholder'=>'dd/mm/yyyy',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">
         {!!Form::label('telefone','Telefone')!!}
         <div class="input-group col-sm-6">
         <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        {!!Form::text('telefone',null,['class'=>'form-control','placeholder'=>'Telefone','id'=>'phone1',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-6">
        {!!Form::label('celular','Celular')!!}
        <div class="input-group col-sm-6">
        <span class="input-group-addon"><i class="fa fa-mobile"></i></span> 
        {!!Form::text('celular',null,['class'=>'form-control','placeholder'=>'Celular','id'=>'mobile',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-12">
        {!!Form::label('celular','Email')!!}
        <div class="input-group col-sm-6">
        <span class="input-group-addon"><i class="fa fa-mobile"></i></span> 
        {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail','id'=>'mobile',$disabled])!!}
        </div>
    </div>