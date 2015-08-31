;(function($)
{
  'use strict';

  $(document).ready(function(){

    var $buscaRapida = $('.dave-busca-rapida').find('input[type="text"]');


    $buscaRapida.select2({
      minimumInputLength: 3,
      ajax: {
        url: "/api/usuarios",
        dataType: 'json',
        quietMillis: 250,
        data: function (term) {
          return { search: term };
        },
        results: function (data, page) {
          return { results: data };
        }
      },
      formatResult: function (usuario) {
        var markup = '<h4 class="text-left"><i class="fa fa-user"></i> '+usuario.nome+'</h4>';
        return markup;
      },
      formatSelection: function (usuario) {
        return usuario.nome;
      }
    }).on('change', function()
    {
      window.location = '/usuarios/'+this.value+'/editar';
    });
  });

})(window.jQuery);