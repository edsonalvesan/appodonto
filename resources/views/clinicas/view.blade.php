
 <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-user"></i> Dados da Clinica</h4>
                    </div>



    <?php $disabled = 'disabled'; ?>
    {!! Form::model($clinica,['route'=>['clinicas.view',$clinica->id]])!!}
    <div class="modal-body">
    <!-- Nome Form Input -->
    @include('clinicas.partials.form')
    
   </div> 

    <div class="modal-footer clearfix">
         <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
    </div>
    {!!Form::close()!!}

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>