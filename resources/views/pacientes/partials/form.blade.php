  <div class="box-body">
     
@include('partials.alerts')
    <div class="row clearfix">
        <div class="col-md-12 column">

     <div class="form-group col-sm-12">
        {!!Form::label('nome','Clinica')!!}
        <div class="input-group col-sm-12"> 
        

        {!! Form::select('clinica_id', [''=>''] + $usuariosForSelect, null, ['id'=>'clinica','class' => 'form-control']) !!}
        

        </div>
    </div>

 @include('partials.pessoa')


                        
                    </div>

                </div>
            </div>
        </div>
    </div>



   </div>


 

 