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
        {!!Form::label('nome','Nome')!!}
        <div class="input-group col-sm-12"> 
        <span class="input-group-addon"><i class="fa fa-user"></i></span> 
        {!!Form::text('nome',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome',$disabled])!!}
        </div>
    </div>
        </div>
    </div>
</div>      

   </div>