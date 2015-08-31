
    <div class="form-group col-sm-3">
        {!!Form::label('cep','CEP')!!}                                
        <div class="input-group">
         <span class="input-group-addon"><i class="fa fa-home"></i></span>
        {!!Form::text('cep',null,['class'=>'form-control','placeholder'=>'CEP',$disabled])!!}
        </div>
    </div>        
    <div class="form-group col-sm-12">
        {!!Form::label('endereco','Rua')!!}
        <div class="input-group col-sm-12"> 
        <span class="input-group-addon"><i class="fa fa-home"></i></span>
        {!!Form::text('endereco',null,['class'=>'form-control','placeholder'=>'Rua',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-3">
        {!!Form::label('numero','Número')!!}                                
        <div class="input-group">
         <span class="input-group-addon"><i class="fa fa-home"></i></span>
        {!!Form::text('numero',null,['class'=>'form-control','placeholder'=>'Número',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-5"> 
    {!!Form::label('bairro','Bairro')!!}                               
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-home"></i></span>
        {!!Form::text('bairro',null,['class'=>'form-control','placeholder'=>'Bairro',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-4"> 
    {!!Form::label('cidade','Cidade')!!}                               
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-home"></i></span>
        {!!Form::text('cidade',null,['class'=>'form-control','placeholder'=>'Cidade',$disabled])!!}
        </div>
    </div>

    <div class="form-group col-sm-3">
        {!!Form::label('estado','Estado')!!}                                
        <div class="input-group">
         <span class="input-group-addon"><i class="fa fa-home"></i></span>
        {!!Form::text('estado',null,['class'=>'form-control','placeholder'=>'Estado',$disabled])!!}
        </div>
    </div>
                              
                        


