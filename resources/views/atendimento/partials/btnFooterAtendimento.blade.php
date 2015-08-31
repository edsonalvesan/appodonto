 <div class="box-footer">
    <div class="form-group">
   <div class="row">
  <div class="col-md-6">
      <a href="{{ route('orcamentos.edit',['id'=>$orcamento->id])}}" class="btn btn-default">
        <i class="fa fa-arrow-left"></i>
        Cancelar
      </a>
  </div>
  <div class="col-md-6 text-right">
    <button class="btn btn-success dave-btn-salvar" onclick="return validaContrato()" type="submit" data-loading-text="Salvando...">
  <i class="fa fa-save"></i>
  {!! $label or 'Salvar' !!}
</button>

  </div>
</div>

    </div>
</div>